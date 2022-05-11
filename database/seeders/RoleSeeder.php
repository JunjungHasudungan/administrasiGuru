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
                'name'  => 'kurikulum'
            ],
            [
                'id'    => 2,
                'name'  => 'Siswa'
            ],
            [
                'id'    => 3,
                'name'  => 'Guru'
            ],
            [
                'id'    => 4,
                'name'  => 'Kepala Sekolah'
            ],
            [
                'id'    => 5,
                'name'  => 'wali kelas'
            ],
            [
                'id'    => 6,
                'name'  => 'kepala jurusan'
            ],
            [
                'id'    => 7,
                'name'  => 'Admin Operator'
            ],
        ];

        Role::insert($roles);
    }
}
