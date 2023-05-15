<?php

namespace App\Controllers\Users\Landings;

use App\Controllers\BaseController;

class Register extends BaseController
{
    public function index()
    {
        return view('landing/register');
    }
}
