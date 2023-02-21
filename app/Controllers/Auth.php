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
        helper(["Helpers_helpers"]);
    }

    public function login() // POST
    {
        $confValidate = [
            'username' => [
                'rules' => 'required|min_length[3]|max_length[100]',
                'errors' => [
                    'required' => 'You must fill out this field',
                    'min_length' => 'Minimum length is 3',
                    'max_length' => 'Maximum length is 100'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]',
                'errors' => [
                    'required' => 'You must fill out this field',
                    'min_length' => 'Minimum length is 4'
                ]
            ]
        ];

        if (!$this->validate($confValidate)) {
            $errors_validation = $this->validation->getErrors();
            if ($this->validation->hasError('username')) {
                $valerror['usspass'] = "Email and Password can't be empty";

                session()->setFlashdata("Errors", $valerror['usspass']);
                return redirect()->to('login');
            }
        }


        $username = $this->request->getGetPost('username');
        $password = $this->request->getGetPost('password');

        $query = "SELECT u.id, u.user_email, u.user_role, u.user_password FROM users u WHERE u.user_email = ?";
        // $hash_pass = passwordHash($password);
        $hash_pass = $password;
        $data_user = $this->api_helpers->queryGetFirst($query, [$username]);
        if ($data_user === null) {
            $errors_validation['username'] = "Incorrect Email";

            session()->setFlashdata("Errors", $errors_validation['username']);
            return redirect()->to('login');
        }

        if ($errors_validation ?? false) {
            $errors_validation['password'] = "Password can't be empty";
            session()->setFlashdata("Errors", $errors_validation['password']);
            return redirect()->to('login');
        }
        if (!password_verify($password, $data_user['user_password'])) {
            $errors_validation['password'] = "Incorrect Passwod";
            session()->setFlashdata("Errors", $errors_validation['password']);
            return redirect()->to('login');
        }

        $i = 0;
        do {
            $generated_token = generateToken($data_user['id']);
            $query = "SELECT count(us.id) as jml FROM user_session us WHERE us.id_user != ? AND us.token = ? ";
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
        if (!$this->model->db->table('user_session')->insert($data_session)) {
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

        session()->set("user_role", $data_user['user_role']);
        session()->set("id_user", $data_user['id']);
        // return $this->respond([
        //     'user' => $data_user,
        //     'message' => lang('Message.login_success')
        // ]);

        if ($data_user['user_role'] == 0) {
            return redirect('superadmin-home');
        } elseif ($data_user['user_role'] == 1) {
            return redirect('admin-home');
        } elseif ($data_user['user_role'] == 2) {
            return redirect('employee-home');
        } else {
            return redirect('home');
        }
        // return redirect('home');
    }

    public function register() // POST
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
                'rules' => 'required|regex_match[/^(\+62|62|0)8[1-9][0-9]{6,10}$/]',
                'errors' => [
                    'required' => "Phone Required",
                    'regex_match' => "Phone Number Is Not Match With Require Format"
                ]
            ], 'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => "Email Required",
                    'valid_email' => "Email Is Not Match With Require Format"
                ]
            ], 'password' => [
                'rules' => 'required|min_length[4]',
                'errors' => [
                    'required' => "Password Required",
                    'min_length' => "Min Length 4 Character"
                ]
            ], 'repassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => "Retype Password Required",
                    'matches' => "Retype Password Not Match With Password"
                ]
            ]
        ];

        if (!$this->validate($confValidate)) {
            $errors_validation = $this->validation->getErrors();
            $error_message = reset($errors_validation);

            if (!$this->validation->hasError('email')) {
                $email = $this->request->getJsonVar('email');
                $query = "SELECT count(u.id) as jml FROM users u WHERE u.user_email = ?";
                if ($this->api_helpers->queryGetFirst($query, [$email])['jml'] >= 1) {
                    $errors_validation['email'] = lang('Validation.already_registered', [lang('Validation.email')]);
                }
            }
            session()->setFlashdata("Errors", $error_message);
            return redirect()->to('register');
        }


        $name = $this->request->getGetPost('name');
        $phone = $this->request->getGetPost('phone');
        $address = $this->request->getGetPost('address');
        $email = $this->request->getGetPost('email');
        $password = $this->request->getGetPost('password');

        $query = "SELECT u.id, u.user_email, u.user_role, u.user_password FROM users u WHERE u.user_email = ?";
        // $hash_pass = passwordHash($password);
        $hash_pass = $password;
        $data_user = $this->api_helpers->queryGetFirst($query, [$email]);
        if ($data_user !== null) {

            session()->setFlashdata("Errors", "Email has been used!");
            return redirect()->to('register');
        }

        // if ($gender == 'male') {
        //     $gender = ['gender' => 1];
        // } elseif ($gender == 'female') {
        //     $gender = ['gender' => 2];
        // }
        // if ($gender == "male") $gender = 1;
        // if ($gender == "female") $gender = 2;

        $tblUser = $this->model->db->table('users.users');
        $hash_pass = password_hash($password, PASSWORD_DEFAULT);
        $data = [
            'user_name'         => $name,
            'user_telephone'      => $phone,
            'user_address' => $address,
            'user_email'       => $email,
            'user_password'      => $hash_pass,
            'user_role' => 3
        ];

        if ($tblUser->insert($data)) {
            $success_validation['insert'] = "Registration Success";
            session()->setFlashdata("Success", $success_validation['insert']);
            return redirect()->to('login');
        } else {
            return $this->respond([
                'message' => lang('Message.unexpected')
            ], 500);
        }
    }

    public function logout() // HEAD
    {
        $jwt = $this->request->getCookie('jwt');

        $token = getTokenJwt($jwt);
        if ($token === false) {
            return $this->respond(status: 200);
        }

        if ($this->api_helpers->clearUnusedSession($token, true) === false) {
            return $this->respond(status: 500);
        }

        $this->response->deleteCookie('jwt');
        session()->remove('user_role');
        var_dump(session()->get('user_role'));

        return redirect()->to('login');
    }
}
