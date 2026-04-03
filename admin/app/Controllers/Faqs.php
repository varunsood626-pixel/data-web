<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\Faq_model;

class Faqs extends Controller {

    protected $faqModel;

    public function __construct() {
        $this->faqModel = new Faq_model();
    }

    public function index() {
        $data['faqs'] = $this->faqModel->get_all();
        $data['content'] = 'faqs/list';
        return view('admin/layouts/main', $data);
    }

    public function create() {
        if ($this->request->getMethod() == 'POST') {
            $this->faqModel->insert($this->request->getPost());
            return redirect()->to('faqs');
        }

        $data['content'] = 'faqs/create';
        return view('admin/layouts/main', $data);
    }

    public function edit($id) {
      
        $data['faq'] = $this->faqModel->get($id);
        if ($this->request->getMethod() == 'POST') {
            $this->faqModel->update($id, $this->request->getPost());
            return redirect()->to('faqs');
        }

        $data['content'] = 'faqs/edit';
        return view('admin/layouts/main', $data);
    }

    public function delete($id) {
        $this->faqModel->delete($id);
        return redirect()->to('faqs');
    }

}
