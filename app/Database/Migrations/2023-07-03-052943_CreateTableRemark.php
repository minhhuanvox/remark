<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableRemark extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'student-id' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'date_of_birth' => [
                'type' => 'DATE',
            ],
            
            'class' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'phone_number' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'semester' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'school_year' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'module_id' => [
                'type' => 'VARCHAR',
                'constraint' => 6,
            ],
            'module_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'exam_date' => [
                'type' => 'DATE',
            ],
            'exam_room' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'score' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('remarks');
    }

    public function down()
    {
        $this->forge->dropTable('remarks');
    }
}
