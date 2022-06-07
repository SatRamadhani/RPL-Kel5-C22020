<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitorModel extends Model
{
    protected $table = "pengunjung";
    protected $allowedFields = ['id', 'waktu_kedatangan', 'tinggi_badan'];
    protected $primaryKey = "id";

    public function getAllData()
    {
        return $this->findAll();
    }

    public function getData($id)
    {
        return $this->where('id', $id)->first();
    }
    
    public function getDataToday($height = 100)
    {
        
        $query = $this->db->query("SELECT COUNT(id) AS result FROM pengunjung
                                   WHERE DATE(waktu_kedatangan) = CURDATE() AND
                                   tinggi_badan >= '$height'");
        return $query->getRow()->result;
    }

    public function getDataHourPerToday($num, $height = 100)
    {
        $query = $this->db->query("SELECT COUNT(id) AS result FROM pengunjung
                                   WHERE DATE(waktu_kedatangan) = CURDATE() AND
                                   HOUR(TIME(waktu_kedatangan)) = '$num' AND
                                   tinggi_badan >= '$height'");
        return $query->getRow()->result;
    }

    public function getDataHourPerMonth($num, $height = 100)
    {
        $query = $this->db->query("SELECT COUNT(id) / 30 AS result FROM pengunjung
                                   WHERE HOUR(TIME(waktu_kedatangan)) = '$num' AND
                                   tinggi_badan >= '$height'");
        return $query->getRow()->result;
    }

    public function insertData()
    {
        $date = date("Y-m-d H:i:s");
        $this->insert(['id' => '', 'waktu_kedatangan' => $date, 'tinggi_badan' => rand(0, 300)]);
    }
}

?>