<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        if(!session()->get('logged')){
            return view('auth/login');
        }
        return redirect()->to('/home');
    }

    public function registration()
    {
        if(!session()->get('logged')){
            return view('auth/signup');
        }
        return redirect()->to('/home');
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
                return redirect()->to('/home');
            }else{
                return redirect()->to('/');
            }
        }else{
            return redirect()->to('/');
        }
    }

    public function signup()
    {   
        $users = new UserModel();
        $data = [
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
        ];
        $users->insert($data);
        return redirect()->to('/');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    } 
}
