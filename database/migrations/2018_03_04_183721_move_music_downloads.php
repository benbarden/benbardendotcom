<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MoveMusicDownloads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::update("UPDATE music_media_folders SET path='https://www.benbarden.com/downloads/music/a-world-beyond/' WHERE id='1'");
        DB::update("UPDATE music_media_folders SET path='https://www.benbarden.com/downloads/music/besidewalk-plight/' WHERE id='2'");
        DB::update("UPDATE music_media_folders SET path='https://www.benbarden.com/downloads/music/hidden-in-the-beyond/' WHERE id='3'");
        DB::update("UPDATE music_media_folders SET path='https://www.benbarden.com/downloads/music/twice-midnight/' WHERE id='4'");
        DB::update("UPDATE music_media_folders SET path='https://www.benbarden.com/downloads/music/the-unravelling-of-travelling/' WHERE id='5'");
        DB::update("UPDATE music_media_folders SET path='https://www.benbarden.com/downloads/music/a-change-of-scenery/' WHERE id='6'");
        DB::update("UPDATE music_media_folders SET path='https://www.benbarden.com/downloads/music/symmetry-1/' WHERE id='7'");
        DB::update("UPDATE music_media_folders SET path='https://www.benbarden.com/downloads/music/symmetry-2/' WHERE id='8'");
        DB::update("UPDATE music_media_folders SET path='https://www.benbarden.com/downloads/music/revisited/' WHERE id='9'");
        DB::update("UPDATE music_media_folders SET path='https://www.benbarden.com/downloads/music/voyage-into-space/' WHERE id='10'");
        DB::update("UPDATE music_media_folders SET path='https://www.benbarden.com/downloads/music/ten/' WHERE id='11'");
        DB::update("UPDATE music_media_folders SET path='https://www.benbarden.com/downloads/music/singularity/' WHERE id='12'");
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
