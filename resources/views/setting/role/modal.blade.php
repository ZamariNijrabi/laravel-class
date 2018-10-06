{{-- Assign role modal --}}
<div class="modal fade" id="assign-role" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-mg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"> Assign Role </h4>
            </div>
            <div class="modal-body assign-role">

            </div>
            <div class="modal-footer">
                <button type="submit" form="assign-role-form" class="btn blue"> save</button>
                <button type="button" class="btn default" data-dismiss="modal">close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{-- End assign role --}}

{{-- Create role modal --}}
<div class="modal fade" id="new-role-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-mg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"> New Role</h4>
            </div>
            <div class="modal-body">

                <form action="{{ url('/roles') }}" class="form-horizontal" method="post"
                      id="create-role-form">
                    @csrf

                    {{-- Name  --}}
                    <div class="form-group form-group-sm">
                        <label class="col-md-3 control-label">Name </label>
                        <div class="col-md-8">
                            <input type="text" required class="form-control" name="name">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" form="create-role-form" class="btn blue"> save</button>
                <button type="button" class="btn default" data-dismiss="modal">close</button>
            </div>
        </div>

    </div>

</div>
{{-- End create role modal --}}



{{-- Edit role modal --}}
<div class="modal fade" id="edit-role-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-mg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"> New Role</h4>
            </div>
            <div class="modal-body">

                <form action="" class="form-horizontal" method="post"
                      id="edit-role-form">
                    @csrf
                    @method('put')

                    {{-- Name  --}}
                    <div class="form-group form-group-sm">
                        <label class="col-md-3 control-label">Name </label>
                        <div class="col-md-8">
                            <input type="text" required class="form-control" name="name" id="role-name">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" form="edit-role-form" class="btn blue">Save</button>
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>

</div>
{{-- End edit role modal --}}
