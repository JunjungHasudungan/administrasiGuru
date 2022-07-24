<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{

    public function run()
    {
        $Permissions = Permission::all();

        // Role::findOrFail(3)->permissions()->sync($Permissions->pluck('id'));
    }
}
