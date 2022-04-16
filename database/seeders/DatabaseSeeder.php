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
            MajorSeeder::class,
            WeekSeeder::class,
            ClassroomSeeder::class,
            SubjectSeeder::class,
            EventSeeder::class,
            // ClassroomStudentSeeder::class,
            TeacherSubjectSeeder::class,

        ]);
    }
}
