<?php

namespace App\Models;

use CodeIgniter\Model;

class ApiModel extends Model
{
    private $id = 'id';

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
}
