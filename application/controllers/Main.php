<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	/* Main Page Controller */

	public function index()
	{
		$this->load->model('category');
		$categories = $this->category->get_all_cats();
		$header_data = array('title' => 'Каталог сайтов', 'cats' => $categories);


		$this->load->helper('html');
		$this->load->view('header', $header_data);
		$this->load->view('index');
		$this->load->view('footer');
	}
}
