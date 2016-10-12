<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sites extends CI_Controller {

    public function show($id_of_site)
    {
        $info_of_site = $this->site->get_site($id_of_site);
        $data = array(
            'title' => 'Сайт - '.$info_of_site['title'],
            'cat_description' => $info_of_site['short_description'],
            'cat_keywords' => $info_of_site['keywords'],
            'site' => $info_of_site
        );

        $this->load->view('show_site',$data);
    }

}

