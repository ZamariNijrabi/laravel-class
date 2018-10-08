<?php

namespace App\Http\Controllers;


use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();
        $roles = Role::all();

        return view('setting.permission.permission', compact('permissions', 'roles'));
    }
}
