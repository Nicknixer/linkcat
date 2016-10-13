<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('get_header'))
{
    function get_header($admin_side_bar = false)
    {
        $CI =& get_instance();
        $data = array('show_admin_side_bar' => $admin_side_bar);
        $CI->load->view('header',$data);
    }
}

if ( ! function_exists('get_sidebar'))
{
    function get_sidebar()
    {
        $CI =& get_instance();
        $data = array(
            'cats' => $CI->category->get_all_cats(),
            'last_site' => $CI->site->get_last_site()
        );
        $CI->load->view('left-side-bar',$data);
    }
}

if ( ! function_exists('get_admin_sidebar'))
{
    function get_admin_sidebar()
    {
        $CI =& get_instance();

        $categories = $CI->category->get_all_cats();
        $data = array('new' => $CI->site->not_moderated(),
            'cats' => $categories);
        $CI->load->view('admin/admin-left-side-bar',$data);
    }
}

if ( ! function_exists('get_footer'))
{
    function get_footer()
    {
        $CI =& get_instance();
        $CI->load->view('footer');
    }
}
