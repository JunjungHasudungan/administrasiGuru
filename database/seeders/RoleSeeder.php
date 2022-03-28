<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = [
            [
                'id'        => 1,
                'name'      => 'Kepala Sekolah',
            ],
            [
                'id'        => 2,
                'name'      => 'Admin',
            ],
            [
                'id'        => 3,
                'name'      => 'Wali Kelas',
            ],
            [
                'id'        => 4,
                'name'      => 'Guru mata pelajaran',
            ],
            [
                'id'        => 5,
                'name'      => 'Siswa',
            ],
            [
                'id'        => 6,
                'name'      => 'Kurikulum',
            ],
        ];

        Role::insert($roles);

    }
}
