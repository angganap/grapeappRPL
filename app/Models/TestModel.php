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
    public function done($id){
        $data =[
            'id' => $id,
            'is_test' => 1
        ];
        $builder = $this->db->table($this->table);
        $builder->set('is_test', 1);
        $builder->where('id', $id);
        return $builder->update();
    }
}
