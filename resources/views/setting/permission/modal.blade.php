{{-- Assign role modal --}}
<div class="modal fade" id="assign-role-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"> Assign Role </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <lable>Role</lable>
                            <select name="role" required class="form-control  select2me" form="assign-role-form">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}"> {{ $role->name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" form="assign-role-form" class="btn btn-sm blue"> save</button>
                <button type="button" class="btn btn-sm default" data-dismiss="modal">close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{-- End assign role --}}