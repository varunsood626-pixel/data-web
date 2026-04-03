<?php

namespace App\Models;

use CodeIgniter\Model;

class M_login extends Model {

    protected $table = 'admin_users';

    protected $primaryKey = 'id';

    public function validate_user($username, $password) {

        $user = $this->where('username', $username)

                     ->where('password', md5($password))

                     ->first();

        return $user ?: false;

    }

}

