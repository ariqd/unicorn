<div class="modal-header bg-dark text-light">
    <h5 class="modal-title">Detail Truk</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-12">
            <form>
                <div class="form-group form-group-default">
                    <label>Weight</label>
                    <input type="text" class="form-control" value="{{ $truk->weight }}" readonly>
                </div>

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
    </div>
</div>