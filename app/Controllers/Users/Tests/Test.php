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
        $done = $testModel->done($id);
        if($done){
            echo json_encode(array("statusCode"=>200));
        }
    }
}
