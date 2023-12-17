<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            "name" => "Benyamin Jodi",
            "email" => "benyamin@gmail.com",
            "password" => md5("password")
        ];

        $this->db->table("users")->insert($data);
    }
}
