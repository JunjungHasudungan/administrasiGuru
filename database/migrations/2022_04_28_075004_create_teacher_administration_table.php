<?php

use App\Models\Classroom;
use App\Models\Major;
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
        Schema::create('teacher_administration', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('users');
            $table->integer('learning_method')->default(0);
            $table->string('subject_title');
            $table->foreignIdFor(Subject::class);
            $table->integer('weekday');
            $table->time('start_time');
            $table->time('end_time');
            $table->foreignIdFor(Classroom::class);
            $table->foreignIdFor(Major::class);
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
        Schema::dropIfExists('teacher_administration');
    }
};
