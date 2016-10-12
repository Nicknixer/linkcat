<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yoursite extends CI_Controller {
    public function index()
    {

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('security');

        $this->form_validation->set_rules(
            'title',
            'Название',
            'encode_php_tags|required|min_length[12]|max_length[60]|trim|xss_clean'
        );
        $this->form_validation->set_rules(
            'url',
            'Адрес',
            'required|prep_url'
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|valid_email'
        );
        $this->form_validation->set_rules(
            'category',
            'Категория',
            'required|numeric'
        );
        $this->form_validation->set_rules(
            'short_description',
            'Краткое описание',
            'encode_php_tags|required|min_length[20]|max_length[200]|trim|xss_clean'
        );
        $this->form_validation->set_rules(
            'description',
            'Описание',
            'encode_php_tags|required|min_length[50]|max_length[600]|trim|xss_clean'
        );
        $this->form_validation->set_rules(
            'keywords',
            'Ключевые слова',
            'encode_php_tags|required|min_length[5]|max_length[200]|trim|xss_clean'
        );
        $this->form_validation->set_rules(
            'agree',
            'Соглашение с правилами',
            'required'
        );

        if ($this->form_validation->run() == FALSE)
        {
            $data = array(
                'title' => 'Добавление сайта в белый каталог',
                'cat_description' => 'Добавление сайта в белый каталог сайтов. Оставьте ссылку на сайт. Введите адрес, название и описание вашего сайта.',
                'cat_keywords' => 'каталог,сайты,добавить,сайт,адрес,описание,ссылку',
                'cats' => $this->category->get_all_cats());
            $this->load->view('add_site',$data);
        }
        else
        {
            $site_id = $this->site->add(
                $this->input->post('title'),
                $this->input->post('url'),
                $this->input->post('email'),
                $this->input->post('short_description'),
                $this->input->post('description'),
                $this->input->post('keywords'),
                $this->input->post('category')
            );
            $data = array('title' => 'Успешное добавление сайта', 'site' => $this->site->get_site($site_id));
            $this->load->view('add_site_success',$data);
        }
    }
}
