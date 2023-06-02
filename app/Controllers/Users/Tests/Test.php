<?php

namespace App\Controllers\Users\Tests;

use App\Controllers\BaseController;
use App\Models\TestModel;

class Test extends BaseController
{
    public function awal()
    {
        $testModel = new TestModel;
        $session = session();
        if($session->has('id')){
            $id = $session->get('id');
            $isTest = $testModel->isTest($id);
            if($isTest==0){
                $view = "tests/test";
                return view($view);
            }else{
                return redirect()->to(base_url('home'));
            }
        }else{
            return redirect()->to(base_url('login'));
        }
    }
    public function done(){
        $testModel = new TestModel;
        $id = $this->request->getPost('id');
        $beginner = $this->request->getPost('beginner');
        $inter = $this->request->getPost('inter');
        $advanced = $this->request->getPost('advanced');
        $descUser = $this->request->getPost('descUser');
        $levelUser = $this->request->getPost('levelUser');
        $data = [
            'id_user' => $id,
            'beginner' => $beginner,
            'intermediate' => $inter,
            'advanced' => $advanced,
            'level_user' => $levelUser,
            'desc_user' => $descUser,
        ];
        if($levelUser==1){
            $level = 1;
        }else if($levelUser==2){
            $level = 3;
        }else{
            $level = 5;
        }
        $dataCurr = [
            'id_user' => $id,
        ];
        $save = $testModel->saveTest($data);
        $saveCurr = $testModel->setCurrCourse($dataCurr);
        if($save){
            $done = $testModel->done($id,$level);
            if($done){
                echo json_encode(array("statusCode"=>200));
            }
        }
        
    }
}
