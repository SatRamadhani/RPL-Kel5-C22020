<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VisitorModel;
use App\Models\SettingModel;

class Home extends BaseController
{
    private $visitor;
    private $setting;

    public function __construct()
    {
        $this->visitor = new VisitorModel();
        $this->setting = new SettingModel();
    }

    public function index()
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

        return view('index', $data);
    }

    public function login()
    {
        return view('admin/login');
    }
}
