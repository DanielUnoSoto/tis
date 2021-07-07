<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petition;
use App\PetitionState;

class ReceivedController extends Controller
{
    public function index()
    {
    	$petitions = Petition::with('state')->get()->where('state.name', 'espera');

    	return view('users.ua.recibidos.index', compact('petitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        
        return view('users.ua.recibidos.show', compact('petition', 'quotations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petition = Petition::where('id', $id)->first();

        return view('users.ua.recibidos.reponse', compact('petition'));
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

        if ($request->input('comment')) {
        
            $petition = Petition::where('id', $id)->update([
            "petitionstate_id" => $new_state->id,
            "comment" => $request->input('comment'),
            ]);

        } else {
            $petition = Petition::where('id', $id)->update([
                "petitionstate_id" => $new_state->id
            ]);
        }
        
        return redirect()->route('recibidos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
