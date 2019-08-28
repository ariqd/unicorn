@extends('layouts.carbon')

@section('title')
Pengaturan Truk
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>Line No.</th>
                            <th>Nopol</th>
                            <th>Tipe Truk</th>
                            <th>Kategori Truk</th>
                            <th>Driver</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            {{-- @foreach($data as $item) --}}
                            <tr>
                                <td>1</td>
                                <td>D 1234 FF</td>
                                <td>Fuso</td>
                                <td>Box</td>
                                <td>Test</td>
                                <td><button type="submit" class="btn btn-primary">Lacak</button></td>
                                <td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Kirim</button></td>
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
                <h5 class="modal-title" id="exampleModalLabel">Ubah Informasi Kendaraan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group form-group-default">
                        <label>Nopol</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group form-group-default">
                        <label>Tipe Truk</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group form-group-default">
                        <label>Kategori Truk</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-group form-group-default">
                        <label>Driver</label>
                        <select>
                            <option value="---">---</option>
                            <option value="Test">Test</option>
                        </select>
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
