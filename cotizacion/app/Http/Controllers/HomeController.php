<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
}
