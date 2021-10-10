<?php

namespace Soorenaa\RolePermissions\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Soorenaa\RolePermissions\Repositories\RoleRepo;
use Soorenaa\RolePermissions\Http\Requests\RoleRequest;
use Soorenaa\RolePermissions\Repositories\PermissionRepo;

class RolePermissionsController
{

    private $roleRepo;
    public function __construct(RoleRepo $roleRepo)
    {
        $this->roleRepo = $roleRepo;
    }

    public function index(RoleRepo $roleRepo , PermissionRepo $permissionRepo)
    {
        $roles = $this->roleRepo->all();
        $permissions = $permissionRepo->all();
        return view('RolePermissions::index' , compact('roles' , 'permissions'));
    }

 
    public function store(RoleRequest $request)
    {
        return $this->roleRepo->create($request);
    }

}