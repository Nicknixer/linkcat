<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	/* Main Page Controller */

	public function index()
	{
        $data = array(
            'title' => 'Главная',
            'sites' => $this->site->get_last_sites(5)); // Get last 10 sites for view
		$this->load->view('index', $data);
	}
    public function reklama()
    {
        $data = array('title' => 'Реклама в каталоге');
        $this->load->view('adv', $data);
    }
    public function feedback()
    {
        $data = array('title' => 'Обратная связь');
        $this->load->view('feedback', $data);
    }
    public function pravila()
    {
        $data = array('title' => 'Правила белого каталога');
        $this->load->view('rules', $data);
    }
}
