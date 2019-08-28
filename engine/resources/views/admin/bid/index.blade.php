@extends('layouts.carbon')

@section('title')
Driver
@endsection
@push("js")
<script>
    $(".kota").select2();
</script>
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-right">
                        <label>
                            Filter Kota Tujuan
                        </label>
                        <select class="form-control kota"></select>
                    </div>

                    <div class="float-right ">
                        <label>
                            Filter Kota Asal
                        </label>
                        <select class="form-control kota"></select>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>No</th>
                            <th>Rute</th>
                            <th>Alamat Pengambilan</th>
                            <th>Tujuan Pengantaran</th>
                            <th>Jenis Truk</th>
                            <th>Budget</th>
                            <th>Lacak</th>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>Tunggu API_KEY MAPS</td>
                                <td>Tunggu API_KEY MAPS</td>
                                <td>Tunggu API_KEY MAPS</td>
                                <td>{{$item->idTruck[0]->size}} tidak ada isian ini truck jenis apa, cuma size /
                                    capacity</td>
                                <td style="">{{"Rp. ".number_format($item->budget)}}</td>
                                <td><button class="btn btn-dark">Lacak</button></td>
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
