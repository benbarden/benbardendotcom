<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicTrack extends Model
{
    /**
     * @var string
     */
    protected $table = 'music_tracks';

    /**
     * @var bool
     */
    public $timestamps = false;

    public function mediaFolder()
    {
        return $this->hasOne('App\MusicMediaFolder', 'id', 'media_folder_id');
    }
}
