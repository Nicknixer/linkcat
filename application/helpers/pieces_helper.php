<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('get_header'))
{
    function get_header()
    {
        $CI =& get_instance();
        $CI->load->view('header');
    }
}

if ( ! function_exists('get_sidebar'))
{
    function get_sidebar()
    {
        $CI =& get_instance();
        $data = array('cats' => $CI->category->get_all_cats());
        $CI->load->view('left-side-bar',$data);
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

