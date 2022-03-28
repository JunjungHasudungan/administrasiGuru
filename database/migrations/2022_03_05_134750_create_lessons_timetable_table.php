<?php

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
        Schema::create('lessons_timetable', function (Blueprint $table) {
            $table->id();
            // $table->enum('week', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat']);
            // $table->unsignedBigInteger('major_id')->index();
            // $table->foreign('major_id')->references('id')->on('majors')->onDelete('cascade');
            // $table->unsignedBigInteger('lesson_id')->index();
            // $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
            // $table->unsignedBigInteger('user_id')->index();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons_timetable');
    }
};
