@extends('layouts.carbon')

@section('title')
Driver
@endsection

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

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Drivers</h1>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-stripped" id="datatable">
                        <thead>
                            <th>No</th>
                            <th>Profile Picture</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Telephone</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>Gambar</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->telephone }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-outline-dark btn-sm dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">

                                            <a href="{{ url('drivers/'.$item->_id) }}" class="dropdown-item">
                                                <i class="fa fa-eye"></i> Detail</a>

                                            <form action="{{ url('drivers/'.$item->_id) }}" method="post"
                                                class="formDelete d-none">
                                                {!! csrf_field() !!}
                                                {!! method_field('delete') !!}
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
