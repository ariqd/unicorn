@extends('layouts.carbon')

@section('title')
Pengiriman
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            Kota Asal:
        </div>
        <div class="col-md-2">
            Kota Tujuan:
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <select>
                <option value="---">---</option>
                <option value="Bandung">Bandung</option>
            </select>
        </div>
        <div class="col-md-2">
            <select>
                <option value="---">---</option>
                <option value="Jakarta">Jakarta</option>
            </select>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>Line No.</th>
                            <th>Rute</th>
                            <th>Ambil Muatan</th>
                            <th>Tujuan Muatan</th>
                            <th>Jenis Truk</th>
                            <th>Fee</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->rute }}</td>
                                <td>{{ $item->ambil }}</td>
                                <td>{{ $item->tujuan }}</td>
                                <td>{{ $item->jenis }}</td>
                                <td>{{ $item->fee }}</td>
                                <td><button type="submit" class="btn btn-dark">Kirim</button></td>
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
