<?php

namespace App\Models;

use CodeIgniter\Model;

class Faq_model extends Model {

    protected $table = 'faqs';

    protected $primaryKey = 'id';

    protected $allowedFields = ['title', 'description', 'category', 'active'];

    public function get_all() {

        return $this->findAll();

    }

    public function get($id) {

        return $this->find($id);

    }

    public function insert($row = null, bool $returnID = true) {

        return parent::insert($row, $returnID);

    }

    public function update($id = null, $row = null): bool {
        return parent::update($id, $row);
    }

    public function delete($id = null, bool $purge = false) {
        return parent::delete($id, $purge);
    }

}
