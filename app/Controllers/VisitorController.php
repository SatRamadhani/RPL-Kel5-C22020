<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VisitorModel;

class VisitorController extends BaseController
{
    private $visitor;
    
    public function __construct()
    {
        $this->visitor = new VisitorModel();
    }

    public function insert()
    {
        date_default_timezone_set("Asia/Jakarta");
        $this->visitor->insertData();

        return redirect()->to(base_url('/admin'));
    }
}

?>