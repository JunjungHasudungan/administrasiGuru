<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'name'  => 'admin'
            ],
            [
                'id'    => 2,
                'name'  => 'siswa'
            ],
            [
                'id'    => 3,
                'name'  => 'guru'
            ],
            [
                'id'    => 4,
                'name'  => 'Kepala Sekolah'
            ],
        ];

        Role::insert($roles);
    }
}
