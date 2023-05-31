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

    public function loginWithGoogle($email,$data){
        if($this->countUsers($email)==0){
            $builder = $this->db->table($this->table);
            $builder->insert($data);
        }
        return $this->getUser($email);
    }
}
