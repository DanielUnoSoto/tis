<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Unit;
use App\School;
use App\Type;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        $user = Auth::user();
        $unit_type = $user->unit->type_id;
        $unit_name = $user->unit->name;
        if ($unit_type == 1) {
            return view('users.ug.index', compact('user'));
        }elseif ($unit_type == 2) {
            return view('users.ua.index', compact('user'));
        }elseif ($unit_type == 3) {
            return view('users.admin.index', compact('user'));
        }
    }

    //Muestra todos las unidades
    public function units(){
        $units = Unit::all();
        return view('unidades.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = School::get(['id','name']);
        $types = Type::get(['id','description']);
        return view('unidades.register', compact('schools', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Unit::create([
            "name" => $request->input('name'),
            "type_id" => $request->input('type_id'),
            "school_id" => $request->input('school_id')
        ]);

        return redirect()->route('units.all');
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
