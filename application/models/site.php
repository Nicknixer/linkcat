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
    public function is_exist($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        if($query->num_rows() == 0){
            return false;
        }
        else
        {
            return true;
        }
    }
    public function add($title,$url,$description,$category_id)
    {
        $data = array(
            'title' => $title,
            'url' => $url,
            'description' => $description,
            'category_id' => $category_id,
            'date' => date('Y-m-d'),
            'is_moderated' => 0,
            'passes' => 0
        );
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function go($id = -1)
    {
        if($this->is_exist($id))
        {
            $passes = $this->get_site($id)['passes'];
            $this->db->where('id',$id);
            $this->db->update($this->table,array('passes' => ++$passes ));

            redirect($this->get_site($id)['url']);
        }
        else
        {
            redirect('/');
        }
    }
}