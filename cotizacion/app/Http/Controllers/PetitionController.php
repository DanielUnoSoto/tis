<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Petition;
use App\PetitionState;
use App\Acquisition;
use App\Quotation;
use App\Area;

class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $petitions = Petition::with('user','unit','state', 'quotations')->get();
        $navbar = 'users.ug.layout';

        if (!empty($request->all())) {
            if ($request->first == $request->second) {
                $petitions = $petitions->where('created_at', '>=', $request->first);
            }else{
                $petitions = $petitions->whereBetween('created_at', [$request->first,$request->second]);
            }
        }

        if (auth('companies')->user()) {
            $area = auth('companies')->user()->area->description;
            $navbar = 'empresas.layout';
            $petitions = $petitions->where('state.name', 'aceptado')
                                    ->where('area', $area);
        }
        
        return view('solicitudes.index', compact('petitions', 'navbar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::get('description');

        return view('solicitudes.register', compact('areas'));
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
            "area" => $request->input('area'),
        ]);

        $petition_id = Petition::get()->last()->id;
        $names = $request->input('name');

        for ($i=0; $i < count($names); $i++) { 
            Acquisition::create([
                "petition_id" => $petition_id,
                "name" => $request->input('name')[$i],
                "details" => $request->input('details')[$i],
                "unit_type" => $request->input('unit_type')[$i],
                "quantity" => $request->input('quantity')[$i],
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
        $petition = Petition::where('id', $id)
                                ->with('acquisitions','user','unit')
                                ->first();

        $quotations = Quotation::where('petition_id', $id)->with('items')->get();

        if (auth('companies')->user()) {
            $navbar = 'empresas.layout';
        } else {
            $navbar = 'users.ug.layout';
        }
        
        return view('solicitudes.show', compact('petition', 'navbar', 'quotations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mandamos la vista para actualizar
        $petition = Petition::where('id', $id)->first();

        return view('solicitudes.response', compact('petition'));
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
        // actualizamos
        $new_state = PetitionState::where('name', $request->input('estado'))->first();
        
        $petition = Petition::where('id', $id)->update([
            "petitionstate_id" => $new_state->id
        ]);
        
        return redirect()->route('solicitudes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Quotation::where('petition_id', $id)->delete();
        Acquisition::where('petition_id', $id)->delete();
        Petition::where('id', $id)->delete();

        return redirect()->route('solicitudes.index');

    }
}
