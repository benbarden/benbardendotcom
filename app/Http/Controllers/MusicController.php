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

    public function album($albumId)
    {
        $albumTitle = '';
        $albumCover = '';
        $jsLibVersion = '1';
        $additionalInfo = 'N';

        $bindings = array();

        switch ($albumId) {
            case 'a-change-of-scenery':
                $albumTitle = 'A Change of Scenery';
                $albumCover = 'a-change-of-scenery-250px.jpg';
                $additionalInfo = 'Y';
                $jsLibVersion = '2';
                break;
            case 'a-world-beyond':
                $albumTitle = 'A World Beyond';
                $albumCover = 'a-world-beyond-250px.jpg';
                $additionalInfo = 'Y';
                break;
            case 'besidewalk-plight':
                $albumTitle = 'Besidewalk Plight';
                $albumCover = 'besidewalk-plight-250px.jpg';
                $additionalInfo = 'Y';
                break;
            case 'hidden-in-the-beyond':
                $albumTitle = 'Hidden in the Beyond';
                $albumCover = 'hidden-in-the-beyond-250px.jpg';
                $additionalInfo = 'Y';
                break;
            case 'revisited':
                $albumTitle = 'Revisited';
                $albumCover = 'revisited-250px.jpg';
                break;
            case 'symmetry-1':
                $albumTitle = 'Symmetry 1';
                $albumCover = 'symmetry-1-cover-250px.png';
                break;
            case 'symmetry-2':
                $albumTitle = 'Symmetry 2';
                $albumCover = 'symmetry-2-cover-250px.png';
                break;
            case 'ten':
                $albumTitle = 'Ten';
                $albumCover = 'ten-cover-temporary.jpg';
                break;
            case 'the-unravelling-of-travelling':
                $albumTitle = 'The Unravelling of Travelling';
                $albumCover = 'the-unravelling-of-travelling-250px.jpg';
                $additionalInfo = 'Y';
                break;
            case 'twice-midnight':
                $albumTitle = 'Twice Midnight';
                $albumCover = 'twice-midnight-250px.jpg';
                $additionalInfo = 'Y';
                break;
            case 'voyage-into-space':
                $albumTitle = 'Voyage into Space';
                $albumCover = 'voyage-into-space-cover-500px.jpg';
                break;
            default:
                abort(404);
                break;
        }

        $bindings['TopTitle'] = $albumTitle.' - Music';
        $bindings['Album'] = array(
            'Title' => $albumTitle,
            'TemplatePath' => sprintf('music/album/%s/', $albumId),
            'CoverImage' => '/img/music/'.$albumCover,
            'JsLibraryFile' => sprintf('/js/albums/%s.js?v=%s', $albumId, $jsLibVersion),
            'AdditionalInfo' => $additionalInfo
        );

        return view('music.album.landing', $bindings);
    }
}
