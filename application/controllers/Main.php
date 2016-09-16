<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$header_data = array('title' => 'Каталог сайтов');

		$this->load->helper('html');
		$this->load->view('header', $header_data);
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function ms($arg)
	{
		$data = array('msg' => $arg );
		$this->load->view('welcome_message',$data);
	}
}
