<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model {

    var $table = 'config';
    var $key_id = 'param';

    function __construct(){
        parent::__construct();
    }

    function get_admin_login()
    {
        $this->db->where($this->key_id,'admin_login');
        $query = $this->db->get($this->table);
        $tmp = $query->result_array()[0];
        $login = $tmp['value'];
        return $login;
    }
    function get_admin_password()
    {
        $this->db->where($this->key_id,'admin_password');
        $query = $this->db->get($this->table);
        $tmp = $query->result_array()[0];
        $password = $tmp['value'];
        return $password;
    }

    function is_admin($login,$password){

        if($login == $this->get_admin_login() && $password == $this->get_admin_password())
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function login_admin($login,$password)
    {
        if($this->is_admin($login,$password))
        {
            $data = array('is_admin' => true,
                            'hash' => $this->get_hash());
            $this->session->set_userdata($data);
            return true;

        }
        else
        {
            return false;
        }
    }
    function get_hash()
    {
        // hash = password + IP + add word
        return md5($this->get_admin_password() . $_SERVER['REMOTE_ADDR'] . 'shol');
    }
    function check_admin()
    {
        if($this->session->userdata('hash') == $this->get_hash() && $this->session->userdata('is_admin') == true)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function get_usr()
    {
        echo $this->session->userdata('hash');
    }
    function logout()
    {
        $data = array('is_admin' => '',
            'hash' => '');
        $this->session->set_userdata($data);// delete session data

        redirect('admin/login');
    }
}