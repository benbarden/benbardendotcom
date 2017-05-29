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
}
