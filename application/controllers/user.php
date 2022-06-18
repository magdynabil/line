<?php
class User extends Frontend_Controller
{

    public function __construct ()
    {
        parent::__construct();
    }

    public function index ()
    {

    }

    public function edit ($id = NULL)
    {
        // Fetch a user or set a new one
        if ($id) {
            $this->data['user'] = $this->user_m->get($id);
            count($this->data['user']) || $this->data['errors'][] = 'User could not be found';
        }
        else {
            $this->data['user'] = $this->user_m->get_new();
        }

        // Set up the form
        $rules = $this->user_m->rules_admin;
        $id || $rules['password']['rules'] .= '|required';
        $this->form_validation->set_rules($rules);

        // Process the form
        if ($this->form_validation->run() == TRUE) {
            $data = $this->user_m->array_from_post(array('name', 'email', 'password'));

            if(!empty($data['password'])) {
                $data['password'] = $this->user_m->hash($data['password']);
            } else {
                // We don't save an empty password
                unset($data['password']);
            }

            $this->user_m->save($data, $id);
        }

        // Load the view
        $this->data['subview'] = 'user/edit';
        $this->load->view('_main_layout', $this->data);
    }

    public function delete ($id)
    {
        $this->user_m->delete($id);
        redirect('admin/user');
    }

    public function login ()
    {
        // Redirect a user if he's already logged in
        $dashboard = 'movies';
        $this->user_m->loggedin() == FALSE || redirect($dashboard);
        $this->data['loggedin'] = true;

        // Set form
        $rules = $this->user_m->rules;
        $this->form_validation->set_rules($rules);

        // Process form
        if ($this->form_validation->run() == TRUE) {
            // We can login and redirect
            if ($this->user_m->login() == TRUE) {
                redirect($dashboard);
            }
            else {
                $this->session->set_flashdata('error', 'That email/password combination does not exist');
                redirect('user/login', 'refresh');
            }
        }

        // Load view
        $this->data['subview'] = 'user/login';
        $this->load->view('_main_layout', $this->data);
    }

    public function logout ()
    {
        $this->user_m->logout();
        redirect('user/login');
    }

}