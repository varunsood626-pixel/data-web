<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\M_login;

class Login extends Controller {

    protected $mLogin;

    public function __construct() {
        $this->mLogin = new M_login();
    }

    public function index() {
        return view('admin/login');
    }

    public function checkLogin() {
       
        if ($this->request->getMethod() == 'POST') {
            $username = $this->request->getPost('loginemail', FILTER_SANITIZE_STRING);
            $password = $this->request->getPost('loginpass', FILTER_SANITIZE_STRING);

            $user = $this->mLogin->validate_user($username, $password);
            if ($user) {
                // Set session
                session()->set('admin_id', $user['id']);
                session()->set('admin_username', $user['username']);
                session()->set('full_name', $user['full_name']);

                return redirect()->to(base_url('dashboard'));
            } else {
                $data['error'] = 'Invalid username or password';
                return view('admin/login', $data);
            }
        } else {
            return redirect()->to(base_url('login/logout'));
        }
    }

    public function logout() {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }

}
