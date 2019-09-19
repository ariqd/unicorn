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
                            <th>Partner</th>
                            <th>Driver</th>
                            <th>Budget</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>@foreach($item->partner as $item1)
                                    {{ $item1->name }}
                                </td>@endforeach
                                <td>@foreach($item->driver as $item2)
                                    {{ $item2->name }}
                                </td>@endforeach
                                <td style="">{{ "Rp. ".number_format($item->bidPrice) }}</td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#sudahbid">Sudah Bid</button>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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

<div class="modal fade" id="sudahbid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
