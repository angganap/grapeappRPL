<?php

namespace App\Controllers\Users\Course;

use App\Controllers\BaseController;
use App\Models\CourseModel;

class Course extends BaseController
{
    public function index($idUser= false,$lvl = false, $mat = false)
    {
        $view = "course" . "/course" . $lvl . "/materi" . $mat;
        $courseModel = new CourseModel;
        $currCourseUser = $courseModel->getCurrCourse($idUser,$lvl);
        $data =[
            'curr' => $currCourseUser,
        ];
        return view($view,$data);
    }
}
