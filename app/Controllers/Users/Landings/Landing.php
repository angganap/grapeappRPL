<?php

namespace App\Controllers\Users\Landings;

use App\Controllers\BaseController;

class Landing extends BaseController
{
    public function index()
    {
        return view('landing/landingpage');
    }
}
