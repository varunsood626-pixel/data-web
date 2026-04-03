<?php

namespace App\Controllers;

use App\Models\Publication_model;

class Publications extends BaseController {

    protected $publicationModel;

    public function __construct() {
        $this->publicationModel = new Publication_model();
    }

    public function index() {
        $data['publications'] = $this->publicationModel->get_all();
        $data['content'] = 'publications/index';
        return view('admin/layouts/main', $data);
    }

    public function create() {
        $data['content'] = 'publications/create';
        return view('admin/layouts/main', $data);
    }

    public function store() {
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'link' => $this->request->getPost('link'),
            'category' => $this->request->getPost('category'),
            'publishon' => $this->request->getPost('publishon'),
        ];
        $this->publicationModel->insert($data);
        return redirect()->to('publications');
    }

    public function edit($id) {
        $data['publication'] = $this->publicationModel->get($id);
        $data['content'] = 'publications/edit';
        return view('admin/layouts/main', $data);
    }

    public function update($id) {
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'link' => $this->request->getPost('link'),
            'category' => $this->request->getPost('category'),
            'active' => $this->request->getPost('active'),
            'publishon' => $this->request->getPost('publishon'),
        ];
        $this->publicationModel->update($id, $data);
        return redirect()->to('publications');
    }

    public function delete($id) {
        $this->publicationModel->delete($id);
        return redirect()->to('publications');
    }

}

