<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = "pengunjung";
    protected $allowedFields = ['id', 'waktu_kedatangan', 'tinggi_badan'];
    protected $primaryKey = "username";

    public function getUser($username)
    {
        return $this->where('username', $username)->first();
    }
}

?>