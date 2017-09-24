<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrackYear extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('music_tracks', function(Blueprint $table) {
            $table->integer('year_released')->nullable();
        });
        DB::update("UPDATE music_tracks SET year_released = 2005 WHERE id BETWEEN 1 AND 17");
        DB::update("UPDATE music_tracks SET year_released = 2006 WHERE id BETWEEN 18 AND 32");
        DB::update("UPDATE music_tracks SET year_released = 2007 WHERE id BETWEEN 33 AND 45");
        DB::update("UPDATE music_tracks SET year_released = 2008 WHERE id BETWEEN 46 AND 64");
        DB::update("UPDATE music_tracks SET year_released = 2008 WHERE id BETWEEN 65 AND 85");
        DB::update("UPDATE music_tracks SET year_released = 2009 WHERE id BETWEEN 86 AND 105");
        DB::update("UPDATE music_tracks SET year_released = 2016 WHERE id BETWEEN 106 AND 127");
        DB::update("UPDATE music_tracks SET year_released = 2016 WHERE id BETWEEN 128 AND 147");
        DB::update("UPDATE music_tracks SET year_released = 2016 WHERE id BETWEEN 148 AND 156");
        DB::update("UPDATE music_tracks SET year_released = 2017 WHERE id BETWEEN 157 AND 172");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('music_tracks', function(Blueprint $table) {
            $table->dropColumn('year_released');
        });
    }
}
