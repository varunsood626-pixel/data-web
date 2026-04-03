<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meta extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Meta_model');
    }

    public function index() {
        $data['meta_tags'] = $this->Meta_model->get_all();
        $this->load->view('meta/index', $data);
    }

    public function create() {
        if ($this->input->post()) {
            $this->Meta_model->insert($this->input->post());
            redirect('meta');
        }
        $this->load->view('meta/create');
    }

    public function edit($id) {
        $data['meta'] = $this->Meta_model->get($id);
        if ($this->input->post()) {
            $this->Meta_model->update($id, $this->input->post());
            redirect('meta');
        }
        $this->load->view('meta/edit', $data);
    }

    public function delete($id) {
        $this->Meta_model->delete($id);
        redirect('meta');
    }
}
