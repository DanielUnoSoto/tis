<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company; 
use App\Area;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('empresas.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all('id', 'description');
        return view('empresas.register', compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Company::create([
            "name" => $request->input('name'),
            "area_id" => $request->input('area'),
            "description" => $request->input('descrip'),
            "direction" => $request->input('direction'),
            "nit" => $request->input('nit'),
            "city" => $request->input('city'),
            "phone" => $request->input('phone'),
            "email" => $request->input('email'),
            "password" => bcrypt($request->input('password'))
        ]);

        return redirect()->route('empresas.index');
    }
}
