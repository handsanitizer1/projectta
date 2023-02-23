<?php

namespace App\Controllers;

use App\Models\ApiModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use Exception;

class Admin extends ResourceController
{

    private $api_helpers;
    private $validation;

    public function __construct()
    {
        $this->model = new ApiModel();
        $this->api_helpers = new Api_helpers();
        $this->validation = \Config\Services::validation();
        helper(["Helpers_helpers"]);
    }

    public function userList()
    {
        $dataUser = $this->model->db->table('users.users');
        $data['data'] = $dataUser->orderBy('user_name')->result();
        return view('admin-home', ['data' => $data['data']]);
    }
}
