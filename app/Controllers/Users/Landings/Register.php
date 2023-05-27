<?php

namespace App\Controllers\Users\Landings;

use App\Controllers\BaseController;
use App\Models\User;

class Register extends BaseController
{
    public function index()
    {
        return view('landing/register');
    }

    public function add(){
        $userModel = new User;
        $username= $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $countUsers = $userModel->countUsers($username,$email);
        if($countUsers==0){
            $data = array(
                'name' => $this->request->getPost('nama'),
                'username' => $username,
                'email' => $email,
                'password' => password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
                'level' => 1,
                'coin' => 0,
                'xp' => 0,
                'is_admin' => 0,
                'is_test' => 0
            );
            $result = $userModel->saveUser($data);
            if($result){
                echo json_encode(array("statusCode"=>200));
            }else{
                echo json_encode(array("statusCode"=>201));
            }
        }else{
            echo json_encode(array("statusCode"=>202,"username"=>$username,"email"=>$email));
        }
    }
}
