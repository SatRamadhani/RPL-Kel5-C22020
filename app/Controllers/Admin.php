<?php

namespace App\Controllers;

class Admin extends BaseController
{

    public function index()
    {
        if(session()->get('login'))
        {
            return view('admin/index');
        }
        else
        {
            return redirect()->to(base_url('/admin/login'));
        }
    }
    
    public function loginPage()
    {
        return view('admin/login');
    }

    public function login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $user = $this->admin->getUser($username);

        if($user)
        {
            if(md5($password) == $user['password'])
            {
                session()->set(['username' => $user['username'], 'login' => TRUE]);

                return redirect()->to(base_url('/admin'));
            }
            else
            {
                session()->setFlashdata('error', "Password salah!");
                return redirect()->back();
            }
        }
        else
        {
            session()->setFlashdata('error', "Username atau Password salah!");
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->unset();
        session()->destroy();
        return redirect()->to(base_url('/admin/login'));
    }
}
