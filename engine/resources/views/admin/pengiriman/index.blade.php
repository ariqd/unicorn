@extends('layouts.carbon')

@section('title')
Pengiriman - Belum Dikirim
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h1>Muatan Belum Dikirim</h1>
                        </div>
                        <div class="col-md-2">
                            Kota Asal: <br/>
                            <select class="form-control">
                                <option value="---">---</option>
                                <option value="Bandung">Bandung</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            Kota Tujuan: <br/>
                            <select class="form-control">
                                <option value="---">---</option>
                                <option value="Jakarta">Jakarta</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>Line No.</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Ambil Muatan</th>
                            <th>Tujuan Muatan</th>
                            <th>User</th>
                            <th>Driver</th>
                            <th>Produk</th>
                            <th>Budget</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                @foreach(preg_split('/(T|Z)/', $item->date_order, -1, PREG_SPLIT_NO_EMPTY) as $row)
                                    <td>{{ $row }}</td>
                                @endforeach
                                <td>{{-- $item->from --}} Bandung</td>
                                <td>{{-- $item->to --}} Jakarta</td>
                                <td>@foreach($item->users as $item1) {{ $item1->name }} @endforeach</td>
                                <td>@foreach($item->driver as $item2) {{ $item2->name }} @endforeach</td>
                                <td>@foreach($item->product as $item3) {{ $item3->typeName }} @endforeach</td>
                                <td>{{ "Rp. ".number_format($item->budget).",-" }}</td>
                                <td>
                                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Kirim</button> -->
                                    <a href="#modalForm" data-toggle="modal" data-href="{{ url('admin/pengiriman'.'/'.$item->_id)}}"
                                    class="btn btn-light btn-sm m-1">Kirim</a>
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