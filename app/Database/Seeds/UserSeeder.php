<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email'     => 'admin@gmail.com',
                'password'  => password_hash('123123', PASSWORD_BCRYPT),
                'name'      => "Tài khoản quản trị",
                'role'      => 'admin'
            ],
            [
                'email'=> 'minhhuan@gmail.com',
                'password'=> password_hash('admin123', PASSWORD_BCRYPT),
                'name' => "Minh Huan Vo",
                'role'      => 'user'
            ]

        ];
        $this->db->table('users')->insertBatch($data);
    }
}
