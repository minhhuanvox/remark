<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RemarkSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'student-id' => '3119560024',
                'name' => 'Võ Minh Huân',
                'date_of_birth' => '2001-12-16',
                'class' => 'DKP1191',
                'email' => 'minhhuan@gmail.com',
                'phone_number' => '0943925251',
                'semester' => '2',
                'school_year' => '2023-2024',
                'module_id' => '841070',
                'module_name' => 'Thực tập tốt nghiệp',
                'exam_date' => '2023-07-23',
                'exam_room' => 'E403',
                'score' => '10.0',
            ],

        ];
        $this->db->table('remarks')->insertBatch($data);
    }
}