{{-- <form action="{{ route('admin.plates.delete', $plate->id) }}" method="POST" enctype="multipart/form-data">
    @method('DELETE')
    @csrf
    <div class="modal fade" id="modal-delete{{ $plate->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        {{ __('plate-delete') }}
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">Sei sicuro di voler cancellare <b>{{ $plate->id }}</b>?</div>
                <div class="modal-footer">
                    <button type="button" class="btn gray btn-outline-success"
                        data-dismiss="modal">{{ __('Cancel') }}</button>

                    <button type="button" class="btn gray btn-outline-danger">{{ __('Delete') }}</button>
                </div>
            </div>
        </div>
    </div>
</form>
 --}}
