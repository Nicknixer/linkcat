<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Model {
    
    var $table = 'cat_cats';
    var $key_id = 'id';

    function __construct(){
        parent::__construct();
    }

    function get_all_cats(){
        $query = $this->db->get($this->table);
        $arr_return = $query->result_array();
        $ret = array();
        $this->load->model('site');
        foreach ($arr_return as $row) {
            $sites = $this->site->count_sites_in_category($row['id']);
        	$ret[] = array('id' => $row['id'], 'name' => $row['name'], 'count' => $sites);

        }
        return $ret;

    }
    function get_name_of_category($id)
    {
    	$this->db->where('id',$id);
    	$query = $this->db->get($this->table);
        $result = $query->result_array();
        return $result[0]['name'];
    }
}