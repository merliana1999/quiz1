<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPlayedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_played', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('played_artist_id');
            $table->foreign('played_artist_id')
                    ->references('artist_id')->on('tb_artist');

            $table->unsignedBigInteger('played_album_id');
            $table->foreign('played_album_id')
                    ->references('id')->on('tb_album');

            $table->unsignedBigInteger('played_track_id');
            $table->foreign('played_track_id')
                    ->references('id')->on('tb_track');
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
        Schema::dropIfExists('tb_played');
    }
}
