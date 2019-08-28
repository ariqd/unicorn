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
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>No</th>
                            <th>Profile Picture</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Telephone</th>
                            <th></th>

                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>Gambar</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->telephone }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-outline-dark btn-sm dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">

                                            <a href="{{ url('drivers/'.$item->_id) }}" class="dropdown-item">
                                                <i class="fa fa-eye"></i> Detail</a>

                                            <form action="{{ url('drivers/'.$item->_id) }}" method="post"
                                                class="formDelete d-none">
                                                {!! csrf_field() !!}
                                                {!! method_field('delete') !!}
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
