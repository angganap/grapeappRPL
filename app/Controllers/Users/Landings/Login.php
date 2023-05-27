<?php

namespace App\Controllers\Users\Landings;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        return view('landing/login');
    }

    public function logUser(){
        $username= $this->request->getPost('username');
        $password= $this->request->getPost('password');
        $loginModel = new LoginModel;
        $session = session();

        if($loginModel->countUsers($username)==1){
            $user = $loginModel->getUser($username);
            $pswHash = $user[0]->password;
            if(password_verify($password,$pswHash)){
                $is_test = $user[0]->is_test;
                echo json_encode(array("statusCode"=>200,"isTest"=>$is_test));
                $session->set('id',$user[0]->id);
            }else{
                echo json_encode(array("statusCode"=>201));
            }
        }else{
            echo json_encode(array("statusCode"=>201));
        }
    }
}
