<?php

class languages extends Frontend_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        // Fetch all users
        $this->data['languages'] = $this->languages_m->get();

        // Load view
        $this->data['subview'] = 'templates/set_languages';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function set_language()
    {
        $default_language=$this->uri->segment(3);
        $data = array(
            'default_language' => $default_language,
        );
        $this->session->set_userdata($data);
        redirect('movies');
    }


}