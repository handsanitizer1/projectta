<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function landing()
    {
        return view('template/_landing');
    }
}
