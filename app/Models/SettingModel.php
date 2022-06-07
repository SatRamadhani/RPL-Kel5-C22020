<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingModel extends Model
{
    protected $table = "setting";
    protected $allowedFields = ['id', 'status_toko', 'kapasitas_toko', 'batas_tb'];
    protected $primaryKey = "id";

    public function getSetting($id = 1)
    {
        return $this->where('id', $id)->first();
    }

    public function changeStatus($data = 0, $id = 1)
    {
        return $this->update($id, $data);
    }
}

?>