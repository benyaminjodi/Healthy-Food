<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard',
            'page' => 'v_dashboard',
        ];

        return view('v_back_end', $data);
    }
}
