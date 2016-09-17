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
		$categories = $this->category->get_all_cats();
		$current_category = 0;
		$header_data = array('title' => 'Категогория: '.$this->category->get_name_of_category($id_of_category), 'cats' => $categories);

		$this->load->helper('html');
		$this->load->view('header', $header_data);
		$this->load->view('index');
		$this->load->view('footer');
	}
}
