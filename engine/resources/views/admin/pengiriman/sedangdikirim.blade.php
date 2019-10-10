@extends('layouts.carbon')

@section('title')
Pengiriman - Sedang Dikirim
@endsection

@section('content')
@include('layouts.ajax')

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
                            <th>User</th>
                            <th>Driver</th>
                            <th>Budget</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>@foreach($item->users as $item2) {{ $item2->name }} @endforeach</td>
                                <td>@foreach($item->driver as $item3) {{ $item3->name }} @endforeach</td>
                                <td>{{ "Rp. ".number_format($item->budget).",-" }}</td>
                                <td>
                                    <!-- <a href="#modalForm" data-toggle="modal" data-href="{{ url('admin/shipments/-6.9665945/107.5378117/tracking') }}" class="btn btn-primary">
                                        <i class="fa fa-magnifier"></i> Lacak</a> -->
                                    <form action="{{ url('admin/shipments/-6.9665945/107.5378117/-6.9665945/108.5378117/tracking') }}" method="GET">
                                        <input type="hidden" name="lat-driver" value="">
                                        <input type="hidden" name="long-driver" value="">
                                        <input type="hidden" name="lat-from" value="{{ $item->from->coordinates[0] }}">
                                        <input type="hidden" name="long-from" value="{{ $item->from->coordinates[1] }}">
                                        <input type="hidden" name="lat-to" value="{{ $item->to->coordinates[0] }}">
                                        <input type="hidden" name="long-to" value="{{ $item->to->coordinates[1] }}">
                                    </form>

                                    <a href="#modalForm" data-toggle="modal" data-href="{{ url('admin/shipments/-6.9665945/107.5378117/-6.9665945/108.5378117/tracking') }}" class="btn btn-primary">
                                        <i class="fa fa-magnifier"></i>Lacak</a>
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
