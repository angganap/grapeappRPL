<?php

namespace App\Controllers\Users\User;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('user/home');
    }
}
