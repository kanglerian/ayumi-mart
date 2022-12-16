<?php

namespace App\Controllers\Admin;

use App\Models\UserModel;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        $session = session();
        $users = new UserModel();
        $data['users'] = $users->findAll();
        $data['username'] = $session->get('username');
        return view('pages/users/lists',$data);
    }

    public function add()
    {
        return view('pages/users/add');
    }

    public function edit($id)
    {
        echo $id;
    }

    public function registration()
    {
        $users = new UserModel();
        $data = [
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
        ];
        $users->insert($data);
        return redirect()->to('/users');
    }

    public function delete($id)
    {
        $users = new UserModel();
        $users->where('id', $id);
        $users->delete();
        return redirect()->to('/users');
    }
}
