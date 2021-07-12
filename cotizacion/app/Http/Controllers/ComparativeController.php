<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Petition;
use App\PetitionState;
use App\Quotation;

class ComparativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $state_id = PetitionState::where('name', 'enviado')->first()->id;
        $petitions = Petition::where('petitionstate_id', $state_id)->get();

        return view('comparaciones.index', compact('petitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $navbar = '';
        $petition = Petition::where('id', $id)
                            ->with('unit', 'user', 'acquisitions')->first();
        $quotations = Quotation::where('petition_id', $id)
                        ->with('items')->get();

        if (Auth::user()) {
            if (Auth::user()->unit->type->description == 'unidad de gastos') {
                $navbar = 'users.ug.layout';
            }else {
                $navbar = 'users.ua.layout';
            }
        }else{
            $navbar = 'empresas.layout';
        }

        return view('comparaciones.show', compact('navbar', 'petition', 'quotations'));
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
        $new_state = PetitionState::where('name', $request->input('estado'))->first();

        Petition::where('id', $id)->update([
            'winner' => $request->input('winner'),
            'petitionstate_id' => $new_state->id,  
        ]);

        return redirect()->route('comparaciones.index');
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
