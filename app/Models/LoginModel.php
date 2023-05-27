<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'tb_user';

    public function countUsers($username){
        $where = "username='{$username}' OR email='{$username}'";
        $builder = $this->db->table($this->table);
        $builder->where($where);
        return $builder->countAllResults();
    }

    public function getUser($username){
        $where = "username='{$username}' OR email='{$username}'";
        $builder = $this->db->table($this->table);
        $query = $builder->getWhere($where);
        return $query->getResult();
    }
}
