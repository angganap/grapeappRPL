<?php

namespace App\Controllers\Users\Landings;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        return view('landing/login');
    }
}
