<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicPlaylistItem extends Model
{
    /**
     * @var string
     */
    protected $table = 'music_playlist_items';

    /**
     * @var bool
     */
    public $timestamps = false;

    public function playlist()
    {
        return $this->hasOne('App\MusicPlaylist', 'id', 'playlist_id');
    }

    public function track()
    {
        return $this->hasOne('App\MusicTrack', 'id', 'track_id');
    }
}
