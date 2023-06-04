<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbRewards extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'level' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'materi' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'coin' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'xp' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_rewards');
    }

    public function down()
    {
        $this->forge->dropTable('tb_rewards');
    }
}
