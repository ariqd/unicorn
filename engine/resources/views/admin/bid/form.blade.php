@extends('layouts.carbon')

@section('title')
Driver
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form>
                        <div class="form-group form-group-default">
                            <label>Name</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group form-group-default">
                            <label>Username</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group form-group-default">
                            <label>Password</label>
                            <input type="password" class="form-control">
                        </div><div class="form-group form-group-default">
                            <label>Confirmation Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group form-group-default">
                            <label>Telephone</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group form-group-default">
                            <label>Email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group form-group-default">
                            <label>Picture</label>
                            <input type="file" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
