<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\Dbs;

use Config\Database;

class Dashboard extends Controller {

    protected $dbs;

    protected $db;

    public function __construct() {
        helper('identical');
        $this->dbs = new Dbs();
        $this->db = \Config\Database::connect();
        // Temporarily disable login check for testing
        // checkLogin();
    }

    public function index() {
       return redirect()->to('dashboard/homepage');
    }

    public function homepage(){
        $builder = $this->db->table('pages');
        $builder->orderBy('section_number', 'ASC');
        $builder->orderBy('type', 'ASC');
        $builder->orderBy('id', 'ASC');
        $data['pages'] = $builder->getWhere(['page' => 'HomePage'])->getResultArray();
        $data['title'] = 'Home';
        $data['content'] = 'admin/homepage';
        return view('admin/layouts/main', $data);
    }

    public function solutions_screening(){
        $data['pages']=$this->dbs->getpageData('solutions-screening');
        $data['title'] = 'Solutions Screening';
        $data['content'] = 'admin/solutions_screening';
        return view('admin/layouts/main', $data);
    }

    public function trucheck(){
        $data['pages']=$this->dbs->getpageData('trucheck');
        $data['title'] = 'trucheck';
        $data['content'] = 'admin/trucheck';
        return view('admin/layouts/main', $data);
    }

    public function trublood(){
        $data['pages']=$this->dbs->getpageData('trublood');
        $data['title'] = 'trublood';
        $data['content'] = 'admin/trublood';
        return view('admin/layouts/main', $data);
    }

    public function exacta(){
        $data['pages']=$this->dbs->getpageData('Excta');
        $data['title'] = 'Exacta';
        $data['content'] = 'admin/exacta';
        return view('admin/layouts/main', $data);
    }

    public function CellDx(){
        $data['pages']=$this->dbs->getpageData('CellDx');
        $data['title'] = 'CellDx';
        $data['content'] = 'admin/CellDx';
        return view('admin/layouts/main', $data);
    }

    public function Chemo(){
        $data['pages']=$this->dbs->getpageData('Chemo');
        $data['title'] = 'Chemo';
        $data['content'] = 'admin/Chemo';
        return view('admin/layouts/main', $data);
    }

    public function Cancertrack(){
        $data['pages']=$this->dbs->getpageData('Cancertrack');
        $data['title'] = 'Cancertrack';
        $data['content'] = 'admin/Cancertrack';
        return view('admin/layouts/main', $data);
    }

    public function Pinaka(){
        $data['pages']=$this->dbs->getpageData('Pinaka');
        $data['title'] = 'Pinaka';
        $data['content'] = 'admin/Pinaka';
        return view('admin/layouts/main', $data);
    }

    public function Targetmrd(){
        $data['pages']=$this->dbs->getpageData('target-mrd');
        $data['title'] = 'target-mrd';
        $data['content'] = 'admin/target-mrd';
        return view('admin/layouts/main', $data);
    }

    public function contact_us(){
        $data['pages']=$this->dbs->fetch('pages',array('page'=>'contact'));
        $data['title'] = 'contact';
        $data['content'] = 'admin/contact';
        return view('admin/layouts/main', $data);
    }

    public function whoweare(){
        $data['pages']=$this->dbs->getpageData('whoweare');
        $data['title'] = 'whoweare';
        $data['content'] = 'admin/whoweare';
        return view('admin/layouts/main', $data);
    }

    public function contact_us_enquiry(){
        $data['contact_us']=$this->dbs->fetch_all_by_desc('contact_us');
        $data['title'] = 'enquiry';
        $data['content'] = 'admin/contact_us_enquiry';
        return view('admin/layouts/main', $data);
    }

    public function policy_terms(){
         $data['pages']=$this->dbs->fetch('pages',array('page'=>'policy'));
        $data['title'] = 'policy-terms';
        $data['content'] = 'admin/policy_terms';
        return view('admin/layouts/main', $data);
    }

    public function DataProtection(){
         $data['pages']=$this->dbs->fetch('pages',array('page'=>'DataProtection'));
        $data['title'] = 'Data Protection';
        $data['content'] = 'admin/DataProtection';
        return view('admin/layouts/main', $data);
    }

    public function cookiespolicy(){
         $data['pages']=$this->dbs->fetch('pages',array('page'=>'cookiespolicy'));
        $data['title'] = 'Cookies Policy';
        $data['content'] = 'admin/cookiespolicy';
        return view('admin/layouts/main', $data);
    }

    public function privacypolicy(){
         $data['pages']=$this->dbs->fetch('pages',array('page'=>'privacypolicy'));
        $data['title'] = 'Privacy Policy';
        $data['content'] = 'admin/privacypolicy';
        return view('admin/layouts/main', $data);
    }

    public function footerform(){
        $data['contact_us']=$this->dbs->fetch_all_by_desc('contacts');
        $data['title'] = 'enquiry';
        $data['content'] = 'admin/footerform';
        return view('admin/layouts/main', $data);
    }

    public function latest_cancer_advancements(){
        $data['letests']=$this->dbs->fetch('letest',array('active'=>'1'));
        $data['title'] = 'latest-cancer-advancements.';
        $data['content'] = 'admin/latest-cancer-advancements';
        return view('admin/layouts/main', $data);
    }

    public function latest_add(){
        $data['letests']=$this->dbs->fetch('letest',array('active'=>'1'));
        $data['title'] = 'latest-cancer-advancements-create';
        $data['content'] = 'admin/latest_add';
        return view('admin/layouts/main', $data);
    }

    public function update_page($page){
        $id = 1;
        $postData = [];
    
        if (!empty($_FILES['pagefile']['name'])) {
    
            $original_name = $_FILES['pagefile']['name'];
            $original_name = str_replace(' ', '_', $original_name);
            $original_name = preg_replace('/[^A-Za-z0-9_\-\.]/', '', $original_name);
    
            $config['upload_path']   = './web-img';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
            $config['file_name']     = $original_name;
    
            // In CI4, use the upload service
            $upload = \Config\Services::upload($config);
    
            if (!$upload->do_upload('pagefile')) {
                $error = array('error' => $upload->display_errors(), 'user_id' => $id);
                print_r($error); 
            } else {
                $upload_data = $upload->data();
                $postData['content'] = $upload_data['file_name'];
            }
        } else {
            $postData['content'] = $_POST['content'];
        }

        $this->dbs->edit('pages', 'id =' . $_POST['id'], $postData);
        return redirect()->to(base_url('dashboard/' . $page));
    }

}