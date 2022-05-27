<?php

namespace CodeIgniter\Model;

use CodeIgniter\Model;

class Admin extends Model
{
    protected $table = "staff";
    protected $allowedFields = ['username', 'password'];

    public function getUser($username)
    {
        return $this->where(['username' => $username])->first();
    }
}

?>