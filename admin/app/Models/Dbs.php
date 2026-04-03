<?php

namespace App\Models;

use CodeIgniter\Model;

class Dbs extends Model {

    protected $db;
    
    public function __construct() {
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    public function add($tb,$values)
    {
        $builder = $this->db->table($tb);
        $builder->insert($values);
        return $this->db->insertID();
    } 

    public function fetch($tb,$where)
    {
        $builder = $this->db->table($tb);
        $builder->select('*');
        $builder->where($where);
        $query = $builder->get();
        return $query->getResultArray();
    } 
    
    public function fetch_all_by_desc($tb)
    {
        $builder = $this->db->table($tb);
        $builder->orderBy('id', 'DESC');
        return $builder->get()->getResultArray();
    }

    public function fetch_all($tb)
    {
        $builder = $this->db->table($tb);
        return $builder->get()->getResultArray();
    }

    public function add1($tb,$values)
    {
        $builder = $this->db->table($tb);
        return $builder->insert($values);
    }

    public function delete($id = null, bool $purge = false) {
        $builder = $this->db->table('your_table_name'); // Replace 'your_table_name' with the actual table name
        return $builder->delete(['id' => $id]);
    }   

    public function edit($tb2,$where2,$set)
    {
        $builder = $this->db->table($tb2);
        return $builder->update($set, $where2);
    }  

    public function insert($row = null, bool $returnID = true) {
        $builder = $this->db->table('multiple_image');
        $builder->insertBatch($row);
        return $returnID ? $this->db->insertID() : true;
    }    

    public function insert1($data = array()){
        $builder = $this->db->table('multiple_image2');
        $builder->insertBatch($data);
        return $this->db->insertID() ? true : false;
    }   

    public function insert_document($data = array()){
        $builder = $this->db->table('multiple_document');
        $builder->insertBatch($data);
        return $this->db->insertID() ? true : false;
    }

    public function insert_second($data = array()){
        $builder = $this->db->table('multiple_image3');
        $builder->insertBatch($data);
        return $this->db->insertID() ? true : false;
    }    

    public function uploadData($video_info)
    {
        $builder = $this->db->table('video');
        return $builder->insert($video_info);
    }

    public function uploadData1($tb,$values)
    {
        $builder = $this->db->table($tb);
        return $builder->insert($values);
    }
    
    public function getpageData($values="")
    {
        $builder = $this->db->table('pages');
        $builder->orderBy('section_number', 'ASC');
        $builder->orderBy('type', 'ASC');
        $builder->orderBy('id', 'ASC');
        return $builder->getWhere(['page' => $values])->getResultArray();
    }

}