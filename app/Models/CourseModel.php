<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    public function getCurrCourse($id,$level){
        $builder = $this->db->table('tb_curr_course');
        $query = $builder->select($level)->where('id_user', $id)->get();
        $res = $query->getRow();
        $level = array_values((array) $res)[0];
        return $level;
    }
}
