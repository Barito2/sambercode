@extends('master.master')

@section('content')
    <div class="ml-3 mt-3 mr-3">
        <div class="card">
            <div class="card-header with-border">
              <h3 class="card-title">Bordered Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <a href="/pertanyaans/create" class="btn btn-primary mb-3">Add data</a>
              <table class="table table-bordered">
                <tbody>
                <tr>
                    <th style="width: 10px">#</th>
                    <th style="width: 500px">Judul</th>
                    <th>Isi</th>
                    <th style="width: 150px;text-align: center">Action</th>
                </tr>
                @forelse ($data as $key => $data)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$data->judul}}</td>
                        <td>{{$data->isi}}</td>
                        <td style="display: flex">
                            <a href="/pertanyaans/{{$data->id}}" class="btn btn-sm btn-info">Detail</a>
                            <a href="/pertanyaans/{{$data->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <form action="/pertanyaans/{{$data->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td style="text-align: center"> No Data</td>
                    </tr>
                @endforelse
                </tbody></table>
            </div>

          </div>
    </div>
@endsection
