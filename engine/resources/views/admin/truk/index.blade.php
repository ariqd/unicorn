@extends('layouts.carbon')

@section('title')
Pengaturan Truk
@endsection

@section('content')
@include('layouts.ajax')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Pengaturan Truk</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>Line No.</th>
                            <th>Logo</th>
                            <th>Kapasitas</th>
                            <th>Wheel</th>
                            <th>Ukuran</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ $item->logo }}"></td>
                                <td>{{ $item->capacity }}</td>
                                <td>{{ $item->wheel }}</td>
                                <td>{{ $item->size }}</td>
                                <td>
                                    <a href="#modalForm" data-toggle="modal" data-href="{{ url('admin/truk/'.$item->_id) }}" class="btn btn-primary">
                                            <i class="fa fa-eye"></i> Detail</a>
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
