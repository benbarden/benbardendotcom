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
}
