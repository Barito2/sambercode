<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function register(Request $request)
    {
        
        return view('welcomee', ['first' => $request->firstName,'last' => $request->lastName,]);
    }
}
