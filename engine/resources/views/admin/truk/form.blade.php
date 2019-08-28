@extends('layouts.carbon')

@section('title')
Pengaturan Truk
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
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
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection