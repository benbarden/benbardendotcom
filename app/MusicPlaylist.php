<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicPlaylist extends Model
{
    /**
     * @var string
     */
    protected $table = 'music_playlists';

    /**
     * @var bool
     */
    public $timestamps = false;

    public function playlistItems()
    {
        return $this->hasMany('App\MusicPlaylistItem', 'playlist_id', 'id');
    }
}
