<?php

use App\Models\Classroom;
use App\Models\Event;
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
        Schema::create('timeTables', function (Blueprint $table) {
            $table->id();
            $table->integer('weekday');
            $table->foreignIdFor(Event::class)->nullable();
            $table->foreignIdFor(Classroom::class);
            $table->foreignIdFor(Subject::class);
            $table->time('start_time');
            $table->time('end_time');
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
        Schema::dropIfExists('timeTables');
    }
};
