<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingTimeTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_time_tracks', function (Blueprint $table) {
            $table->id();
            $table->integer('task_id');
            $table->integer('project_id');
            $table->text('notice')->nullable();
            $table->dateTime('start');
            $table->dateTime('end')->nullable();
            $table->integer('user_id');
            $table->dateTime('duration')->nullable();
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
        Schema::dropIfExists('working_time_tracks');
    }
}
