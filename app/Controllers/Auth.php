<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }
    public function login()
    {   
        $session = session();
        $userModel = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $user = $userModel->where('username',$username)->first();
        if($user){
            $pass = $user['password'];
            $uname = $user['username'];
            if($pass === $password && $uname === $username){
                $ses_data = [
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'logged' => TRUE
                ];
                $session->set($ses_data);
            }else{
                echo 'wrong';
            }
        }else{
            echo 'tidak ada';
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
    } 
}
