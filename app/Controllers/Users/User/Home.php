<?php

namespace App\Controllers\Users\User;

use App\Controllers\BaseController;
use App\Models\HomeModel;

class Home extends BaseController
{
    public function index()
    {
        $homeModel = new HomeModel;
        $session = session();
        if($session->has('id')){
            $id = $session->get('id');
            $isTest = $homeModel->isTest($id);
            if($isTest==1){
                $user = $homeModel->getUser($id);
                $ranks = $homeModel->getRanks();
                $data = [
                    'name' => $user[0]->name,
                    'username' => $user[0]->username,
                    'ranks' => $ranks
                ];
                return view('user/home',$data);
            }else{
                return redirect()->to(base_url('test/awal'));
            }
        }else{
            return redirect()->to(base_url('login'));
        }
    }
}
