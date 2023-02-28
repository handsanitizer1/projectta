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


    public function eventList()
    {
        $dataUser = $this->model->db->table('event.event');
        $query = "SELECT * FROM event.event";
        $data_user['data'] = $this->api_helpers->queryGetArray($query);
        // $data['data'] = $dataUser->orderBy('user_name')->result();
        return view('admin/v_event_list', ['data' => $data_user['data']]);
    }

    public function addEvent()
    {
        $confValidate = [
            'event_name' => [
                'rules' => 'required|max_length[200]',
                'errors' => [
                    'required' => "Name Required",
                    'max_length' => "Max Length 200 Character"
                ]
            ], 'event_description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Description Required"
                ]
            ], 'event_at' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Required"
                ]
            ], 'event_start' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Required"
                ]
            ], 'event_end' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Required"
                ]
            ]
        ];

        if (!$this->validate($confValidate)) {
            $errors_validation = $this->validation->getErrors();
            $error_message = reset($errors_validation);

            session()->setFlashdata("Errors", $error_message);
            return redirect()->to('register');
        }

        $event_name = $this->request->getGetPost('event_name');
        $event_description = $this->request->getGetPost('event_description');
        $event_at = $this->request->getGetPost('event_at');
        $event_start = $this->request->getGetPost('event_start');
        $event_end = $this->request->getGetPost('event_end');

        $tblUser = $this->model->db->table('event.event');
        $data = [
            'event_name'         => $event_name,
            'event_description'      => $event_description,
            'event_at' => $event_at,
            'event_start'       => $event_start,
            'event_end'      => $event_end
        ];

        if ($tblUser->insert($data)) {
            $success_validation['insert'] = "Add Event Success";
            session()->setFlashdata("Success", $success_validation['insert']);
            return redirect()->to('add-event');
        } else {
            return $this->respond([
                'message' => lang('Message.unexpected')
            ], 500);
        }
    }

    public function editEvent()
    {
        $confValidate = [
            'event_name' => [
                'rules' => 'required|max_length[200]',
                'errors' => [
                    'required' => "Name Required",
                    'max_length' => "Max Length 200 Character"
                ]
            ], 'event_description' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Description Required"
                ]
            ], 'event_at' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Required"
                ]
            ], 'event_start' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Required"
                ]
            ], 'event_end' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Required"
                ]
            ]
        ];

        if (!$this->validate($confValidate)) {
            $errors_validation = $this->validation->getErrors();
            $error_message = reset($errors_validation);

            session()->setFlashdata("Errors", $error_message);
            return redirect()->to('register');
        }


        $id = $this->request->getGetPost('id');
        $event_name = $this->request->getGetPost('event_name');
        $event_description = $this->request->getGetPost('event_description');
        $event_at = $this->request->getGetPost('event_at');
        $event_start = $this->request->getGetPost('event_start');
        $event_end = $this->request->getGetPost('event_end');

        $data = [
            'event_name'         => $event_name,
            'event_description'      => $event_description,
            'event_at' => $event_at,
            'event_start'       => $event_start,
            'event_end'      => $event_end
        ];

        $this->model->db->table('users.users')
            ->update($data, ['id' => $id]);
        return redirect()->to('home');
    }
}
