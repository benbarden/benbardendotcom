<?php

namespace App\Http\Controllers;

class SingleController extends BaseController
{
    public function archive()
    {
        $bindings = array();

        $bindings['TopTitle'] = 'Archive';

        return view('single.archive', $bindings);
    }

    public function about()
    {
        $bindings = array();

        $bindings['TopTitle'] = 'About Ben Barden';

        return view('single.about', $bindings);
    }

    public function ebooks()
    {
        $bindings = array();

        $bindings['TopTitle'] = 'eBooks';

        return view('single.ebooks', $bindings);
    }
}
