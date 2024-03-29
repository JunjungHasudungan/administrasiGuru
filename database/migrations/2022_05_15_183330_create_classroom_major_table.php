<?php

// use App\Models\Classroom;
use App\Models\{Major, Classroom};
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
        Schema::create('classroom_major', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('classroom_major');
    }
};
