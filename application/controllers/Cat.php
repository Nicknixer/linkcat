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
        $name_of_category = $this->category->get_name_of_category($id_of_category);
		$data = array(
		    'title' => 'Категории - '.$name_of_category,
            'cat_description' => "Сайты из категории ".$name_of_category."в белом каталоге сайтов. Добавить сайт в категорию.",
            'sites' => $this->site->get_all_moderated_sites_in_category($id_of_category));

		$this->load->view('show_category',$data);
	}

	public function go($id_of_site)
    {
        $this->site->go($id_of_site);
    }
}

