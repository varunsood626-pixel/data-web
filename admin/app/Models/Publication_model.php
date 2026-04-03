<?php

namespace App\Models;

use CodeIgniter\Model;

class Publication_model extends Model {

    protected $table = 'publications';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['title', 'description', 'link', 'category', 'active', 'publishon'];
    
    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    public function get_all() {
        return $this->orderBy('id', 'DESC')->findAll();
    }

    public function get($id) {
        return $this->find($id);
    }
}

