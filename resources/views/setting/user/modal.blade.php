{{-- Assign role modal --}}
<div class="modal fade" id="assign-role" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-mg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"> Assign Role </h4>
            </div>
            <div class="assign-role">

            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{-- End assign role --}}

{{-- Create user modal --}}
<div class="modal fade" id="new-user-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-mg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"> New User</h4>
            </div>
            <div class="modal-body">

                <form action="{{ url('/users') }}" class="form-horizontal" method="post"
                      id="create-user-form">
                    @csrf

                    {{-- Name  --}}
                    <div class="form-group form-group-sm">
                        <label class="col-md-3 control-label">Name </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>

                    {{-- Email  --}}
                    <div class="form-group form-group-sm">
                        <label class="col-md-3 control-label">Email</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="email">
                        </div>
                    </div>

                    {{-- Password  --}}
                    <div class="form-group form-group-sm">
                        <label class="col-md-3 control-label">Password</label>
                        <div class="col-md-8">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>

                    {{-- Confirm password  --}}
                    <div class="form-group form-group-sm">
                        <label class="col-md-3 control-label">Confirm Password</label>
                        <div class="col-md-8">
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" form="create-user-form" class="btn blue"> save</button>
                <button type="button" class="btn default" data-dismiss="modal">close</button>
            </div>
        </div>
    </div>
</div>
{{-- End create user modal --}}