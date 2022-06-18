<?php
class Frontend_Controller extends MY_Controller
{

    function __construct ()
    {
        parent::__construct();
        $this->data['meta_title'] = 'line';
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->model('categories_m');
        $this->load->model('comments_m');
        $this->load->model('user_m');
        $this->load->model('languages_m');
        $this->load->model('movies_m');
        if (!$this->session->userdata('default_language')){
            $data = array(
                'default_language' => 'EN',
            );
            $this->session->set_userdata($data);
        }

    }
}