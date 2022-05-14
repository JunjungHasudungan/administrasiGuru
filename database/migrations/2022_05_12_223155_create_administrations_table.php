<?php

use App\Models\Classroom;
use App\Models\Subject;
use App\Models\User;
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
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Subject::class);
            $table->string('method')->default('teori');
            $table->string('statusCheck')->default('unchecked');
            $table->string('completeness')->default('continued');
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
