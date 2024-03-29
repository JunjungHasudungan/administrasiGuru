<?php

// use App\Models\Classroom;
// use App\Models\Subject;
use App\Models\{User, Classroom, Shedule, Subject};
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
        Schema::create('administrations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignIdFor(Classroom::class);
            $table->foreignIdFor(Subject::class);
            $table->foreignIdFor(Shedule::class);
            $table->integer('method')->default(1);
            $table->integer('statusCheck')->default(0);
            $table->string('completeness')->default('continued');
            $table->string('description', 100)->nullable();
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('administrations');
    }
};
