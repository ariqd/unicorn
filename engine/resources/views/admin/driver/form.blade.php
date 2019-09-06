@extends('layouts.carbon')

@section('title')
Driver
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Tambah Driver <a href="{{ url('admin/drivers') }}" class="btn btn-secondary ml-2">Kembali</a>
                    </h2>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ url('admin/drivers') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group form-group-default">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group form-group-default">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>

                        <div class="form-group form-group-default">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="form-group form-group-default">
                            <label>Ketik Ulang Password</label>
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>

                        <div class="form-group form-group-default">
                            <label>No. HP</label>
                            <input type="text" class="form-control" name="telephone">
                        </div>

                        <div class="form-group form-group-default">
                            <label>Picture</label>
                            <input type="file" class="form-control" name="profile">
                        </div>

                        <button type="submit" class="btn btn-danger">Tambah Driver</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
