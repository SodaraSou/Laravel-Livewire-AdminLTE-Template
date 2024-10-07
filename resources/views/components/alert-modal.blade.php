@props(['id'])

<div>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-success">
        Delete
    </button>
    <div class="modal fade" id="modal-success">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h4 class="modal-title">Are you sure?</h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>This action can't not be reverse!</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" wire:click="delete('{{ $id }}')"
                        data-dismiss="modal">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</div>
