<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestUser extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email'    => 'kanglerian@ayumi.com',
                'username' => 'kanglerian',
                'password' => 'lerian123',
                'status' => false
            ],
            [
                'email'    => 'ayumi@ayumi.com',
                'username' => 'ayumi',
                'password' => 'ayumi123',
                'status' => true
            ],
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
