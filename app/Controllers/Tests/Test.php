<?php

namespace App\Controllers\Tests;
use App\Controllers\BaseController;

class Test extends BaseController
{
    public function awal($ket = false, $soal= false)
    {
        if($ket == "skill"){
            $view = "tests/awal/skill/skill".$soal;
        }
        return view($view);
    }
}