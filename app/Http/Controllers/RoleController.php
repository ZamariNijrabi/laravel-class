<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();

        return view('setting.role.role', compact('roles'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        Role::create(['name' => $request->name]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        $permissions = Permission::all();

        return view('setting.permission.role-permissions', compact('role', 'permissions'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::find($id);

        $role->update($request->all());

        return redirect('/roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return void
     */
    public function destroy($id)
    {
        $role = Role::find($id);

        $role->delete();

        return back();
    }

    /**
     * Assign permissions to a role
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function syncPermissions(Request $request, $id)
    {
        $role = Role::find($id);

        $role->syncPermissions($request->permissions);

        return redirect('/roles');
    }

    /**
     * Assign permissions to a role
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function assignPermissions(Request $request)
    {
        $role = Role::find($request->role);

        $role->syncPermissions($request->permissions);

        return redirect('/roles');
    }

    /**
     * Get the users of a role
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUsers($id)
    {
        $users = Role::find($id)->users;

        return view('setting.role.role-users', compact('users'));
    }
}
