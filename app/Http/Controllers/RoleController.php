<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all(); // Fetch all roles
        return view('admin.role-permission.role.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.role-permission.role.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name'
        ]);

        // Create a new role
        Role::create([
            'name' => $request->name
        ]);

        // Redirect back to the index with a success message
        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }

    public function edit(Role $role)
    {
        return view('admin.role-permission.role.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $role->id
        ]);

        // Update the role
        $role->update([
            'name' => $request->name
        ]);

        // Redirect back to the index with a success message
        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }

    public function destroy(Role $role)
    {
        // Delete the role
        $role->delete();

        // Redirect back to the index with a success message
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }

    public function addPermissionToRole($id)
    {
        $role = Role::findOrFail($id); // Find the role
        $permissions = Permission::all(); // Fetch all permissions

        return view('admin.role-permission.add-permissions', compact('role', 'permissions'));
    }

    public function updateRolePermissions(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        // Sync the selected permissions to the role
        $role->syncPermissions($request->permissions);

        return redirect()->route('roles.index')->with('success', 'Permissions updated successfully.');
    }
}
