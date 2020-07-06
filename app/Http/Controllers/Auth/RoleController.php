<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $role = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'admin']);


        $role->givePermissionTo($permission);
        $permission->assignRole($role);

    }
}
