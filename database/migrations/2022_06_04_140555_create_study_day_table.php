<?php

use App\Models\Subject;
use App\Models\WeekDaySubject;
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
        Schema::create('study_day', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Subject::class);
            $table->foreignIdFor(WeekDaySubject::class);
            $table->unsignedBigInteger('student_id');
            $table->time('day');
            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('atendance')->default(0);
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
        Schema::dropIfExists('study_day');
    }
};
