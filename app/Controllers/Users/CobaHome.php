<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;

class CobaHome extends BaseController
{
    public function index()
    {
        return view('cobahome');
    }
}
