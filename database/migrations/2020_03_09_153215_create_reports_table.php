<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('schedule_id');
            $table->integer('no_modules');
            $table->integer('sessions_completed');
            $table->integer('sessions_missed');
            $table->integer('sessions_incomplete');
            $table->double('progress');
            $table->json('sessions')->nullable();
            $table->json('time_spent')->nullable();
            $table->json('study_times')->nullable();
            $table->json('module_ratings')->nullable();
            $table->json('predictions')->nullable();
            $table->json('sessiondetails')->nullable();
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
        Schema::dropIfExists('reports');
    }
}
