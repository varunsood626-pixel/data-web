<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\Team_model;

class Team extends Controller {

    protected $teamModel;

    public function __construct() {
        $this->teamModel = new Team_model();
        helper(['form', 'url']);
    }

    public function index() {
        $data['members'] = $this->teamModel->get_all();
        $data['title'] = 'List';
        $data['content'] = 'team/index';
        return view('admin/layouts/main', $data);
    }

    public function create() {
        if ($this->request->getMethod() == 'POST') {
            $files = $this->request->getFiles();
            $file_name = '';
            if (isset($files['image']) && $files['image']->isValid() && !$files['image']->hasMoved()) {
                $file = $files['image'];
                $newName = $file->getName();
                $file->move('./uploads/team/', $newName);
                $file_name = $newName;
            }

            $insert = [
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
                'department' => $this->request->getPost('department'),
                'qualification' => $this->request->getPost('qualification'),
                'image' => $file_name,
                'active' => $this->request->getPost('active'),
                'created_at' => date('Y-m-d H:i:s'),
            ];
            $this->teamModel->insert($insert);
            return redirect()->to('team');
        }

        $data['content'] = 'team/create';
        return view('admin/layouts/main', $data);
    }

    public function edit($id) {
        $data['member'] = $this->teamModel->get($id);
        if ($this->request->getMethod() == 'POST') {
            $files = $this->request->getFiles();
            $file_name = $data['member']['image'];
            if (isset($files['image']) && $files['image']->isValid() && !$files['image']->hasMoved()) {
                $file = $files['image'];
                $newName = $file->getName();
                $file->move('./uploads/team/', $newName);
                $file_name = $newName;
                // echo "<pre/>"; print_r($file_name);
                // exit();
            }

            $update = [
                'name' => $this->request->getPost('name'),
                'designation' => $this->request->getPost('designation'),
                'department' => $this->request->getPost('department'),
                'qualification' => $this->request->getPost('qualification'),
                'image' => $file_name,
                'active' => $this->request->getPost('active')
            ];
            $this->teamModel->update($id, $update);
            return redirect()->to('team');
        }

        $data['content'] = 'team/create';
        return view('admin/layouts/main', $data);
    }

    public function delete($id) {
        $this->teamModel->delete($id);
        return redirect()->to('team');
    }

}
