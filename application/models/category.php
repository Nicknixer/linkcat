<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Model {
    
    var $table = 'cat_cats';
    var $key_id = 'id';

    function __construct(){
        parent::__construct();
    }

    function get_all_cats(){
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
}