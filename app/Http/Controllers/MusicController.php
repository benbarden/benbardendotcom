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
                $jsLibVersion = '2';
                break;
            case 'a-world-beyond':
                $albumCover = 'a-world-beyond-250px.jpg';
                $additionalInfo = 'Y';
                break;
            case 'besidewalk-plight':
                $albumCover = 'besidewalk-plight-250px.jpg';
                $additionalInfo = 'Y';
                break;
            case 'hidden-in-the-beyond':
                $albumCover = 'hidden-in-the-beyond-250px.jpg';
                $additionalInfo = 'Y';
                break;
            case 'revisited':
                $albumCover = 'revisited-250px.jpg';
                break;
            case 'symmetry-1':
                $albumCover = 'symmetry-1-cover-250px.png';
                break;
            case 'symmetry-2':
                $albumCover = 'symmetry-2-cover-250px.png';
                break;
            case 'ten':
                $albumCover = 'ten-cover-temporary.jpg';
                $playlistTag = 'ALBUM_10_TEN';
                break;
            case 'the-unravelling-of-travelling':
                $albumCover = 'the-unravelling-of-travelling-250px.jpg';
                $additionalInfo = 'Y';
                break;
            case 'twice-midnight':
                $albumCover = 'twice-midnight-250px.jpg';
                $additionalInfo = 'Y';
                break;
            case 'voyage-into-space':
                $albumCover = 'voyage-into-space-cover-500px.jpg';
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
            'JsLibraryFile' => sprintf('/js/albums/%s.js?v=%s', $albumId, $jsLibVersion),
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
}
