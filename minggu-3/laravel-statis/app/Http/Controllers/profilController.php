<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class profilController extends Controller
{
    public function create()
    {
        return view('profil.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        DB::table('pertanyaans')->insert([
            "judul" => $request['judul'],
            "isi" => $request['isi'],
        ]);

        return redirect('/profil/create');
    }
}
