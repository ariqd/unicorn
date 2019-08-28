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
                            @foreach($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nopol }}</td>
                                <td>{{ $item->namatruk }}</td>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->driver }}</td>
                                <td><button type="submit" class="btn btn-primary">Lacak</button></td>
                                <td><button type="submit" class="btn btn-secondary">Ubah</button></td>
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
