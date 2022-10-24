<?php

namespace App\Models;

use App\Core\Model;

class Main extends Model
{
    public function getRealties()
    {
        // $params = [
        //     'id' => 2,
        // ];
        // $data = $this->db->column('SELECT name FROM realties WHERE id = :id', $params);
        $result = $this->db->row('SELECT * FROM realties');
        return $result;
    }

    public function getRealtyById($id)
    {
        $params = [
            'id' => $id,
        ];
        $result = $this->db->column('SELECT name FROM realties WHERE id = :id', $params);
        // $result = $this->db->row('SELECT * FROM realties');
        return $result;
    }
}
