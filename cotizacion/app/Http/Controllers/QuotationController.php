<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Quotation;
use App\Petition;
use App\Item;
class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $company_id = auth('companies')->user()->id;

        $quotations = Quotation::where('company_id', $company_id)->get();

        return view('cotizaciones.index', compact('quotations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //dd($request->fullUrl());
        $petition_id = $request->get('id');

        $petition = Petition::where('id', $petition_id)
                                ->with('acquisitions')
                                ->first();

        return view('cotizaciones.register', compact('petition'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //estoy reciviendo el id de la solicitud por la url
        //la creo como un array en el action del form [id => $petition_id]
        //$request->get('petition_id')

        $company_id = auth('companies')->user()->id;
        Quotation::create([
            "petition_id" => $request->input('petition_id'),
            "company_id" => $company_id,
            "petitioner" => $request->input('petitioner'),
            "company_name" => $request->input('company_name'),
            "company_nit" => $request->input('company_nit'),
            "safeguard" => $request->input('safeguard'),
            "company_phone" => $request->input('company_phone'),
            "total" => $request->input('total'),
        ]);


        $quotation_id = Quotation::get()->last()->id;
        $items = $request->input('quantity');

        for ($i=0; $i < count($items); $i++) { 
            Item::create([
                "quotation_id" => $quotation_id,
                "quantity" => $request->input('quantity')[$i],
                "type_unit" => $request->input('type_unit')[$i],
                "details" => $request->input('details')[$i],
                "unit_value" => $request->input('unit_value')[$i],
                "total_value" => $request->input('total_value')[$i],
            ]);
        }

        return redirect()->route('solicitudes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
