<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ticket;
use App\Models\Empresa;
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
        $tickets = Ticket::with('user', 'usuarioAsignado')
        ->orderBy('id', 'desc')
        ->get();        
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
        $users = User::with('roles', 'empresa')->get();        
        $roles = Role::all();
        $empresas = Empresa::where('estado', 1)->get();
        return view('admin.users', compact('users', 'roles', 'empresas'));
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
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'empresa_id' => $request->companies,
        ]);
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

    public function companies()
    {
        $companies = Empresa::all();
        return view('admin.companies', compact('companies'));
    }

    public function companiesStore(Request $request)
    {
        $empresa = Empresa::create($request->all());
        return redirect()->route('companies');
    }

    public function companiesUpdate(Request $request, Empresa $empresa)
    {
        $empresa->update($request->all());
        return redirect()->route('companies');
    }

    public function companiesDestroy(Empresa $empresa)
    {
        $empresa->delete();
        return redirect()->route('companies');
    }    
}
