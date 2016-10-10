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

		$data = array('title' => 'Категории - '.$this->category->get_name_of_category($id_of_category),
            'sites' => $this->site->get_all_moderated_sites_in_category($id_of_category),
            'is_admin' => $this->session->userdata('admin'));

		$this->load->view('show_category',$data);
	}

	public function go($id_of_site)
    {
        $this->site->go($id_of_site);
    }
}

