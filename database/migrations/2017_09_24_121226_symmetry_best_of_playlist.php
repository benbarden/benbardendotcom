<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SymmetryBestOfPlaylist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::insert("INSERT INTO music_playlists(id, tag, title) VALUES(12, 'SYMMETRY_BEST_OF', 'Playlist: Best of Symmetry')");

        DB::insert("INSERT INTO music_playlist_items(playlist_id, track_id, playlist_order) VALUES(12, 108, 1)");
        DB::insert("INSERT INTO music_playlist_items(playlist_id, track_id, playlist_order) VALUES(12, 119, 2)");
        DB::insert("INSERT INTO music_playlist_items(playlist_id, track_id, playlist_order) VALUES(12, 109, 3)");
        DB::insert("INSERT INTO music_playlist_items(playlist_id, track_id, playlist_order) VALUES(12, 120, 4)");
        DB::insert("INSERT INTO music_playlist_items(playlist_id, track_id, playlist_order) VALUES(12, 112, 5)");
        DB::insert("INSERT INTO music_playlist_items(playlist_id, track_id, playlist_order) VALUES(12, 123, 6)");
        DB::insert("INSERT INTO music_playlist_items(playlist_id, track_id, playlist_order) VALUES(12, 114, 7)");
        DB::insert("INSERT INTO music_playlist_items(playlist_id, track_id, playlist_order) VALUES(12, 125, 8)");
        DB::insert("INSERT INTO music_playlist_items(playlist_id, track_id, playlist_order) VALUES(12, 116, 9)");
        DB::insert("INSERT INTO music_playlist_items(playlist_id, track_id, playlist_order) VALUES(12, 127, 10)");
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
