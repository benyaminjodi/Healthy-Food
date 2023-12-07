<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use \App\Models\User;

class Register extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $rules = [
            'email' => 'required|valid_email|is_unique[users.email]',
            'username' => 'required',
            'password' => 'required',
        ];

        if ($this->validate($rules)) {
            $data = [
                'email' => $this->request->getVar('email'),
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];

            $userModel = new User;

            $userModel->insert($data);

            return $this->respond([
                'message' => 'Registration Success',
                'status' => 201,
            ], 201);
        }
        return $this->respond([
            'message' => $this->validator->getErrors(),
            'status' => 400
        ], 400);
    }
}
