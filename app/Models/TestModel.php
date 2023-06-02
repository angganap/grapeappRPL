<?php

namespace App\Models;

use CodeIgniter\Model;

class TestModel extends Model
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
    public function done($id,$level){
        $data =[
            'id' => $id,
            'is_test' => 1,
            'level' => $level
        ];
        $builder = $this->db->table($this->table);
        $builder->set('is_test', 1);
        $builder->set('level', $level);
        $builder->where('id', $id);
        return $builder->update();
    }
    public function saveTest($data){
        $builder = $this->db->table('tb_test_awal');
        return $builder->insert($data);
    }
    public function setCurrCourse($data){
        $builder = $this->db->table('tb_curr_course');
        return $builder->insert($data);
    }
}
