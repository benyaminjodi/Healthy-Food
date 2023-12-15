<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'email';

    protected $allowedFields = ['name', 'email', 'password', 'poin'];

    public function createUser($name, $email, $password)
    {
        $data = [
            'name' => $name,
            'email' => $email,
            'password' => md5($password),
            'poin' => 0
        ];

        return $this->insert($data);
    }

    public function addPoin($email, $poin)
    {
        $data = [
            'poin' => $poin + $this->getPoin($email)
        ];

        return $this->db->table('users')->where('email', $email)->update($data);
    }
    public function getPoin($email)
    {
        $poin = $this->db->table('users')->select('poin')->where('email', $email)->get()->getRowArray();
        return $poin['poin'];
    }
}
