<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiModel extends Model
{
    private $id = 'id';
    protected $table = "users.users";

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->db->schema = "users";
    }
}
