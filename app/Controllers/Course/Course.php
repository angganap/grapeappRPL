<?php

namespace App\Controllers\Course;
use App\Controllers\BaseController;

class Course extends BaseController
{
    public function index($lvl = false, $mat= false)
    {
        $view = "course" . "/course" .$lvl ."/materi" . $mat;
        return view($view);
    }
}