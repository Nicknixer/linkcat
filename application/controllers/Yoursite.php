<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yoursite extends CI_Controller {

    public function index()
    {

        $this->load->helper(array('form', 'url', 'security', 'captcha'));
        $this->load->library('form_validation');


        ///////////////// Rules of validation
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
        $this->form_validation->set_rules(
            'captcha',
            'Символы с картинки',
            'required|callback_captcha_check'
        );
        $this->form_validation->set_message('captcha_check', 'Неправильно введены символы с картинки');
        ///////////////// END Rules of validation

        if ($this->form_validation->run() == FALSE)
        {
            $data = array(
                'title' => 'Добавление сайта в белый каталог',
                'cat_description' => 'Добавление сайта в белый каталог сайтов. Оставьте ссылку на сайт. Введите адрес, название и описание вашего сайта.',
                'cat_keywords' => 'каталог,сайты,добавить,сайт,адрес,описание,ссылку',
                'cats' => $this->category->get_all_cats(),
                'captcha' => $this->gen_captcha() //generate captcha img-tag
            );
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

    public function captcha_check($str)
    {
        if ($str != $this->session->userdata('captcha'))
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
    private function gen_captcha()
    {
        $rand_for_captcha = rand(1000, 9999); // создаем произвольную строку из семи цифр
        $data = array(
            'captcha' => $rand_for_captcha
        );
        $this->session->set_userdata($data);

        $data_for_captcha = array(
            'word' => $rand_for_captcha, // фраза, которая будет показана на капче
            'img_path' => './img/captcha/', // папка, куда будет сохраняться капча
            'img_url' => base_url().'img/captcha/', // ссылка к картинке с капчей
            'img_width' => 180, // ширина капчи
            'img_height' => 50, // высота капчи
            'expiration' => 10 // время хранения картинки капчи в папке
        );

        $cap = create_captcha($data_for_captcha); // вызываем функцию создания капчи
        return $cap['image'];
    }
}
