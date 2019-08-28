@extends('layouts.carbon')

@section('title')
Pengiriman - Sedang Dikirim
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
                            <th>Status Pengiriman</th>
                            <th>Ambil Muatan</th>
                            <th>Tujuan Muatan</th>
                            <th>Jenis Truk</th>
                            <th>Budget</th>
                            <th></th>
                        </thead>
                        <tbody>
                            {{-- @foreach($data as $item) --}}
                            <tr>
                                <td>1</td>
                                <td>Sedang dalam perjalanan</td>
                                <td>Gudang Bandung</td>
                                <td>Gudang Jakarta</td>
                                <td>Box</td>
                                <td>Rp 200.000,-</td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Lacak</button></td>
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
                <h5 class="modal-title" id="exampleModalLabel">Lacak Pengiriman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            </div>
        </div>
    </div>
</div>
@endsection