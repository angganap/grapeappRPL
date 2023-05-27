<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '40',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'level' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'coin' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'xp' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'is_admin' => [
                'type' => 'TINYINT',
                'constraint' => 1,
            ],
            'is_test' => [
                'type' => 'TINYINT',
                'constraint' => 1,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_user');
    }

    public function down()
    {
        $this->forge->dropTable('tb_user');
    }
}
