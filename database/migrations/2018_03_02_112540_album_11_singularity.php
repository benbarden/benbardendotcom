<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Album11Singularity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::insert("INSERT INTO music_playlists(tag, title) VALUES('ALBUM_11_SINGULARITY', 'Album 11: Singularity')");

        DB::insert("INSERT INTO music_media_folders(tag, path) VALUES('ALBUM_11_SINGULARITY', 'http://coda.city/downloads/ben-barden-music/singularity/')");

        DB::insert("INSERT INTO music_tracks (title, duration, media_folder_id, media_file, year_released) VALUES ('Clouds', '3:47', '12', '01. Ben Barden - Clouds.mp3', '2018')");
        DB::insert("INSERT INTO music_tracks (title, duration, media_folder_id, media_file, year_released) VALUES ('Synthrock', '3:30', '12', '02. Ben Barden - Synthrock.mp3', '2018')");
        DB::insert("INSERT INTO music_tracks (title, duration, media_folder_id, media_file, year_released) VALUES ('Psionetrics', '3:43', '12', '03. Ben Barden - Psionetrics.mp3', '2018')");
        DB::insert("INSERT INTO music_tracks (title, duration, media_folder_id, media_file, year_released) VALUES ('Echoes', '3:20', '12', '04. Ben Barden - Echoes.mp3', '2018')");
        DB::insert("INSERT INTO music_tracks (title, duration, media_folder_id, media_file, year_released) VALUES ('Moonlight', '2:30', '12', '05. Ben Barden - Moonlight.mp3', '2018')");
        DB::insert("INSERT INTO music_tracks (title, duration, media_folder_id, media_file, year_released) VALUES ('Swing', '2:59', '12', '06. Ben Barden - Swing.mp3', '2018')");
        DB::insert("INSERT INTO music_tracks (title, duration, media_folder_id, media_file, year_released) VALUES ('Darkside', '3:25', '12', '07. Ben Barden - Darkside.mp3', '2018')");
        DB::insert("INSERT INTO music_tracks (title, duration, media_folder_id, media_file, year_released) VALUES ('Ditto', '3:08', '12', '08. Ben Barden - Ditto.mp3', '2018')");
        DB::insert("INSERT INTO music_tracks (title, duration, media_folder_id, media_file, year_released) VALUES ('Anticipation', '2:43', '12', '09. Ben Barden - Anticipation.mp3', '2018')");
        DB::insert("INSERT INTO music_tracks (title, duration, media_folder_id, media_file, year_released) VALUES ('Weekend', '4:07', '12', '10. Ben Barden - Weekend.mp3', '2018')");
        DB::insert("INSERT INTO music_tracks (title, duration, media_folder_id, media_file, year_released) VALUES ('Reflections', '3:23', '12', '11. Ben Barden - Reflections.mp3', '2018')");
        DB::insert("INSERT INTO music_tracks (title, duration, media_folder_id, media_file, year_released) VALUES ('Sapphire', '2:51', '12', '12. Ben Barden - Sapphire.mp3', '2018')");
        DB::insert("INSERT INTO music_tracks (title, duration, media_folder_id, media_file, year_released) VALUES ('Eurodance', '2:35', '12', '13. Ben Barden - Eurodance.mp3', '2018')");
        DB::insert("INSERT INTO music_tracks (title, duration, media_folder_id, media_file, year_released) VALUES ('Kaleidoscope', '3:32', '12', '14. Ben Barden - Kaleidoscope.mp3', '2018')");

        DB::insert("INSERT INTO music_playlist_items (playlist_id, track_id, playlist_order) VALUES ('13', '173', '1')");
        DB::insert("INSERT INTO music_playlist_items (playlist_id, track_id, playlist_order) VALUES ('13', '174', '2')");
        DB::insert("INSERT INTO music_playlist_items (playlist_id, track_id, playlist_order) VALUES ('13', '175', '3')");
        DB::insert("INSERT INTO music_playlist_items (playlist_id, track_id, playlist_order) VALUES ('13', '176', '4')");
        DB::insert("INSERT INTO music_playlist_items (playlist_id, track_id, playlist_order) VALUES ('13', '177', '5')");
        DB::insert("INSERT INTO music_playlist_items (playlist_id, track_id, playlist_order) VALUES ('13', '178', '6')");
        DB::insert("INSERT INTO music_playlist_items (playlist_id, track_id, playlist_order) VALUES ('13', '179', '7')");
        DB::insert("INSERT INTO music_playlist_items (playlist_id, track_id, playlist_order) VALUES ('13', '180', '8')");
        DB::insert("INSERT INTO music_playlist_items (playlist_id, track_id, playlist_order) VALUES ('13', '181', '9')");
        DB::insert("INSERT INTO music_playlist_items (playlist_id, track_id, playlist_order) VALUES ('13', '182', '10')");
        DB::insert("INSERT INTO music_playlist_items (playlist_id, track_id, playlist_order) VALUES ('13', '183', '11')");
        DB::insert("INSERT INTO music_playlist_items (playlist_id, track_id, playlist_order) VALUES ('13', '184', '12')");
        DB::insert("INSERT INTO music_playlist_items (playlist_id, track_id, playlist_order) VALUES ('13', '185', '13')");
        DB::insert("INSERT INTO music_playlist_items (playlist_id, track_id, playlist_order) VALUES ('13', '186', '14')");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
