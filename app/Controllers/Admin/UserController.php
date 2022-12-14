<?php

namespace App\Controllers\Admin;

use App\Models\UserModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        $users = new UserModel();
        $data['users'] = $users->findAll();
        return view('pages/users/lists',$data);
    }

    public function anu()
    {
        echo "anu";
    }
}
