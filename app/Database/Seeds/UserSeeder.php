<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [   
            'name'      => 'Admin Sprint Challenge',
            'email'     => 'admin@admin.com',
            'password'  => password_hash('password', PASSWORD_DEFAULT),
            'role'      => 0,
        ];

        $this->db->table('users')->insert($data);
    }
}
