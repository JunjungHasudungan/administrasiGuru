<?php

namespace Database\Seeders;

use App\Models\ManageClasses;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Week;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            RoleUserSeeder::class,
            MajorSeeder::class,
            ClassroomSeeder::class,
            SubjectTableSeeder::class,
            EventSeeder::class,
            MajorSubjectSeeder::class,
            TeacherSubjectSeeder::class,
            ClassroomSubjectSeeder::class,
            PostSeeder::class,
            PermissionSeeder::class,
            PermissionRoleSeeder::class,
            WeekDaySubjectSeeder::class,
            SheduleSeeder::class,

        ]);
    }
}
