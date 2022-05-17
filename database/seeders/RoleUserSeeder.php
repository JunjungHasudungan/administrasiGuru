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
        Role::findOrFail(1)->roleUsers()->sync(3); // kurikulum
        Role::findOrFail(2)->roleUsers()->sync(4); // kepala sekolah
        Role::findOrFail(3)->roleUsers()->sync([ 1, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 39]); // para guru mata pelajaran
        Role::findOrFail(4)->roleUsers()->sync([18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30]); // para siswa
        Role::findOrFail(5)->roleUsers()->sync([ 5, 6, 7, 10, 11, 12, 13, ]); // para guru wali kelas
        Role::findOrFail(6)->roleUsers()->sync([5, 13]);
        Role::findOrFail(7)->roleUsers()->sync(59);

    }
}
