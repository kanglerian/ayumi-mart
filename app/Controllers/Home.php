<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();
        $data['username'] = $session->get('username');
        return view('pages/users/test', $data);
    }
}
