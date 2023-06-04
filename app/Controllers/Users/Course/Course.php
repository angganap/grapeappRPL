<?php

namespace App\Controllers\Users\Course;

use App\Controllers\BaseController;
use App\Models\CourseModel;

class Course extends BaseController
{
    protected $helpers = ['date'];
    public function index($idUser= false,$lvl = false, $mat = false,$review= false)
    {
        $view = "course" . "/course" . $lvl . "/materi" . $mat;
        $courseModel = new CourseModel;
        $currCourseUser = $courseModel->getCurrCourse($idUser,$lvl);
        $maxLevel = $courseModel->getCourseMax($lvl);
        $coinXp = $courseModel->getCoinXp($idUser);
        $data =[
            'curr' => $currCourseUser,
            'coins' => $coinXp['coins'],
            'xp' => $coinXp['xp'],
        ];
        if($review==1){
            return view($view,$data);
        }else{
            if($currCourseUser<$mat){
                $view = "./course/" .$idUser."/". $lvl . "/" . $currCourseUser;
                return redirect()->to($view);
            }
            else if($currCourseUser>$maxLevel){
                if($mat > $maxLevel){
                    $mat = $mat-1;
                }
                $view = "./course/" .$idUser."/". $lvl . "/" . $mat."/1";
                return redirect()->to($view);
            }
            else{
                return view($view,$data);
            }
        }
        
    }
    public function nextCourse(){
        $courseModel = new CourseModel;
        $id= $this->request->getPost('id');
        $level= $this->request->getPost('level');
        $currLevel= $this->request->getPost('currLevel');
        $materi= $this->request->getPost('materi');
        $title= $this->request->getPost('title');
        $res = $courseModel->getRewards($level,$materi);
        $coin = $res[0]->coin;
        $xp = $res[0]->xp;
        $desc = "Kamu telah menyelesaikan materi ".$title;
        if($materi==$currLevel){
            $res = $courseModel->updateRewards($id,$coin,$xp);
            if($res){
                $updateMat = $courseModel->updateMateri($id,$level);
                if($updateMat){
                    $data = [
                        'id_user' => $id,
                        'type' => '1',
                        'earns' => $xp,
                        'description' => $desc,
                    ];
                     $insert = $courseModel->historyRewards($data);
                     if($insert){
                        $currLevelUser = $courseModel->getCurrLevel($id);
                        if($level==1 && $materi==5){
                            $levelUp = $courseModel->levelUp($id);
                            if($levelUp==$level){
                                echo json_encode(array("statusCode"=>205));
                            }else{
                                echo json_encode(array("statusCode"=>200));
                            }
                        }else{
                            echo json_encode(array("statusCode"=>200));
                        }
                        
                     }else{
                        echo json_encode(array("statusCode"=>201));
                     }
                }else{
                    echo json_encode(array("statusCode"=>202));
                }
                
            }else{
                echo json_encode(array("statusCode"=>203));
            }
        }else{
            echo json_encode(array("statusCode"=>204));
        }
    }

    public function challenge(){
        $courseModel = new CourseModel;
        $id= $this->request->getPost('id');
        $type= $this->request->getPost('type');
        $earns= $this->request->getPost('earns');
        $desc= $this->request->getPost('desc');
        $res = $courseModel->updateRewards($id,$earns,0);
        if($res){
            $data = [
                'id_user' => $id,
                'type' => '2',
                'earns' => $earns,
                'description' => $desc,
            ];
            $insert = $courseModel->historyRewards($data);
            if($insert){
                echo json_encode(array("statusCode"=>200));
             }else{
                echo json_encode(array("statusCode"=>201));
             }
        }else{
            echo json_encode(array("statusCode"=>202));
        }
    }

    public function getBadges(){
        $currentDatetime = get_current_date();
        $id= $this->request->getPost('id');
        $type= $this->request->getPost('type');
        $desc= $this->request->getPost('desc');
        $data = [
            'id_user' => $id,
            'type' => $type,
            'earn_at' => $currentDatetime,
        ];
        $courseModel = new CourseModel;
        $courseModel->insertBadges($data);
        if($courseModel){
            $data = [
                'id_user' => $id,
                'type' => '3',
                'earns' => '0',
                'description' => $desc,
            ];
            $insert = $courseModel->historyRewards($data);
            if($insert){
                echo json_encode(array("statusCode"=>200));
             }else{
                echo json_encode(array("statusCode"=>201));
             }
        }else{
            echo json_encode(array("statusCode"=>202));
        }
    }
}
