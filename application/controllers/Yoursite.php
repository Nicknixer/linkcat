<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yoursite extends CI_Controller {
    public function index()
    {

        $header_data = array('title' => 'Добавление сайта', 'cats' => $this->category->get_all_cats());
        $data = array();

        $this->load->helper('form');
        $this->load->view('header', $header_data);
        $this->load->view('add_site',$data);
        $this->load->view('footer');
    }

}