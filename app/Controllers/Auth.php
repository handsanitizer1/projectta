<?php

namespace App\Controllers;

use App\Models\ApiModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use Exception;

class Auth extends ResourceController
{

    private $api_helpers;
    private $validation;

    public function __construct()
    {
        $this->model = new ApiModel();
        $this->api_helpers = new Api_helpers();
        $this->validation = \Config\Services::validation();
        helper("Helpers");
    }

    public function login() // POST
    {
        $confValidate = [
            'user_Name' => [
                'rules' => 'required|min_length[3]|max_length[21]|regex_match[/^[a-zA-Z0-9_]+$/]',
                'errors' => [
                    'required' => 'You must fill out this field',
                    'min_length' => 'Minimum length is 3',
                    'max_length' => 'Maximum length is 21',
                    'regex_match' => lang('Validation.incorrect', [lang('Validation.username')])
                ]
            ],
            'user_Password' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'You must fill out this field',
                    'min_length' => 'Minimum length is 3'
                ]
            ]
        ];

        if (!$this->validate($confValidate)) {
            $errors_validation = $this->validation->getErrors();
            if ($this->validation->hasError('user_Name')) {
                return $this->respond([
                    'message' => lang('Message.validation_error'),
                    'errors' => $errors_validation
                ], 400);
            }
        }


        $username = $this->request->getJsonVar('user_Name');
        $password = $this->request->getJsonVar('user_Password');

        $query = "SELECT u.id, u.user_Email, u.user_Role, u.user_Password FROM user.users u WHERE u.user_Email = ?";
        $hash_pass = passwordHash($password);
        $data_user = $this->api_helpers->queryGetFirst($query, [$username]);
        if ($data_user === null) {
            $errors_validation['username'] = lang('Validation.incorrect', [lang('Validation.username')]);
            return $this->respond([
                'message' => lang('Message.validation_error'),
                'errors' => $errors_validation
            ], 400);
        }
        if ($errors_validation ?? false) {
            return $this->respond([
                'message' => lang('Message.validation_error'),
                'errors' => $errors_validation
            ], 400);
        }
        if ($hash_pass != $data_user['password']) {
            return $this->respond([
                'messsage' => lang('Message.validation_error'),
                'errors' => [
                    'password' => lang('Validation.incorrect', [lang('Validation.password')])
                ]
            ], 400);
        }

        $i = 0;
        do {
            $generated_token = generateToken($data_user['id']);
            $query = "SELECT count(us.id) as jml FROM user.user_session us WHERE us.id_user != ? AND us.token = ? ";
            $is_exist_token = $this->api_helpers->queryGetFirst($query, [$data_user['id'], $generated_token])['jml'] >= 1;
            $i++;
        } while ($is_exist_token && $i <= 10);

        if ($is_exist_token) {
            return $this->respond([
                'message' => lang('Message.no_more_session')
            ], 503);
        }

        $data_session = [
            'token' => $generated_token,
            'id_user' => $data_user['id'],
            'expired_at' => strtotime("+1 months"),
            'login_at' => time()
        ];
        if (!$this->model->db->table('user.user_session')->insert($data_session)) {
            return $this->respond([
                'message' => lang('Message.unexpected'),
            ], 500);
        }

        if ($this->api_helpers->clearUnusedSession($generated_token) !== true) {
            return $this->respond([
                'message' => lang('Message.unexpected'),
            ], 500);
        }

        $jwt = setTokenJwt($generated_token);

        helper('cookie');
        $cookie = [
            'name'   => 'jwt',
            'value'  => $jwt,  // seng iki
            'expire' => 2592000,
            'httponly' => TRUE
        ];
        $this->response->setCookie($cookie);

        return $this->respond([
            'message' => lang('Message.login_success')
        ]);
    }
}
