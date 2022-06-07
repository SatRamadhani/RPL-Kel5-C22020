<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SettingModel;
use App\Models\VisitorModel;

class AdminController extends BaseController
{
    private $visitor;
    private $setting;

    public function __construct()
    {
        $this->visitor = new VisitorModel();
        $this->setting = new SettingModel();
    }
    
    public function login()
    {
        if(session()->get('login'))
        {
            return redirect()->to(base_url('/admin'));
        }
        else
        {
            return view('login');
        }
    }

    public function dev()
    {
        if(session()->get('login'))
        {
            $setting = $this->setting->getSetting();

            $hour_per_today = array();
            for($i = 0; $i <= 23; $i++)
            {
                $hour_per_today[$i] = $this->visitor->getDataHourPerToday($i, $setting['batas_tb']);
            }

            $hour_per_month = array();
            for($i = 0; $i <= 23; $i++)
            {
                $hour_per_month[$i] = $this->visitor->getDataHourPerMonth($i, $setting['batas_tb']);
            }

            $today = $this->visitor->getDataToday();
            
            $data = array();
            $data['hours_per_today'] = $hour_per_today;
            $data['hours_per_month'] = $hour_per_month;
            $data['today_visitor'] = $today;
            $data['setting'] = $setting;

            return view('dev', $data);
        }
        else
        {
            return redirect()->to(base_url('/admin/login'));
        }
    }

    public function changeStatus()
    {
        $setting = $this->setting->getSetting();
        $setting['status_toko'] = ($setting['status_toko'] == 0) ? 1 : 0;
        $this->setting->changeStatus($setting);

        return redirect()->to(base_url('/admin/dev'));
    }
}
