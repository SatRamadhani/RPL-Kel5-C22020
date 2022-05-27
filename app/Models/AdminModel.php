<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = "staff";
    protected $allowedFields = ['username', 'password'];
    protected $primaryKey = "username";

    public function getUser($username)
    {
        return $this->where('username', $username)->first();
    }
}

?>