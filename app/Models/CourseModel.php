<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    public function getCurrCourse($id,$level){
        $colName = 'level'.$level;
        $builder = $this->db->table('tb_curr_course');
        $query = $builder->select($colName)->where('id_user', $id)->get();
        $res = $query->getRow();
        $level = array_values((array) $res)[0];
        return $level;
    }
    public function getCoinXp($id){
        $where = "id='{$id}'";
        $builder = $this->db->table('tb_user');
        $query = $builder->getWhere($where);
        $result = $query->getResult();
        $data = [
            'coins' => $result[0]->coin,
            'xp' => $result[0]->xp,
        ];
        return $data;
    }

    public function getRewards($level,$materi){
        $where = "level='{$level}' AND materi='{$materi}'";
        $builder = $this->db->table('tb_rewards');
        $query = $builder->getWhere($where);
        $result = $query->getResult();
        return $result;
    }

    public function updateRewards($id,$coin,$xp){
        $coinR = 'coin+'.$coin;
        $xpR = 'xp+'.$xp;
        $builder = $this->db->table('tb_user');
        $builder->set('coin', $coinR, false);
        $builder->set('xp', $xpR, false);
        $builder->where('id', $id);
        return $builder->update();
    }
    public function updateMateri($id,$level){
        $colName = 'level'.$level;
        $lvl = $colName.'+1';
        $builder = $this->db->table('tb_curr_course');
        $builder->set($colName, $lvl, false);
        $builder->where('id_user', $id);
        return $builder->update();
    }
    public function historyRewards($data){
        $builder = $this->db->table('tb_histories');
        return $builder->insert($data);
    }

    public function insertBadges($data){
        $builder = $this->db->table('tb_badges_user');
        return $builder->insert($data);
    }
    public function levelUp($id){
        $builder = $this->db->table('tb_user');
        $builder->set('level', 'level+1', false);
        $builder->where('id', $id);
        return $builder->update();
    }
    public function getCurrLevel($id){
        $where = "id='{$id}'";
        $builder = $this->db->table('tb_user');
        $query = $builder->getWhere($where);
        $result = $query->getResult();
        $currLevel = $result[0]->level;
        return $currLevel;
    }

    public function getCourseMax($level){
        $where = "level='{$level}'";
        $builder = $this->db->table('tb_courses_max');
        $query = $builder->getWhere($where);
        $result = $query->getResult();
        $maxLevel = $result[0]->max;
        return $maxLevel;
    }
}
