<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show()
    {
        return view('layouts.login');
    }

    public function login()
    {
        $credentials = request()->only('email','password');

        if(Auth::attempt($credentials)){
            $user_role = Auth::user()->role_id;

            // if ($user_role == 3) {
            //     return 'aqui es la vista para ' . $user_role;
            // }

            // return $user_role;
            if ($user_role == 1) {
                return redirect('administracion');
            }elseif ($user_role == 2) {
                return redirect('unidad-gastos');
            }elseif ($user_role == 3) {
                return redirect('unidad-admin');
            }
        }

        return redirect('login');
    }

    // public function logout()
    // {
    //     return 'adios';
    // }
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
