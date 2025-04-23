<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Support\Facades\Hash;
class SuperAdminController extends Controller
{
    public function index()
    {
        $users = User::get();
 
        return view('super-admin.dashboard', compact('users'));
    }

    public function addAdmin(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin',
        ]);

        return redirect()->back()->with('success', 'Admin added successfully');
    }
    public function showGivePermissionPage()
{
    $admins = User::where('role', 'admin')->with('permissions')->get();
    return view('super-admin.give-permission', compact('admins'));
}

    public function addSuperAdmin(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'super-admin',
        ]);

        return redirect()->back()->with('success', 'Super Admin added successfully');
    }
     
public function givePermission(Request $request)
{
    $request->validate([
        'admin_id' => 'required|exists:users,id',
        'permission_name' => 'required|string|max:255',
    ]);

    $permission = Permission::firstOrCreate(['name' => $request->permission_name]);
    $admin = User::findOrFail($request->admin_id);

    $admin->permissions()->syncWithoutDetaching([$permission->id]);

    return back()->with('success', 'Permission assigned to admin!');
}
}
