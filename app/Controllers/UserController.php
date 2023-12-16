<?php

namespace App\Controllers;

use App\Models\User;
use CodeIgniter\Cookie\Cookie;
use DateTime;

class UserController extends BaseController
{
    public function index()
    {
        $model = new User();
        $email = $_COOKIE['TestCookie'];
        $data['user'] = $model->getUser($email);

        return view('v_user', $data);
    }

    public function sign_up()
    {
        $model = new User();
        $email = $this->request->getPost('email');
        $name = $this->request->getPost('name');
        $password = $this->request->getPost('password');
        $model->createUser($name, $email, $password);
    }
}
