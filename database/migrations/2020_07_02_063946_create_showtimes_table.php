<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowtimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showtimes', function (Blueprint $table) {
            $table->id();
            $table->string('showtime');
            $table->integer('no_of_seat');
            $table->unsignedBigInteger('run_date_id');
            $table->unsignedBigInteger('theater_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('run_date_id')
                    ->references('id')->on('run_dates')
                    ->onDelete('cascade');

            $table->foreign('theater_id')
                    ->references('id')->on('theaters')
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
        Schema::dropIfExists('showtimes');
    }
}
