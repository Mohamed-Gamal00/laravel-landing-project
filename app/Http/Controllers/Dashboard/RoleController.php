<?php

namespace App\Http\Controllers\Dashboard;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{

    // function __construct()
    // {
    //     $this->middleware(['permission:role-list|role-create|role-edit|role-delete'], ['only' => ['index', 'store']]);
    //     $this->middleware(['permission:role-create'], ['only' => ['create', 'store']]);
    //     $this->middleware(['permission:role-edit'], ['only' => ['edit', 'update']]);
    //     $this->middleware(['permission:role-delete'], ['only' => ['destroy']]);
    // }
    function __construct()
    {
        $this->middleware(['permission:roles'], ['only' => ['index','show']]);
        $this->middleware(['permission:role-create'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:role-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:role-delete'], ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $roles = Role::orderBy('id', 'DESC')->paginate(5);
        return view('dashboard.roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::get();
        return view('dashboard.roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);

        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->permission);


        return redirect()->route('roles.index')
            ->with('success', 'Role created successfully');
    }
    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required|unique:roles,name',
    //         'permission' => 'required|array',
    //     ]);

    //     $role = Role::create([
    //         'name' => $request->input('name'),
    //         'guard_name' => 'web',
    //     ]);

    //     if ($request->has('permission')) {
    //         $permissions = $request->permission;

    //         foreach ($permissions as $permissionId) {
    //             $permission = Permission::find($permissionId);
    //             $role->givePermissionTo($permission);
    //         }
    //     }

    //     return redirect()->route('roles.index')
    //         ->with('success', 'Role created successfully');
    // }

    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
            ->where("role_has_permissions.role_id", $id)
            ->get();

        return view('dashboard.roles.show', compact('role', 'rolePermissions'));
    }

    public function edit($id)
    {
        $role = Role::find($id);
        // dd($role);
        $permissions = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return view('dashboard.roles.edit', compact('role', 'permissions', 'rolePermissions'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->update(['name' => $request->input('name')]);

        // $role->save();

        $role->syncPermissions($request->permission);

        return redirect()->route('roles.index')
            ->with('success', 'Role updated successfully');
    }

    public function destroy($id)
    {
        DB::table("roles")->where('id', $id)->delete();
        return redirect()->route('roles.index')
            ->with('success', 'Role deleted successfully');
    }
}
