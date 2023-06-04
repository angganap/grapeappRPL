<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbHistories extends Migration
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
            'type' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'earns' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'description' => [
                'type'           => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_user', 'tb_user', 'id');
        $this->forge->createTable('tb_histories');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('tb_histories');
    }
}
