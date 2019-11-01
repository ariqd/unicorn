<div class="modal-header bg-dark text-light">
    <h5 class="modal-title">Ubah Informasi Kendaraan</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-12">
            <form method="post" action="{{ @$edit ? url('admin/truk/$truk->_id') : url('trucks/$truk->_id')}}">
                @csrf
                @method('PUT')
                <div class="form-group form-group-default">
                    <label>Weight</label>
                    <input type="text" class="form-control" value="{{ $truk->weight }}">
                </div>

                <div class="form-group form-group-default">
                    <label>Capacity</label>
                    <input type="text" class="form-control" value="{{ $truk->capacity }}">
                </div>
                <div class="form-group form-group-default">
                    <label>Wheel</label>
                    <input type="text" class="form-control" value="{{ $truk->wheel }}">
                </div>
                <div class="form-group form-group-default">
                    <label>Size</label>
                    <input type="text" class="form-control" value="{{ $truk->size }}">
                </div>
                <button type="submit" class="btn btn-success">Ubah</button>
            </form>
        </div>
    </div>
</div>