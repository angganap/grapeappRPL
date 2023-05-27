<?php

namespace App\Controllers\Users\User;

use App\Controllers\BaseController;

class Logout extends BaseController
{
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('login'));
    }
}
