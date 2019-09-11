<div class="modal-header bg-dark text-light">
    <h5 class="modal-title">Detail Pengguna</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-12">
        <form>
            <div class="form-group form-group-default">
                <label>Nama</label>
                <input type="text" class="form-control" value="{{$pengguna->name}}" readonly>
            </div>

            <div class="form-group form-group-default">
                <label>Username</label>
                <input type="text" class="form-control" value="{{$pengguna->username}}" readonly>
            </div>
            <div class="form-group form-group-default">
                <label>Telepon</label>
                <input type="text" class="form-control" value="{{$pengguna->telephone}}" readonly>
            </div>
        </form>
    </div>
    </div>
</div>
<div class="modal-footer">
                <button type="button" class="btn btn-success">Setujui Pendaftaran</button>
                <button type="button" class="btn btn-danger">Tolak Pendaftaran</button>
            </div>
