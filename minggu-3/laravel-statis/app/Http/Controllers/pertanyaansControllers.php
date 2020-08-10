<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pertanyaan;

class pertanyaansControllers extends Controller
{
    public function index()
    {
        // $data = DB::table('pertanyaans')->get();
        $data = Pertanyaan::all();
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

        // DB::table('pertanyaans')->insert([
        //     "judul" => $request['judul'],
        //     "isi" => $request['isi'],
        // ]);

        // $pertanyaan = new Pertanyaan();
        // $pertanyaan->judul = $request['judul'];
        // $pertanyaan->isi = $request['isi'];
        // $pertanyaan->save();

        $pertanyaan = Pertanyaan::create([
            "judul" => $request['judul'],
            "isi" => $request['isi'],
        ]);

        return redirect('/pertanyaans')->with('success', 'Pertanyaan berhasil di simpan');
    }

    public function edit($id)
    {
        // $data = DB::table('pertanyaans')->where('id', $id)->first();
        $data = Pertanyaan::find($id);

        return view('pertanyaans.edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        // DB::table('pertanyaans')
        //     ->where('id', $id)
        //     ->update([
        //         'judul' => $request['judul'],
        //         'isi' => $request['isi'],
        //     ]);

        $update = Pertanyaan::where('id', $id)->update([
            'judul' => $request['judul'],
            'isi' => $request['isi'],
        ]);

        return redirect('/pertanyaans')->with('success', 'Data berhasil di edit');
    }

    public function destroy($id)
    {
        // DB::table('pertanyaans')->where('id', $id)->delete();
        Pertanyaan::destroy($id);
        return redirect('/pertanyaans')->with('success', 'Data berhasil di delete');
    }

    public function show($id)
    {
        // $data = DB::table('pertanyaans')->where('id', $id)->first();
        $data = Pertanyaan::find($id);
        // dd($data);

        return view('pertanyaans.detail', compact('data'));
    }
}
