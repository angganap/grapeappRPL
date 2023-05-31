<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'tb_user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;

    public function saveUser($data){
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function countUsers($username, $email){
        $where = "username='{$username}' OR email='{$email}'";
        $builder = $this->db->table($this->table);
        $builder->where($where);
        return $builder->countAllResults();
    }

    
}
