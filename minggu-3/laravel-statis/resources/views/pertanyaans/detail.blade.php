@extends('master.master')

@section('content')
<div class="container mt-3">
    <h1>Judul : {{$data->judul}}</h1>
    <p>isi : {{$data->isi}}</p>
    <p>tgl dibuat : {{$data->tanggal_dibuat}}</p>
    <p>tgl diperbarui : {{$data->tanggal_diperbarui}}</p>
</div>
@endsection
