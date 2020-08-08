@extends('master.master')

@section('content')
    <div class="container mt-3">
    <div class="card card-primary">
            <div class="card-header with-border">
                <h3 class="card-title">Create pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/profil" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Judul</label>
                        <input type="text" name="judul" class="form-control" id="exampleInputPassword1" placeholder="judul">
                    </div>
                <div class="form-group">
                  <label>Isi</label>
                  <textarea class="form-control" name="isi" rows="3" placeholder="Enter ..."></textarea>
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
