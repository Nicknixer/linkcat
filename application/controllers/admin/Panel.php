<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

    private function for_admin()
    {
        $this->load->model('admin');
        if(!$this->admin->check_admin())
        {
            redirect('/admin/login');
        }
    }
    public function index()
    {
        $this->for_admin();
        //вьюшки
        $this->load->model('site');
        $header_data = array('title' => 'Панель администратора: Последние непроверенные','new' => $this->site->not_moderated());
        $this->load->view('admin/header',$header_data);

        $data = array('sites' => $this->site->get_last_not_moderated_sites());
        $this->load->view('admin/panel',$data);
        $this->load->view('footer');
    }


}
