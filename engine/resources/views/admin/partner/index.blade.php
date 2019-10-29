@extends('layouts.carbon')

@section('title')
Partner - Belum Diproses
@endsection

@section('content')
@include('layouts.ajax')

@push('css')
<link href="{{ asset('ass-admin/plugins/DataTables/datatables.min.css') }}" rel="stylesheet" />
@endpush
@push('js')
<script src="{{ asset('ass-admin/plugins/DataTables/datatables.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#datatable').DataTable();

        $('.btnDelete').on('click', function (e) {
            e.preventDefault();
            var parent = $(this).parent();

            swal({
                    title: "Apa anda yakin?",
                    text: "Data akan terhapus secara permanen!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then(function (willDelete) {
                    if (willDelete) {
                        parent.find('.formDelete').submit();
                    }
                });
        });
    });
</script>
@endpush

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Partner</h1>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>Line No.</th>
                            <th>Nama</th>
                            <th>No. HP</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->telephone}}</td>
                                <td>{{$item->address}}</td>
                                <td>
                                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Detail</button> -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-outline-dark btn-sm dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#modalForm" data-toggle="modal" data-href="{{ url('admin/partner/'.$item->_id)}}" class="dropdown-item">
                                                <i class="fa fa-eye"></i> Detail</a>
                                            <a href="#" class="dropdown-item btnDelete">
                                                <i class="fa fa-trash"></i> Delete</a>
                                            <form action="{{ url('admin/partner/'.$item->_id) }}" method="post"
                                                class="formDelete d-none">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </div>
                                    </div>
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
