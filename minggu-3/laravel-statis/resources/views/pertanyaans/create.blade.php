@extends('master.master')

@section('content')
    <div class="container mt-3">
    <div class="card card-primary">
            <div class="card-header with-border">
                <h3 class="card-title">Create pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/pertanyaans" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Judul</label>
                        <input type="text" name="judul" class="form-control" value="{{old('judul','')}}" id="exampleInputPassword1" placeholder="judul">
                        @error('judul')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                <div class="form-group">
                <label>Isi</label>
                <textarea class="form-control" name="isi" rows="3" placeholder="Enter ...">{{old('isi','')}}</textarea>
                @error('isi')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
            </div>
@endsection
