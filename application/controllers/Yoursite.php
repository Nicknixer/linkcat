<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yoursite extends CI_Controller {
    public function index()
    {




        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');

        $header_data = array('title' => 'Добавление сайта', 'cats' => $this->category->get_all_cats());
        $this->load->view('header', $header_data);

        $this->form_validation->set_rules('title', 'Название', 'encode_php_tags|required|min_length[12]|max_length[60]|trim|xss_clean');
        $this->form_validation->set_rules('url', 'Адрес', 'required|prep_url');
        $this->form_validation->set_rules('category', 'Категория', 'required|numeric');
        $this->form_validation->set_rules('description', 'Описание', 'encode_php_tags|required|min_length[50]|max_length[600]|trim|xss_clean');
        $this->form_validation->set_rules('agree', 'Соглашение с правилами', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('add_site');
        }
        else
        {
            $this->load->model('site');
            $site_id = $this->site->add(
                $this->input->post('title'),
                $this->input->post('url'),
                $this->input->post('description'),
                $this->input->post('category'));
            $this->load->view('add_site_success',$this->site->get_site($site_id));
        }





        $this->load->view('footer');
    }

}