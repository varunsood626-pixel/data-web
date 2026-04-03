<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Event_model;

class Event extends Controller {

    protected $eventModel;

    public function __construct() {
        $this->eventModel = new Event_model();
    }

    public function index() {
        $data['records'] = $this->eventModel->get_all();
        $data['content'] = 'event/index';
        return view('admin/layouts/main', $data);
    }

    public function create() {
        if ($this->request->getMethod() == 'post') {
            $this->eventModel->insert($this->request->getPost());
            return redirect()->to('event');
        }
        $data['content'] = 'event/create';
        return view('admin/layouts/main', $data);
    }

    public function edit($id) {
       
        $data['event'] = $this->eventModel->get($id);
        if ($this->request->getMethod() == 'POST') {
            $this->eventModel->update($id, $this->request->getPost());
            return redirect()->to('event');
        }
        $data['content'] = 'event/edit';
        return view('admin/layouts/main', $data);
    }

    public function delete($id) {
        $this->eventModel->delete($id);
        return redirect()->to('event');
    }

}
