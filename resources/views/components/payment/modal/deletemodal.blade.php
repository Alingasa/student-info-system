<!-- Delete Modal -->
<div class="modal fade" id="deleteModal_{{ $pay->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel_{{ $pay->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel_{{ $pay->id }}">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete <span class="text-danger">{{ '"' . $pay->student->firstname . ' ' . $pay->student->lastname . '"' }}</span>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
