<?php

namespace App\Controllers\Users\User;

use App\Controllers\BaseController;

class Profile extends BaseController
{
    public function index()
    {
        return view('user/profile');
    }
}
