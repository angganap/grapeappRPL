<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbBadgesName extends Migration
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
            'type' => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'filename' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'description' => [
                'type'           => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_badges_name');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('tb_badges_name');
    }
}
