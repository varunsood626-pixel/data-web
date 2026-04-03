<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Letest_model;

class Letest extends Controller {

    protected $letestModel;

    public function __construct() {
        $this->letestModel = new Letest_model();
    }

    public function index() {
        $data['letests'] = $this->letestModel->get_all();
        return view('letest/index', $data);
    }

    public function create() {
        if ($this->request->getMethod() == 'post') {
            $data = $this->request->getPost();
            $this->letestModel->insert($data);
            return redirect()->to('dashboard/latest_cancer_advancements');
        }
        $data['title'] = 'Create';
        $data['content'] = 'letest/create';
        return view('admin/layouts/main', $data);
    }

    public function edit($id = "") {
        $data['letest'] = $this->letestModel->get($id);
       
        if ($this->request->getMethod() == 'POST') {
            $update = $this->request->getPost();
            $this->letestModel->update($id, $update);

            return redirect()->to('dashboard/latest_cancer_advancements');
        }

        $data['title'] = 'Edit';
        $data['content'] = 'letest/edit';
        return view('admin/layouts/main', $data);
    }

    public function delete($id) {
        $this->letestModel->delete($id);
        return redirect()->to('dashboard/latest_cancer_advancements');
    }

}

