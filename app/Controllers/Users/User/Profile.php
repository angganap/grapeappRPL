<?php

namespace App\Controllers\Users\User;

use App\Controllers\BaseController;
use App\Models\ProfileModel;

class Profile extends BaseController
{
    public function index()
    {
        $session = session();
        if($session->has('id')){
            $id = $session->get('id');
            $profileModel = new ProfileModel;
            $isTest = $profileModel->isTest($id);
            if($isTest==1){
                $user = $profileModel->getUser($id);
                $rank = $profileModel->getRankUser($id);
                $data =[
                    'nama'=>$user[0]->name,
                    'username' => $user[0]->username,
                    'level' => $user[0]->level,
                    'coins' => $user[0]->coin,
                    'xp' => $user[0]->xp,
                    'username' => $user[0]->username,
                    'rank' => $rank
                ];
                return view('user/profile',$data);
            }else{
                return redirect()->to(base_url('test/awal'));
            }
        }else{
            return redirect()->to(base_url('login'));
        }
    }

   
}
