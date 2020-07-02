<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRunDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('run_dates', function (Blueprint $table) {
            $table->id();
            $table->date('starting_date');
            $table->date('end_date');
            $table->unsignedBigInteger('cinema_id');
            $table->unsignedBigInteger('movie_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('cinema_id')
                    ->references('id')->on('cinemas')
                    ->onDelete('cascade');

            $table->foreign('movie_id')
                    ->references('id')->on('movies')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('run_dates');
    }
}
