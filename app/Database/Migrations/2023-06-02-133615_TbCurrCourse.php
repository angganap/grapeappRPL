<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbCurrCourse extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'id_user' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'level1' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'level2' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'level3' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'level4' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'level5' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'level6' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_user', 'tb_user', 'id');
        $this->forge->createTable('tb_curr_course');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('tb_curr_course');
    }
}
