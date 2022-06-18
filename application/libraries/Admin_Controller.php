<?php
class Admin_Controller extends MY_Controller
{

    function __construct ()
    {
        parent::__construct();
        $this->data['meta_title'] = 'line';
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('categories_m');
        $this->load->model('user_m');
        $this->load->model('languages_m');
        $this->load->model('movies_m');
        if ($this->session->userdata('status')!=1){
            redirect('movies');
        }
        if (!$this->session->userdata('default_language')){
            $data = array(
                'default_language' => 'EN',
            );
            $this->session->set_userdata($data);
        }

    }
    function isJSON($string){
        return is_string($string) && is_array(json_decode($string, true)) && (json_last_error() == JSON_ERROR_NONE) ? true : false;
    }
}