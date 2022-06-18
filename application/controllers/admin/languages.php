<?php

class languages extends Admin_Controller
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
        $this->data['subview'] = 'admin/languages/index';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function edit ($id = NULL)
    {
        // Fetch a user or set a new one
        if ($id) {
            $this->data['languages'] = $this->languages_m->get($id);
            count($this->data['languages']) || $this->data['errors'][] = 'User could not be found';
        }
        else {
            $this->data['languages'] = $this->languages_m->get_new();
        }

        // Set up the form
        $rules = $this->languages_m->rules;
        $this->form_validation->set_rules($rules);

        // Process the form
        if ($this->form_validation->run() == TRUE) {
            $data = $this->languages_m->array_from_post(array('name', 'language_shortcut'));
            $data['created_by']=$this->session->userdata('id');
            $this->languages_m->save($data, $id);
        }

        // Load the view
        $this->data['subview'] = 'admin/languages/edit';
        $this->load->view('admin/_layout_modal', $this->data);
    }
    public function delete($id)
    {
        $this->languages_m->delete($id);
        redirect('admin/languages');
    }
    public function _unique_language_shortcut($str)
    {


        $id = $this->uri->segment(4);
        $this->db->where('language_shortcut', $this->input->post('language_shortcut'));
        !$id || $this->db->where('id !=', $id);
        $languages = $this->languages_m->get();

        if (count($languages)) {
            $this->form_validation->set_message('_unique_language_shortcut', '%s should be unique');
            return FALSE;
        }

        return TRUE;
    }

}