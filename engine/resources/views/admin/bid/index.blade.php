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
                            <th>Ambil Muatan</th>
                            <th>Tujuan Muatan</th>
                            <th>Jenis Truk</th>
                            <th>Budget</th>
                            <th></th>
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
                                <td><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#sudahbid">Sudah Bid</button></td>
                            </tr>
                            @endforeach
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
                <h5 class="modal-title" id="exampleModalLabel">Masukkan Nilai Bid</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group form-group-default">
                        <label>Budget</label>
                        <input type="text" class="form-control" readonly>
                    </div>

                    <div class="form-group form-group-default">
                        <label>Bid Anda</label>
                        <input type="text" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Bid</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="sudahbid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bid Anda</h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group form-group-default">
                        <label>Budget</label>
                        <input type="text" class="form-control" readonly>
                    </div>

                    <div class="form-group form-group-default">
                        <label>Bid Anda</label>
                        <input type="text" class="form-control" readonly>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection
