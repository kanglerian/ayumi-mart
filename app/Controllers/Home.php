<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();
        echo 'Welcome back ' . $session->get('email');
    }
}
