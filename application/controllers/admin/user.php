<?php

class User extends Frontend_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $user = array(
            'status' => 0
        );
        // Fetch all users
        $this->data['user'] = $this->user_m->get_by($user);

        // Load view
        $this->data['subview'] = 'admin/user/index';
        $this->load->view('admin/_layout_main', $this->data);
    }
    public function show_admin()
    {
        $user = array(
            'status' => 1
        );
        // Fetch all users
        $this->data['user'] = $this->user_m->get_by($user);

        // Load view
        $this->data['subview'] = 'admin/user/show_admin';
        $this->load->view('admin/_layout_main', $this->data);
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
    public function set_user($id = NULL)
    {
        $new_admin = array(
            'status' => 0
        );
        $this->user_m->save($new_admin, $id);
        redirect('admin/user');
    }
    public function set_admin($id = NULL)
    {
        $new_admin = array(
            'status' => 1
        );
        $this->user_m->save($new_admin, $id);
        redirect('admin/user');
    }

    public function delete($id)
    {
        $this->user_m->delete($id);
        redirect('admin/user');
    }


}