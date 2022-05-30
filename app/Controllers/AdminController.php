<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
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
    
    public function login()
    {
        return view('admin/login');
    }

    public function dev()
    {
        if(session()->get('login'))
        {
            return view('admin/dev');
        }
        else
        {
            return redirect()->to(base_url('/admin/login'));
        }
    }
}
