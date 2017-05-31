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

        $albumTitle = $this->getAlbumTitle($albumId);

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

    public function track($albumId, $trackId)
    {
        $trackPages = array(
            'revisited' => array(
                '01-the-cliffs',
                '02-journey-to-atlantis',
                '03-the-sword',
                '04-somewhere-there',
                '05-subterranean-labyrinth',
                '06-the-music-box',
                '07-green-fields',
                '08-descendance',
                '09-eternal-evolution',
                '10-aries',
                '11-the-island',
                '12-sailing-under-clouds',
                '13-stormy-shores',
                '14-clear-blue-skies',
                '15-morning-exploring',
                '16-rainforest',
                '17-candlelit-cavern',
                '18-no-way-out',
                '19-into-darkness',
                '20-twisted-vision'
            )
        );

        if (array_key_exists($albumId, $trackPages)) {
            if (in_array($trackId, $trackPages[$albumId])) {
                $trackTemplate = sprintf('music/album/%s/track/%s', $albumId, $trackId);
            } else {
                abort(404);
            }
        } else {
            abort(404);
        }

        try {
            $albumTitle = $this->getAlbumTitle($albumId);
        } catch (\Exception $e) {
            abort(404);
        }

        $bindings = array();

        $bindings['TopTitle'] = $albumTitle.' - Music';
        $bindings['Track'] = array(
            'TemplateFile' => $trackTemplate
        );

        return view('music.album.track', $bindings);
    }
}
