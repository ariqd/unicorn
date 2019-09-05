@extends('layouts.carbon')

@section('title')
Partner - Belum Diproses
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>Line No.</th>
                            <th>Nama</th>
                            <th>Organisasi</th>
                            <th>No. KTP</th>
                            <th>Email</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            {{-- @foreach($data as $item) --}}
                            <tr>
                                <td>1</td>
                                <td>testing</td>
                                <td>abc</td>
                                <td>11223344556677</td>
                                <td>a@a.com</td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Detail</button></td>
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
                <h5 class="modal-title" id="exampleModalLabel">Detail Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                        <div class="form-group form-group-default">
                            <label>Email</label>
                            <input type="text" class="form-control" readonly>
                        </div>

                        <div class="form-group form-group-default">
                            <label>Kata Sandi</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="form-group form-group-default">
                            <label>Nama</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="form-group form-group-default">
                            <label>No. KTP</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="form-group form-group-default">
                            <label>Kantor/Organisasi</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="form-group form-group-default">
                            <label>No. HP</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="form-group form-group-default">
                            <label>Foto KTP</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="form-group form-group-default">
                            <label>Selfie dengan KTP</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Setujui Pendaftaran</button>
                <button type="button" class="btn btn-danger">Tolak Pendaftaran</button>
            </div>
        </div>
    </div>
</div>
@endsection
