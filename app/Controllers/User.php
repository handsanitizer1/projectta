<?php

namespace App\Controllers;

use App\Models\ApiModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use Exception;

class User extends ResourceController
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

    public function editData()
    {
        $confValidate = [
            'name' => [
                'rules' => 'required|max_length[200]',
                'errors' => [
                    'required' => "Name Required",
                    'max_length' => "Max Length 200 Character"
                ]
            ], 'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Address Required"
                ]
            ], 'phone' => [
                'rules' => 'required',
                'errors' => [
                    'required' => "Phone Required"
                ]
            ], 'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => "Email Required",
                    'valid_email' => "Email Is Not Match With Require Format"
                ]
            ]
        ];

        if (!$this->validate($confValidate)) {
            $errors_validation = $this->validation->getErrors();
            $error_message = reset($errors_validation);
            var_dump($error_message);
            die;
            session()->setFlashdata("Errors", $error_message);
            return redirect()->to('home#update');
        }


        $id = $this->request->getGetPost('id');
        $name = $this->request->getGetPost('name');
        $phone = $this->request->getGetPost('phone');
        $address = $this->request->getGetPost('address');
        $email = $this->request->getGetPost('email');

        $data = [
            'user_name' => $name,
            'user_telephone' => $phone,
            'user_address' => $address,
            'user_email' => $email
        ];

        $this->model->db->table('users.users')
            ->update($data, ['id' => $id]);
        return redirect()->to('home');
    }
}
