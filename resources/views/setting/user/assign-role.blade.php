<div class="modal-body">
    @if($roles->count() > 0)
        <form action="/user/{{ $user->id }}/assign-role" class="form-horizontal" method="post"
              id="assign-role-form">
            @csrf
            {{-- role  --}}
            <div class="form-group form-group-sm">
                <label class="col-md-3 control-label">Role </label>
                <div class="col-md-8">
                    <select name="role" class="form-control">
                        @foreach($roles as $role)
                            <option value="{{$role->name}}"

                                    @if($user->roles->first())
                                    @if($user->roles->first()->id == $role->id)
                                    selected
                                    @endif
                                    @endif
                            >{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </form>
    @else
        <div class="alert alert-info"> No Role Created Yet :( <a href="/roles#new-role-modal">Create Role</a></div>
    @endif
</div>

<div class="modal-footer">
    @if($roles->count() > 0)
        <button type="submit" form="assign-role-form" class="btn blue"> save</button>
    @endif
    <button type="button" class="btn default" data-dismiss="modal">close</button>
</div>