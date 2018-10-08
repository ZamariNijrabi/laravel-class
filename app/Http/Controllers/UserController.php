<?php

namespace App\Http\Controllers;


use App\Events\CreateUser;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function __construct()
    {
        $this->setPermissions();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        $roles = Role::all();

        return view('setting.user.user', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     * @return void
     */
    public function store(UserRequest $request)
    {
        $user = User::create($this->mapRequestData($request));

        $user->syncRoles('Guest');

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);

        $user->update([
            'password' => bcrypt($request->password)
        ]);

        return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }

    /**
     * Get the role of user
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUserRole($id)
    {
        $user = User::find($id);
        $roles = Role::all();

        return view('setting.user.assign-role', compact('user', 'roles'));
    }


    /**
     * Attach a role to the user
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function assignRole(Request $request, $id)
    {
        $user = User::find($id);
        $user->syncRoles($request->role);

        return back();
    }

    /**
     * Map the request data
     *
     * @param $request
     * @return array
     */
    private function mapRequestData($request)
    {
        return [
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password)
        ];
    }

    /**
     * Set permissions to each method
     *
     * @return void
     */
    private function setPermissions()
    {
        $this->middleware(['permission:View Users'])->only('index');
    }
}
