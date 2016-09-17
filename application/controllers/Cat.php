<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cat extends CI_Controller {
	public function index()
	{
		redirect('/');
	}
	public function show($id_of_category)
	{
		if($id_of_category < 1) 
		{
			redirect('/');
		}
		$this->load->model('category');
		$this->load->model('site');
		$categories = $this->category->get_all_cats();
		$current_category = 0;
		$header_data = array('title' => 'Категория: '.$this->category->get_name_of_category($id_of_category), 'cats' => $categories);

		$data = array('sites' => $this->site->get_all_moderated_sites_in_category($id_of_category));
		$this->load->helper('html');
		$this->load->view('header', $header_data);
		$this->load->view('show_category',$data);
		$this->load->view('footer');
	}
}
