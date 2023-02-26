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
        $query = "SELECT * FROM users.users u WHERE u.user_role =3";
        $data_user['data'] = $this->api_helpers->queryGetArray($query);
        // $data['data'] = $dataUser->orderBy('user_name')->result();
        return view('admin/v_user_list', ['data' => $data_user['data']]);
    }

    public function employeeList()
    {
        $dataUser = $this->model->db->table('users.employee');
        $query = "SELECT * FROM users.employee";
        $data_user['data'] = $this->api_helpers->queryGetArray($query);
        // $data['data'] = $dataUser->orderBy('user_name')->result();
        return view('admin/v_employee_list', ['data' => $data_user['data']]);
    }
}
