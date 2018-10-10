{{--Delete modal--}}
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="text-danger">Warnings!</span>
            </div>
            <div class="modal-body">
                <form action="" id="delete-form" method="post">
                    @csrf
                    @method('delete')
                </form>
                <p>Are you sure do delete the record! The delete record is not recoverable?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No</button>
                <button type="submit" form="delete-form" class="btn btn-danger btn-sm">Yes, Delete</button>
            </div>
        </div>
    </div>
</div>