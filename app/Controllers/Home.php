<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (session()->get('num_user') == '') {
            return redirect()->to('/login');
        }
        $data = [
            'title' => 'Home',
            'page' => 'v_home',
        ];

        return view('v_front_end', $data);
    }
}
