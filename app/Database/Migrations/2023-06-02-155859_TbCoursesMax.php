<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbCoursesMax extends Migration
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
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'max' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_courses_max');
    }

    public function down()
    {
        $this->forge->dropTable('tb_courses_max');
    }
}
