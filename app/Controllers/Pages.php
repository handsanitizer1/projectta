<?php

namespace App\Controllers;

use App\Models\ApiModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\RESTful\ResourceController;

class Pages extends ResourceController
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

    public function landing()
    {
        return view('template/_landingpage');
    }

    public function loginPage()
    {
        return view('auth/v_login');
    }

    public function registerPage()
    {
        return view('auth/v_register');
    }

    public function home()
    {
        $id = session()->get("id_user");
        // $query = "SELECT u.id, u.user_name, u.user_address as address, u.user_telephone as phone, u.user_email, u.user_role, u.user_password FROM users u WHERE u.id = ?";

        // $data_user = $this->api_helpers->queryGetFirst($query, [$id]);
        $data_user = $this->model->db->table('users.users as u')
            ->select('u.id, u.user_name, u.user_address as address, u.user_telephone as phone, u.user_email, u.user_role, u.user_password')
            ->where('u.id', $id)
            ->get()->getRowArray();

        $datas = [
            'id' => $data_user['id'],
            'user_name' => $data_user['user_name'],
            'address' => $data_user['address'],
            'phone' => $data_user['phone'],
            'user_email' => $data_user['user_email'],
            'user_role' => $data_user['user_role'],
            'user_password' => $data_user['user_password'],
        ];

        return view('home/v_home', ['data_user' => $datas]);
    }

    public function employeeHome()
    {
        return view('home/v_employeehome');
    }

    public function adminHome()
    {
        $dataUser = $this->model->db->table('users.users');
        $query = "SELECT * FROM users.users u WHERE u.user_role =3";
        $data_user['data'] = $this->api_helpers->queryGetArray($query);
        // $data['data'] = $dataUser->orderBy('user_name')->result();
        return view('admin/v_adminlayout');
        // return view('admin/v_adminlayout');
    }

    public function addEvent()
    {
        return view('admin/v_add_event');
    }

    public function editEvent($id)
    {
        $query = "SELECT * FROM event.event u WHERE u.id = ?";
        $data_user = $this->api_helpers->queryGetFirst($query, [$id]);
        return view('admin/v_edit_event', ['editUser' => $data_user]);
    }
}
