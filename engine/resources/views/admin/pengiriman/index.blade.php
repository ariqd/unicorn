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
                        <div class="col-md-8"></div>
                        <div class="col-md-2">
                            Kota Asal:
                        </div>
                        <div class="col-md-2">
                            Kota Tujuan:
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-2">
                            <select class="form-control">
                                <option value="---">---</option>
                                <option value="Bandung">Bandung</option>
                            </select>
                        </div>
                        <div class="col-md-2">
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
                            <th>Rute</th>
                            <th>Ambil Muatan</th>
                            <th>Tujuan Muatan</th>
                            <th>Jenis Truk</th>
                            <th>Fee</th>
                            <th></th>
                        </thead>
                        <tbody>
                            {{-- @foreach($data as $item) --}}
                            <tr>
                                <td>{{-- $loop->iteration --}} 1</td>
                                <td>{{-- $item->route --}} Bandung - Jakarta</td>
                                <td>{{-- $item->ambil --}} Bandung</td>
                                <td>{{-- $item->tujuan --}} Jakarta</td>
                                <td>{{-- $item->size --}} 10</td>
                                <td>{{-- "Rp. ".number_format($item->fee)-- }} Rp 200.000,-</td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Kirim</button></td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pilih Driver</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group form-group-default">
                        <label>Driver</label>
                        <select class="form-control">
                            <option value="---">---</option>
                            <option value="Test">Test</option>
                        </select>
                    </div>
                    <div class="form-group form-group-default">
                        <label>Jenis Kendaraan</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <div class="form-group form-group-default">
                        <label>Nopol</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</div>
@endsection