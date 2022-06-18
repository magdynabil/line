<?php
class comments extends Frontend_Controller
{
    public function __construct()
    {
        parent::__construct();


    }

    public function get_movies_comment()
    {
        $this->data['subview'] = 'templates/movies_show';
        $this->load->view('_main_layout', $this->data);
        if (isset($_POST['movies_id'])){

            $rules = $this->comments_m->rules;
            dump($rules);
            $this->form_validation->set_rules($rules);

            // Process the form
            if ($this->form_validation->run() == TRUE) {

                $data = $this->comments_m->array_from_post(array(
                    'comment',
                    'movies_id'
                ));
                $data['created_by']=$this->session->userdata('id');
                $this->comments_m->save($data);
            }

        }
        }
}