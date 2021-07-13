<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Quotation;
use App\Petition;

class CompanyLoginController extends Controller
{
    
   use AuthenticatesUsers;

    protected $companyloginview = "empresas.login";

    function __construct(){

        $this->middleware('auth:companies', ['only' => ['home']]);
        $this->middleware('deletedCache', ['only' => ['home']]);
    }

     protected function guard()
    {
        return Auth::guard('companies');
    }

    public function showLoginForm()
    {
        return view('empresas.login');
    }

    public function authenticated(){
        return redirect()->route('empresa.home');
    }

    public function home(){
        $company = auth('companies')->user();


        $petitions = array();
        $company_id = $company->id;

        $quotations = Quotation::get()->where('company_id', $company_id);
        foreach ($quotations as $quotation) {
            $petition = Petition::with('state')->get()->where('id', $quotation->petition_id)
                                ->where('state.name', 'aprobado')->first();
            if ($petition != null) {
                array_push($petitions, $petition);
            }
        }


        return view('empresas.home', compact('company', 'petitions'));
    }

}
