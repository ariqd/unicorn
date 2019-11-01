<div class="modal-header bg-dark text-light">
    <h5 class="modal-title">Detail Driver</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ @$edit ? url('admin/drivers/$data->_id') : url('driver')}}">
                @csrf
                @if(isset($edit))
                @method("PUT")
                @endif
                <div class="form-group form-group-default">
                    <label for="name">Name</label>
                    <input id="name" class="form-control" name="name" value="{{ $data->name ?? ''}}" readonly>
                </div>

                <div class="form-group form-group-default">
                    <label for="username">Username</label>
                    <input id="username" class="form-control" name="username" value="{{ $data->username ?? ''}}" readonly>
                </div>

                <div class="form-group form-group-default">
                    <label for="telephone">Telephone</label>
                    <input id="telephone" class="form-control" name="telephone" value="{{ $data->telephone ?? ''}}" readonly>
                </div>

                <div class="form-group form-group-default">
                    <label>Picture</label>
                    <img src="{{ $data->profile }}">
                    <input type="file" id="telephone" class="form-control" name="image">
                </div>
            </form>
        </div>
    </div>
</div>
