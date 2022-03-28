<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::findOrFail(1)->users()->sync(2); // kepala sekolah
        Role::findOrFail(2)->users()->sync(3); // admin
        Role::findOrFail(6)->users()->sync(3); // kurikulum
        Role::findOrFail(3)->users()->sync([4, 5, 6, 10, 13, ]); // para guru wali kelas
        Role::findOrFail(4)->users()->sync([ 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 39]); // para guru mata pelajaran
        Role::findOrFail(5)->users()->sync([18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30]); // para siswa
    }
}
