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

        $data = array(
            'title' => 'Модерация',
            'sites' => $this->site->get_last_not_moderated_sites()
        );

        $this->load->view('admin/panel',$data);
    }

    public function allow($id)
    {
        $this->for_admin();
        $this->site->allow($id);
        redirect('/admin/panel');
    }

    public function delete($id)
    {
        $this->for_admin();
        $this->site->delete($id);
        redirect('/admin/panel');
    }

    public function edit($id)
    {
        $this->for_admin();

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
            'category',
            'Категория',
            'required|numeric'
        );
        $this->form_validation->set_rules(
            'description',
            'Описание',
            'encode_php_tags|required|min_length[50]|max_length[600]|trim|xss_clean'
        );

        if ($this->form_validation->run() == FALSE)
        {
            $data = array(
                'title' => 'Изменение сайта',
                'site' => $this->site->get_site($id),
                'cats' => $this->category->get_all_cats()
            );
            $this->load->view('admin/edit_site', $data);
        }
        else
        {
            $this->site->edit(
                $id,
                $this->input->post('title'),
                $this->input->post('url'),
                $this->input->post('description'),
                $this->input->post('category'));
            $data = array(
                'title' => 'Изменение сайта',
                'site' => $this->site->get_site($id)
            );
            $this->load->view('admin/edit_site_success',$data);
        }
    }
}
