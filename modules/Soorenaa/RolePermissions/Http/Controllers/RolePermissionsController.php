<?php

namespace Soorenaa\RolePermissions\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Soorenaa\RolePermissions\Http\Requests\RoleRequest;

class RolePermissionsController
{

    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('RolePermissions::index' , compact('roles' , 'permissions'));
    }

 
    public function store(RoleRequest $request)
    {
        
    }

}