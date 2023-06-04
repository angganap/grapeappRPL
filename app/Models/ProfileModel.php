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
        $query = "SELECT res.* FROM (SELECT a.*, @row_number := @row_number + 1 AS row_num FROM (SELECT @row_number := 0) AS r, tb_user AS a WHERE a.is_admin='0' ORDER BY coin DESC, xp DESC) AS res WHERE res.id='{$id}'";
        $queryR = $this->db->query($query);
        $result = $queryR->getResult();
        $rank = $result[0]->row_num;
        return $rank;
    }

    public function getCourses($id){
        $where = "id_user='{$id}'";
        $builder = $this->db->table('tb_curr_course');
        $query = $builder->getWhere($where);
        $result = $query->getRow();
        return $result;
    }

    public function getHistories($id){
        $where = "id_user='{$id}'";
        $builder = $this->db->table('tb_histories');
        $query = $builder->getWhere($where);
        $result = $query->getResult();
        return $result;
    }

    public function getJmlBadges($id){
        $where = "id_user='{$id}'";
        $builder = $this->db->table('tb_badges_user');
        $query = $builder->getWhere($where);
        $result = $query->getNumRows();
        return $result;
    }

    public function getBadges($id){
        $where = "id_user='{$id}'";
        $builder = $this->db->table('tb_badges_user');
        $builder->select('*');
        $builder->join('tb_badges_name', 'tb_badges_user.type = tb_badges_name.type');
        $query =$builder->getWhere($where);
        $result = $query->getResult();
        return $result;
    }
}
