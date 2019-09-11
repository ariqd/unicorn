@extends('layouts.carbon')

@section('title')
Driver
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Detail Driver</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ @$edit ? url("admin/drivers/$data->_id") : url("driver")}}">
                        @csrf
                        @if(isset($edit))
                        @method("PUT")
                        @endif
                        <div class="form-group form-group-default">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" name="name" value="{{ $data->name ?? ""}}" readonly>
                        </div>

                        <div class="form-group form-group-default">
                            <label for="username">Username</label>
                            <input id="username" class="form-control" name="username" value="{{ $data->username ?? ""}}" readonly>
                        </div>

                        <div class="form-group form-group-default">
                            <label for="telephone">Telephone</label>
                            <input id="telephone" class="form-control" name="telephone" value="{{ $data->telephone ?? ""}}" readonly>
                        </div>

                        <div class="form-group form-group-default">
                            <label>Picture</label>
                            <img src="{{ $data->profile }}">
                            <input type="file" id="telephone" class="form-control" name="image">
                        </div>
                        {{-- <input type="submit" class="btn btn-dark form-control" value="Submit"> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
