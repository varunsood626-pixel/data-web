<?php

namespace App\Controllers;

use App\Models\TestPortfolioModel;
use App\Models\Dbs;

class Testportfolio extends BaseController
{
    protected $testPortfolioModel;
    protected $dbsModel;

    public function __construct()
    {
        $this->testPortfolioModel = new TestPortfolioModel();
        $this->dbsModel = new Dbs();
    }

    public function index()
    {
        $data['records'] = $this->testPortfolioModel->getAllOrderedByDesc();
        $pages = $this->dbsModel->fetch('pages', array('page' => 'Testportfolio'));
        $data['pages'] = !empty($pages) ? $pages[0] : null;
        $data['content'] = 'test_portfolio/list'; // path to your view
        
        return view('admin/layouts/main', $data);
    }

    public function create()
    {
        if ($this->request->getMethod() === 'POST') {
            $this->testPortfolioModel->insert($this->request->getPost());
            return redirect()->to('testportfolio');
        }
        
        $data['content'] = 'test_portfolio/form'; // path to your view
        return view('admin/layouts/main', $data);
    }

    public function edit($id)
    {
        $data['record'] = $this->testPortfolioModel->find($id);
        
        if ($this->request->getMethod() === 'POST') {
            $this->testPortfolioModel->update($id, $this->request->getPost());
            return redirect()->to('testportfolio');
        }

        $data['content'] = 'test_portfolio/form'; // path to your view
        return view('admin/layouts/main', $data);
    }

    public function delete($id)
    {
        $this->testPortfolioModel->delete($id);
        return redirect()->to('testportfolio');
    }
}
