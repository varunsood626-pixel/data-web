<?php

namespace App\Controllers;

use App\Models\Meta_tags_model;

class Meta_tags extends BaseController
{
    protected $metaTagsModel;

    public function __construct()
    {
        $this->metaTagsModel = new Meta_tags_model();
    }




    public function index()
    {
        $data['meta_tags'] = $this->metaTagsModel->get_all();
        $data['title'] = 'List';
        $data['content'] = 'meta_tags/list'; // path to your view
        return view('admin/layouts/main', $data);
    }



    public function create() {

        

         $data['title'] = 'create';

        $data['content'] = 'meta_tags/create'; // path to your view

    return view('admin/layouts/main', $data);

    }



    public function store() {

    $data = $this->request->getPost();



    // File upload

    $ogImage = $this->request->getFile('ogimage');
    if ($ogImage && $ogImage->isValid() && !$ogImage->hasMoved()) {
        $newName = $ogImage->getRandomName();
        $ogImage->move(FCPATH . 'uploads', $newName);
        $data['ogimage'] = $newName;
    }



    $this->metaTagsModel->insert($data);
    return redirect()->to('meta_tags');

}





    public function edit($id) {

    $data['meta_tag'] = $this->metaTagsModel->get($id);

        

             

         $data['title'] = 'edit';

        $data['content'] = 'meta_tags/edit'; // path to your view

    return view('admin/layouts/main', $data);

    }



    // public function update($id) {

    //     $data = $this->input->post();



    //     // File upload

    //     if (!empty($_FILES['ogimage']['name'])) {

    //         $config['upload_path'] = './uploads/';

    //         $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';

    //         $config['encrypt_name'] = TRUE;



    //         $this->load->library('upload', $config);

    //         if ($this->upload->do_upload('ogimage')) {

    //             $upload_data = $this->upload->data();

    //             $data['ogimage'] = $upload_data['file_name'];

    //         }

    //     }



    //     $this->metaTagsModel->update($id, $data);

    //     redirect('meta_tags');

    // }

    

    

    public function update($id)
    {
        $data = $this->request->getPost();

        $ogImage = $this->request->getFile('ogimage');
        if ($ogImage && $ogImage->isValid() && !$ogImage->hasMoved()) {
            $newName = $ogImage->getRandomName();
            $ogImage->move(FCPATH . 'uploads', $newName);
            $data['ogimage'] = $newName;
        }

        if (!empty($data)) {
            $this->metaTagsModel->update($id, $data);
        }
        // Optionally, you can set a flash message if $data is empty
        return redirect()->to('meta_tags');
    }



    public function delete($id) {

    $this->metaTagsModel->delete($id);

        redirect('meta_tags');

    }

}

