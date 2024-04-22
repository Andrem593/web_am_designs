<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tickets = Ticket::with('user')->get();        
        return view('home', compact('tickets'));
    }

    public function profile()
    {
        $user = auth()->user();
        return view('profile', compact('user'));
    }

    public function password()
    {
        return view('password');
    }

    public function users()
    {
        $users = User::all();
        $roles = Role::all();
        return view('admin.users', compact('users', 'roles'));
    }

    public function usersStore(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),                    
        ]);
        
        $role = Role::find($request->role);

        $user->assignRole($role->id);            
        return redirect()->route('users');
    }

    public function usersEdit(User $user)
    {
        return view('admin.users-edit', compact('user'));
    }

    public function usersUpdate(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('users');
    }

    public function usersDestroy(User $user)
    {
        $user->delete();
        return redirect()->route('users');
    }    

    public function role()
    {
        $roles = Role::all();
        return view('admin.role', compact('roles'));
    }

    public function roleStore(Request $request)
    {
        Role::create($request->all());
        return redirect()->route('role');
    }

    public function roleEdit(Role $role)
    {
        return view('admin.role-edit', compact('role'));
    }

    public function roleUpdate(Request $request, Role $role)
    {
        $role->update($request->all());
        return redirect()->route('role');
    }

    public function roleDestroy(Role $role)
    {
        $role->delete();
        return redirect()->route('role');
    }

    public function permissionsAssign(Request $request, User $user)
    {
        $role = Role::find($request->role_id);
        $permission = Permission::find($request->permission_id);

        $permission->assignRole($role->id);

        return redirect()->route('permissions');
    }

    public function permissions()
    {
        $permissions = Permission::all();
        $roles = Role::all();
        return view('admin.permission', compact('permissions', 'roles'));
    }

    public function permissionsStore(Request $request)
    {
        Permission::create($request->all());
        return redirect()->route('permissions');
    }

    public function permissionsEdit(Permission $permission)
    {
        return view('admin.permissions-edit', compact('permission'));
    }

    public function permissionsUpdate(Request $request, Permission $permission)
    {
        $permission->update($request->all());
        return redirect()->route('permissions');
    }

    public function permissionsDestroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permissions');
    }    
}
