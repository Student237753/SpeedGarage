<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all(); // Fetch all permissions
        return view('admin.role-permission.permission.index', compact('permissions'));
    }

    public function create()
    {
        return view('admin.role-permission.permission.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255|unique:permissions,name'
        ]);

        // Create a new permission
        Permission::create(['name' => $request->name]);

        // Redirect back to the index with a success message
        return redirect()->route('permissions.index')->with('success', 'Permission created successfully.');
    }

    public function edit(Permission $permission)
    {
        return view('admin.role-permission.permission.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255|unique:permissions,name,' . $permission->id
        ]);

        // Update the permission
        $permission->update(['name' => $request->name]);

        // Redirect back to the index with a success message
        return redirect()->route('permissions.index')->with('success', 'Permission updated successfully.');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete(); // Delete the permission

        // Redirect back to the index with a success message
        return redirect()->route('permissions.index')->with('success', 'Permission deleted successfully.');
    }
}
