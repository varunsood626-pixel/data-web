<?php

namespace App\Models;

use CodeIgniter\Model;

class Meta_tags_model extends Model
{
    protected $table = 'metatag';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'title', 'description', 'keywords', 'ogtitle', 'ogdescription', 'ogimage', 'page'
    ]; // Update with your actual fields

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    public function get_all()
    {
        return $this->orderBy('id', 'DESC')->findAll();
    }

    public function get($id)
    {
        return $this->find($id);
    }
}

