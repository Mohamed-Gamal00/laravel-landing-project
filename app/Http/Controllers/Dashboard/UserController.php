<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{

    function __construct()
    {
        $this->middleware(['permission:users'], ['only' => ['index']]);
        $this->middleware(['permission:user-create'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:user-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:user-delete'], ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        $data = User::latest()->paginate(5);
        return view('dashboard.users.index', compact('data'));
    }

    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('dashboard.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles_name' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);

        $role = Role::where('name', $request->roles_name)->first();

        if ($role) {
            // Assign all permissions to the role (if desired)
            $permissions = Permission::pluck('id')->all();
            $role->syncPermissions($permissions);
            // Assign the role to the user
            $user->assignRole($role);
        } else {
            return redirect()->route('user.index')
            ->withErrors('The specified role does not exist.');
        }

        return redirect()->route('user.index')
            ->with('success', 'User created successfully');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('dashboard.users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('dashboard.users.edit', compact('user', 'roles', 'userRole'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('user.index')
            ->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('user.index')
            ->with('success', 'User deleted successfully');
    }
}
