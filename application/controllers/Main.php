<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	/* Main Page Controller */

	public function index()
	{
		$this->load->model('category');
        $this->load->model('site');

		$categories = $this->category->get_all_cats();
		$header_data = array('title' => 'Главная', 'cats' => $categories,
            'amount_sites' => $this->site->amount_all_moderated());


        $data = array('sites' => $this->site->get_last_sites(10)); // Get last 10 sites for view

		$this->load->helper('html');
		$this->load->view('header', $header_data);
		$this->load->view('index', $data);
		$this->load->view('footer');
	}
}
