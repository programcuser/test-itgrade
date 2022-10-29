<?php

namespace App\Models;

use App\Core\Model;

class User extends Model
{
    public $table = 'users';

    public function getAllUsers()
    {
        $result = $this->db->row("SELECT * FROM {$this->table}");
        return $result;
    }

    public function getUserById($id)
    {
        $params = [
            'id' => $id,
        ];
        $result = $this->db->row("SELECT * FROM {$this->table} WHERE id = :id", $params);
        return $result[0];
    }

    public function getUserByLogin($login)
    {
        $params = [
            'login' => $login,
        ];
        $result = $this->db->row("SELECT * FROM {$this->table} WHERE login = :login", $params);
        return $result[0];
    }
}
