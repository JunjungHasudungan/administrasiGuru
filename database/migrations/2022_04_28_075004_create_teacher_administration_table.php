<?php

use App\Models\Classroom;
use App\Models\Major;
use App\Models\Subject;
use App\Helpers\Constant;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('teacher_administration', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('teacher_id');
            // $table->foreign('teacher_id')->references('id')->on('users');
            // $table->string('learning_method')->default('teori');
            $table->string('subject_title');
            // $table->foreignIdFor(Subject::class);
            // $table->foreignIdFor(Classroom::class);
            // $table->string('status')->default('unchecked')->nullable();
            // $table->string('completeness')->default('bersambung');
            // $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher_administration');
    }
};
