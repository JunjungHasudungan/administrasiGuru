<?php

use App\Models\Attendance;
use App\Models\Classroom;
use App\Models\Major;
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
            $table->integer('status')->default(0);
            $table->foreignIdFor(Major::class)->nullable();
            $table->integer('is_active')->default(1);
            $table->unsignedBigInteger('teacher_major')->nullable();
            $table->unsignedBigInteger('headOfDepartement')->nullable();
            $table->foreign('headOfDepartement')->references('id')->on('majors')->onDelete('cascade');
            $table->foreignIdFor(Attendance::class)->nullable();
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
