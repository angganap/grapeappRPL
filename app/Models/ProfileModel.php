<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = 'tb_user';

    public function getUser($id){
        $where = "id='{$id}'";
        $builder = $this->db->table($this->table);
        $query = $builder->getWhere($where);
        return $query->getResult();
    }
    
    public function isTest($id){
        $where = "id='{$id}'";
        $builder = $this->db->table($this->table);
        $query = $builder->getWhere($where);
        $result = $query->getResult();
        $isTest = $result[0]->is_test;
        return $isTest;
    }

    public function getRankUser($id){
        $builder = $this->db->table($this->table);
        $query = $builder->select('*, (ROW_NUMBER() OVER(ORDER BY coin DESC, xp DESC)) AS position')->from($this->$table)->getWhere(['id' => $id]);
        $result = $query->getResult();
        $rank = $result[0]->position;
        return $rank;
    }

    public function getCourses($id){
        $where = "id_user='{$id}'";
        $builder = $this->db->table('tb_curr_course');
        $query = $builder->getWhere($where);
        $result = $query->getRow();
        return $result;
    }
}
