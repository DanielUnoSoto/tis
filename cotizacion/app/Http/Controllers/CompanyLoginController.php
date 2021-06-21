<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


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
        return view('empresas.home', compact('company'));
    }

}
