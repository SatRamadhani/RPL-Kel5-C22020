<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class AdminController extends BaseController
{
    private $admin;
    
    public function __construct()
    {
        $this->admin = new AdminModel();
    }

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
            echo md5($password) . " " . $user['password'];
            if(md5($password) == $user['password'])
            {
                session()->set(['username' => $user['username'], 'login' => TRUE]);

                return redirect()->to(base_url('/admin'));
            }
            else
            {
                session()->setFlashdata('error', "Password salah!");
                return redirect()->to(base_url('/admin/login'));
            }
        }
        else
        {
            session()->setFlashdata('error', "Username atau Password salah!");
            return redirect()->to(base_url('/admin/login'));
        }
    }

    public function logout()
    {
        session()->unset();
        session()->destroy();
        return redirect()->to(base_url('/admin/login'));
    }
}
