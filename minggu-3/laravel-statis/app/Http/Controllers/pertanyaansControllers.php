<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class pertanyaansControllers extends Controller
{
    public function index()
    {
        $data = DB::table('pertanyaans')->get();
        return view('pertanyaans.index', compact('data'));
    }

    public function create()
    {
        return view('pertanyaans.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        DB::table('pertanyaans')->insert([
            "judul" => $request['judul'],
            "isi" => $request['isi'],
        ]);

        return redirect('/pertanyaans')->with('success', 'Pertanyaan berhasil di simpan');
    }

    public function edit($id)
    {
        $data = DB::table('pertanyaans')->where('id', $id)->first();

        return view('pertanyaans.edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        DB::table('pertanyaans')
            ->where('id', $id)
            ->update([
                'judul' => $request['judul'],
                'isi' => $request['isi'],
            ]);

        return redirect('/pertanyaans')->with('success', 'Data berhasil di edit');
    }

    public function destroy($id)
    {
        DB::table('pertanyaans')->where('id', $id)->delete();
        return redirect('/pertanyaans')->with('success', 'Data berhasil di delete');
    }

    public function show($id)
    {
        $data = DB::table('pertanyaans')->where('id', $id)->first();

        return view('pertanyaans.detail', compact('data'));
    }
}
