<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbTestAwal extends Migration
{
    public function up()
    {
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
            'beginner' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'intermediate' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'advanced' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'level_user' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'desc_user' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_test_awal');
        $this->forge->addForeignKey('tb_test_awal', 'id_user', 'tb_user', 'id', 'CASCADE', 'CASCADE');

    }

    public function down()
    {
        $this->forge->dropTable('tb_test_awal');
    }
}
