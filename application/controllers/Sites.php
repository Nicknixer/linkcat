<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sites extends CI_Controller {

    public function show($id_of_site)
    {
        $data = array(
            'title' => 'Сайт - '.$this->site->get_title_of_site($id_of_site),
            'site' => $this->site->get_site($id_of_site)
        );

        $this->load->view('show_site',$data);
    }

}

