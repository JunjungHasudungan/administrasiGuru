<?php

use App\Models\Classroom;
use App\Models\Role;
use App\Models\Subject;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignIdFor(Role::class);
            $table->foreignIdFor(Classroom::class)->nullable();
            $table->string('student_address')->nullable();
            $table->string('student_licence_number')->nullable();
            $table->string('teacher_qualifications')->nullable();
            $table->index(['role_id', 'subject_id', 'classroom_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
