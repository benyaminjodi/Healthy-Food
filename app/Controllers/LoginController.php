<?php

namespace App\Controllers;

use App\Models\Login;
use CodeIgniter\Cookie\Cookie;
use DateTime;

class LoginController extends BaseController
{

    public function index()
    {
        return view('v_login');
    }

    public function login_action()
    {
        $model = model(Login::class);
        $email = $this->request->getPost('email');
        $password = ($this->request->getPost('password'));
        $cek = $model->getDataUsers($email, $password);
        if ($cek == 1) {
            session()->set('num_user', $cek);
            setcookie("TestCookie", $email);

            return redirect()->to('/');
        } else {
            session()->destroy();
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        return redirect()->to('/login');
    }
}
