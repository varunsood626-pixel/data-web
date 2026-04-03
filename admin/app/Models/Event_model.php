<?php

namespace App\Models;

use CodeIgniter\Model;

class Event_model extends Model {

    protected $table = 'event';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'shorttitle', 'link', 'active'];
    
    public function get_all() {
        return $this->orderBy('id', 'DESC')->findAll();
    }

    public function get($id) {
        return $this->find($id);
    }

    public function insert($row = null, bool $returnID = true) {
        $data = [
            'title' => $row['title'],
            'shorttitle' => $row['shorttitle'],
            'link' => $row['link'],
            'active' => $row['active']
        ];

        return parent::insert($data, $returnID);
    }

    public function update($id = null, $row = null): bool {
        $data = [
            'title' => $row['title'],
            'shorttitle' => $row['shorttitle'],
            'link' => $row['link'],
            'active' => $row['active']
        ];

        return parent::update($id, $data);
    }

    public function delete($id = null, bool $purge = false) {
        return parent::delete($id, $purge);
    }

}
