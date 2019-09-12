@extends('layouts.carbon')

@section('title')
Partner - Belum Diproses
@endsection

@section('content')
@include('layouts.ajax')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>Line No.</th>
                            <th>Nama</th>
                            <th>No. HP</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->telephone}}</td>
                                <td>{{$item->address}}</td>
                                @if($item->activation == 1)
                                    <td>Disetujui</td>
                                @else
                                    <td>Belum Disetujui</td>
                                @endif
                                <td>
                                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Detail</button> -->
                                    <a href="#modalForm" data-toggle="modal" data-href="{{ url('admin/partner'.'/'.$item->_id)}}"
                                    class="btn btn-light btn-sm m-1">Detail</a>
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
