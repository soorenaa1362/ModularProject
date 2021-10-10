<?php

namespace Soorenaa\RolePermissions\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Soorenaa\RolePermissions\Repositories\RoleRepo;
use Soorenaa\RolePermissions\Http\Requests\RoleRequest;
use Soorenaa\RolePermissions\Repositories\PermissionRepo;
use Soorenaa\RolePermissions\Http\Requests\RoleUpdateRequest;

class RolePermissionsController
{

    private $roleRepo;
    private $permissionRepo;

    public function __construct(RoleRepo $roleRepo , PermissionRepo $permissionRepo)
    {
        $this->roleRepo = $roleRepo;
        $this->permissionRepo = $permissionRepo;
    }

    public function index()
    {
        $roles = $this->roleRepo->all();
        $permissions = $this->permissionRepo->all();
        return view('RolePermissions::index' , compact('roles' , 'permissions'));
    }

 
    public function store(RoleRequest $request)
    {
        return $this->roleRepo->create($request);
    }


    public function edit($roleId)
    {
        $role = $this->roleRepo->findById($roleId);
        $permissions = $this->permissionRepo->all();
        return view("RolePermissions::edit" , compact('role' , 'permissions'));
    }


    public function update(RoleUpdateRequest $request , $id)
    {
        $role = $this->roleRepo->update($id , $request);
        return redirect(route('role-permissions.index'));
    }

    

}