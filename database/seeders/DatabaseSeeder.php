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
            CategorySeeder::class,
            LessonSeeder::class,
            EventSeeder::class,
            SubjectUserSeeder::class,
            // RoleUserSeeder::class,
            // PermissionSeeder::class,
            // ClassroomSubjectSeeder::class,
            // ClassStudentSeeder::class,  masih dalam perbaikan
            // ClassroomUserSeeder::class,
            // BiodatasSeeder::class,
            // TeacherLessonSeeder::class, masih dalam perbaikan
            // PermissionRoleSeeder::class,
            // ManageClasses::class,

        ]);
    }
}
