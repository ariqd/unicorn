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
                        <label>Capacity</label>
                        <input type="text" class="form-control" value="{{ $truk->capacity }}" readonly>
                    </div>

                    <div class="form-group form-group-default">
                        <label>Wheel</label>
                        <input type="text" class="form-control" value="{{ $truk->wheel }}" readonly>
                    </div>
                    <div class="form-group form-group-default">
                        <label>Size</label>
                        <input type="text" class="form-control" value="{{ $truk->size }}" readonly>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</div>