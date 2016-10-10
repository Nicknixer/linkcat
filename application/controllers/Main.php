<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	/* Main Page Controller */

	public function index()
	{
        $data = array('title' => 'Главная','sites' => $this->site->get_last_sites(10)); // Get last 10 sites for view
		$this->load->view('index', $data);
	}
}
