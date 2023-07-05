<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ContactsSeeder extends Seeder
{
    public function run()
    {
        $data = [];

        for ($i = 0; $i<50; $i++)
        {
            array_push($data, [
                'name' => 'James Fernando',
                'email' => 'emailcontacts'.$i.'@gmail.com',
                'phone' => '09778736'.$i,
                'content' => 'Nội dung'.$i
            ]);
        }
        $this->db->table('contacts')->insertBatch($data);
    }
}
