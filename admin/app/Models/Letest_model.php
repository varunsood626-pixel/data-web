<?php

namespace App\Models;

use CodeIgniter\Model;

class Letest_model extends Model {

    protected $table = 'letest';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'line_2', 'shorttitle', 'link', 'active','date']; // replace with your actual column names

    public function get_all($limit = 100, $offset = 0) {
        // Fetch records with a limit and offset to prevent memory exhaustion
        return $this->orderBy('id', 'DESC')->findAll($limit, $offset);
    }

    public function get($id) {
        return $this->where(['id' => $id])->first();
    }

    public function insert($row = null, bool $returnID = true) {
        if ($returnID) {
            return parent::insert($row, $returnID);
        }
        return $this->save($row);
    }

  public function update($id = null, $row = null): bool
{
    if (!is_array($row) || $id === null) {
        return false; // or throw an exception
    }
    return parent::update($id, $row); // never call $this->save() here
}

    public function delete($id = null, bool $purge = false) {
        if ($id !== null) {
            return parent::delete($id, $purge);
        }
        return false;
    }
}

