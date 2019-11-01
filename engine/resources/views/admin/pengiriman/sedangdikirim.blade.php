@extends('layouts.carbon')

@section('title')
Pengiriman - Sedang Dikirim
@endsection
@push('js')
<script>
    $("#maps").onsubmit(function(e){
        e.preventDefault();
    })
</script>
@endpush
@section('content')
@include('layouts.ajax')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h1>Muatan Sudah Dikirim</h1>
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
                            <th>User</th>
                            <th>Driver</th>
                            <th>Budget</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                @foreach(preg_split('/(T|Z)/', $item->date_order, -1, PREG_SPLIT_NO_EMPTY) as $row)
                                    <td>{{ $row }}</td>
                                @endforeach
                                <td>@foreach($item->users as $item2) {{ $item2->name }} @endforeach</td>
                                <td>@foreach($item->driver as $item3) {{ $item3->name }} @endforeach</td>
                                <td>{{ "Rp. ".number_format($item->budget).",-" }}</td>
                                <td>
                                    {{-- <!-- <a href="#modalForm" data-toggle="modal" data-href="{{ url('admin/shipments/-6.9665945/107.5378117/tracking') }}" class="btn btn-primary">
                                        <i class="fa fa-magnifier"></i> Lacak</a> -->
                                    <form id="maps"
                                        action="{{ url('admin/shipments/-6.9665945/107.5378117/tracking') }}"
                                        method="GET">
                                        <input type="hidden" name="lat-driver" value="">
                                        <input type="hidden" name="long-driver" value="">
                                        <input type="hidden" name="latfrom" value="{{ $item->from->coordinates[0] }}">
                                        <input type="hidden" name="longfrom" value="{{ $item->from->coordinates[1] }}">
                                        <input type="hidden" name="latto" value="{{ $item->to->coordinates[0] }}">
                                        <input type="hidden" name="longto" value="{{ $item->to->coordinates[1] }}">
                                        <button type="submit" class="btn btn-primary"><i
                                                class="fa fa-magnifier"></i>Lacak</button>
                                    </form>
                                     --}}
                                    <a href="#modalForm" data-toggle="modal"
                                        data-href="{{ url('admin/shipments/'.$item->_id.'/tracking') }}"
                                    class="btn btn-primary">
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
