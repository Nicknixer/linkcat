<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Model {
    
    var $table = 'cat_sites';
    var $key_id = 'id';

    function __construct(){
        parent::__construct();
    }

    function get_all_sites(){
        $query = $this->db->get($this->table);
        return $query->result_array();
    }
    function get_all_moderated_sites(){
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    function get_all_sites_in_category($id_of_category){
    	$this->db->where('category_id',$id_of_category);
        $query = $this->db->get($this->table);
        return $query->result_array();
    }    
    function get_all_moderated_sites_in_category($id_of_category){
    	$this->db->where('category_id',$id_of_category);
    	$this->db->where('is_moderated',1);
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    function count_sites_in_category($id_of_category){
        	$this->db->where('category_id',$id_of_category);
        	$this->db->where('is_moderated',1);
        	$query = $this->db->get($this->table);
        	return $query->num_rows();
    }

    function get_site($id)
    {
    	$this->db->where('id',$id);
    	$query = $this->db->get($this->table);
        $result = $query->result_array();
        return $result[0];
    }
}