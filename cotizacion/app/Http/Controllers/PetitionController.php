<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Petition;
use App\PetitionState;
use App\Acquisition;


class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petitions = Petition::with('user','unit','state')->get();

        return view('solicitudes.index', compact('petitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $user = Auth::user();
        // $user_name = $user->name;
        // $unit_name = $user->unit->name;
        return view('solicitudes.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = Auth::user();
        $user_id = $user->id;
        $unit_id = $user->unit->id;
        $state = PetitionState::get()->where('name', 'espera')->first();

        Petition::create([
            "title" => $request->input('title'),
            "user_id" => $user_id,
            "unit_id" => $unit_id,
            "petitionstate_id" => $state->id,
            "description" => $request->input('description'),
            "price" => $request->input('price')

        ]);

        $petition_id = Petition::get()->last()->id;

        Acquisition::create([
            "petition_id" => $petition_id,
            "name" => $request->input('name'),
            "details" => $request->input('details'),
            "quantity" => $request->input('quantity'),
        ]);

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
        $petition = Petition::where('id', $id)
                                ->with('acquisitions','user','unit')
                                ->first();

        return view('solicitudes.show', compact('petition'));
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
