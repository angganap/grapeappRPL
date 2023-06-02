<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = 'tb_user';

    public function isTest($id){
        $where = "id='{$id}'";
        $builder = $this->db->table($this->table);
        $query = $builder->getWhere($where);
        $result = $query->getResult();
        $isTest = $result[0]->is_test;
        return $isTest;
    }

    public function getUser($id){
        $where = "id='{$id}'";
        $builder = $this->db->table($this->table);
        $query = $builder->getWhere($where);
        $result = $query->getResult();
        return $result;
    }

    public function getRanks(){
        $builder = $this->db->table($this->table);
        $query = $builder->orderBy('coin DESC, xp DESC')->get(0,5);
        $ranks = $query->getResult();
        return $ranks;
    }

    public function getCurrCourse($id,$level){
        $builder = $this->db->table('tb_curr_course');
        $query = $builder->select($level)->where('id_user', $id)->get();
        $res = $query->getRow();
        $level = array_values((array) $res)[0];
        return $level;
    }

    public function startCourse($id,$level){
        $builder = $this->db->table('tb_curr_course');
        $builder->set($level,1);
        $builder->where('id_user', $id);
        $update = $builder->update();
        return $update;
    }
}
