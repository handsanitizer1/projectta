<?php

namespace App\Controllers;

use App\Models\ApiModel;
use CodeIgniter\RESTful\ResourceController;
use Exception;
use PHPUnit\Framework\MockObject\Rule\AnyParameters;

class Api_helpers extends BaseController
{

    private $model;

    public function __construct()
    {
        $this->model = new ApiModel();
    }

    public function clearUnusedSession(string $token, Bool $is_included = false) // disabled activated session of mentioned token on databases
    {
        try {
            if ($is_included) {
                $query = "UPDATE users.user_session us SET is_login = FALSE WHERE us.id_user = (SElECT uss.id_user FROM users.user_session uss WHERE uss.token = ?) and us.is_login = TRUE";
                $this->model->db->query($query, [$token]);
            } else {
                $query = "UPDATE users.user_session us SET is_login = FALSE WHERE us.id_user = (SElECT uss.id_user FROM users.user_session uss WHERE uss.token = ?) and us.is_login = TRUE and us.token != ?";
                $this->model->db->query($query, [$token, $token]);
            }
        } catch (Exception $exception) {
            return false;
        }
        return true;
    }

    public function queryGetArray(string $query, bool | array $bind = false)
    {
        return !$bind ? json_decode(json_encode($this->model->db->query($query)->getResultArray()), true)
            : json_decode(json_encode($this->model->db->query($query, $bind)->getResultArray()), true);
    }

    public function queryGetFirst(string $query, bool | array $bind = false)
    {
        return !$bind ? json_decode(json_encode($this->model->db->query($query)->getFirstRow()), true)
            : json_decode(json_encode($this->model->db->query($query, $bind)->getFirstRow()), true);
    }

    public function queryExecute(string $query, bool | array $bind = false)
    {
        return !$bind ? $this->model->db->query($query) : $this->model->db->query($query, $bind);
    }
}
