<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Welcome extends Controller {

    public function index() {

        $data['title'] = 'Home';

        $data['content'] = 'admin/dashboard';

        return view('admin/layouts/main', $data);

    }

}
