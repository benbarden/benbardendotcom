<?php

namespace App\Http\Controllers;

class MusicController extends BaseController
{
    public function landing()
    {
        $bindings = array();

        $bindings['TopTitle'] = 'Music';

        return view('music.landing', $bindings);
    }

    private function getAlbumTitle($albumId)
    {
        switch ($albumId) {
            case 'a-change-of-scenery':
                $albumTitle = 'A Change of Scenery';
                break;
            case 'a-world-beyond':
                $albumTitle = 'A World Beyond';
                break;
            case 'besidewalk-plight':
                $albumTitle = 'Besidewalk Plight';
                break;
            case 'hidden-in-the-beyond':
                $albumTitle = 'Hidden in the Beyond';
                break;
            case 'revisited':
                $albumTitle = 'Revisited';
                break;
            case 'symmetry-1':
                $albumTitle = 'Symmetry 1';
                break;
            case 'symmetry-2':
                $albumTitle = 'Symmetry 2';
                break;
            case 'symmetry-best-of':
                $albumTitle = 'Best of Symmetry';
                break;
            case 'ten':
                $albumTitle = 'Ten';
                break;
            case 'the-unravelling-of-travelling':
                $albumTitle = 'The Unravelling of Travelling';
                break;
            case 'twice-midnight':
                $albumTitle = 'Twice Midnight';
                break;
            case 'voyage-into-space':
                $albumTitle = 'Voyage into Space';
                break;
            default:
                throw new \Exception(sprintf('Album %s not found'));
        }

        return $albumTitle;
    }

    public function album($albumId)
    {
        $albumCover = '';
        $jsLibVersion = '1';
        $additionalInfo = 'N';
        $albumPlaylist = null;
        $playlistTag = '';

        $bindings = array();

        switch ($albumId) {
            case 'a-change-of-scenery':
                $albumCover = 'a-change-of-scenery-250px.jpg';
                $additionalInfo = 'Y';
                $playlistTag = 'ALBUM_05_ACOS';
                break;
            case 'a-world-beyond':
                $albumCover = 'a-world-beyond-250px.jpg';
                $additionalInfo = 'Y';
                $playlistTag = 'ALBUM_01_AWB';
                break;
            case 'besidewalk-plight':
                $albumCover = 'besidewalk-plight-250px.jpg';
                $additionalInfo = 'Y';
                $playlistTag = 'ALBUM_02_BP';
                break;
            case 'hidden-in-the-beyond':
                $albumCover = 'hidden-in-the-beyond-250px.jpg';
                $additionalInfo = 'Y';
                $playlistTag = 'ALBUM_01A_HITB';
                break;
            case 'revisited':
                $albumCover = 'revisited-250px.jpg';
                $playlistTag = 'ALBUM_08_REV';
                break;
            case 'symmetry-1':
                $albumCover = 'symmetry-1-cover-250px.png';
                $playlistTag = 'ALBUM_06_S1';
                break;
            case 'symmetry-2':
                $albumCover = 'symmetry-2-cover-250px.png';
                $playlistTag = 'ALBUM_07_S2';
                break;
            case 'symmetry-best-of':
                $albumCover = 'symmetry-playlist-800px.jpg';
                $playlistTag = 'SYMMETRY_BEST_OF';
                break;
            case 'ten':
                $albumCover = 'ten-cover-temporary.jpg';
                $playlistTag = 'ALBUM_10_TEN';
                break;
            case 'the-unravelling-of-travelling':
                $albumCover = 'the-unravelling-of-travelling-250px.jpg';
                $additionalInfo = 'Y';
                $playlistTag = 'ALBUM_04_TUOT';
                break;
            case 'twice-midnight':
                $albumCover = 'twice-midnight-250px.jpg';
                $additionalInfo = 'Y';
                $playlistTag = 'ALBUM_03_TM';
                break;
            case 'voyage-into-space':
                $albumCover = 'voyage-into-space-cover-500px.jpg';
                $playlistTag = 'ALBUM_09_VIS';
                break;
            default:
                abort(404);
                break;
        }

        if ($playlistTag) {
            $albumPlaylist = \App\MusicPlaylist::with('playlistItems')
                ->where('tag', $playlistTag)
                ->first();
        }

        $albumTitle = $this->getAlbumTitle($albumId);

        $bindings['TopTitle'] = $albumTitle.' - Music';
        $bindings['Album'] = array(
            'Title' => $albumTitle,
            'TemplatePath' => sprintf('music/album/%s/', $albumId),
            'CoverImage' => '/img/music/'.$albumCover,
            'AdditionalInfo' => $additionalInfo,
            'Playlist' => $albumPlaylist
        );

        return view('music.album.landing', $bindings);
    }

    public function track($albumId, $trackId)
    {
        $bindings = array();

        $trackInfoUrl = sprintf('/music/%s/track/%s', $albumId, $trackId);

        $track = \App\MusicTrack::where('info_url', $trackInfoUrl)->first();
        if (!$track) {
            abort(404);
        }

        $bindings['TopTitle'] = $track->title.' - Music';
        $bindings['Track'] = array(
            'TemplateFile' => sprintf('music/album/%s/track/%s', $albumId, $trackId)
        );

        return view('music.album.track', $bindings);
    }

    public function allTracks()
    {
        $bindings = array();
        $bindings['TopTitle'] = 'All tracks - Music';

        $bindings['PlaylistItems'] = \App\MusicTrack::orderBy('title', 'asc')->get();

        return view('music.allTracks', $bindings);
    }
}
