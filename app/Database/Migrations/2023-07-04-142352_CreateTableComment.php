<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableComment extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'comment' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('comments');
    }

    public function down()
    {
        $this->forge->dropTable('comments');
    }
}
