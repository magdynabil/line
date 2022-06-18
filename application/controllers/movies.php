<?php
class movies extends Frontend_Controller
{
    public function __construct()
    {
        parent::__construct();


    }
      public  function index()
        {
            $lang= $this->session->userdata('default_language');
            $page=$this->uri->segment(3);
            $this->load->library('pagination');
            $config['base_url'] = 'http://localhost/line/public_html/movies/index';
            $config['total_rows'] = count($this->movies_m->get());
            $config['per_page'] = 4;
            $this->pagination->initialize($config);
            $this->data['subview'] = 'templates/homepage';
            $this->data['categories'] = $this->categories_m->get_no_parents($lang);

            $this->data['movies'] = $this->movies_m->get_all_movies_details($page,$lang);
            $this->load->view('_main_layout', $this->data);

        }
    public  function main_category_show()
    {
        $lang= $this->session->userdata('default_language');
        $id=$this->uri->segment(3);
        $this->data['subview'] = 'templates/main_category_show';
        $this->data['categories'] = $this->categories_m->get_chiled_categories($id,$lang);
        $this->data['category'] = $this->categories_m->get_category_by_id($id,$lang);
        $this->data['movies'] = $this->movies_m->get_all_main_category_movies($id,$lang);
        $this->load->view('_main_layout', $this->data);
    }
    public  function sub_category_show()
    {
        $lang= $this->session->userdata('default_language');
        $id=$this->uri->segment(3);
        $this->data['subview'] = 'templates/sub_category_show';
        $this->data['categories'] = $this->categories_m->get_no_parents($lang);
        $this->data['category'] = $this->categories_m->get_category_by_id($id,$lang);
        $this->data['movies'] = $this->movies_m->get_all_sub_category_movies($id,$lang);
        $this->load->view('_main_layout', $this->data);
    }
    public  function movies_show()
    {
        $id=$this->uri->segment(3);
        $lang= $this->session->userdata('default_language');
        $this->data['movies'] = $this->movies_m->get_all_movies_details_by_id($id,$lang);
        $this->data['categories'] = $this->categories_m->get_no_parents($lang);
        $this->data['comments'] = $this->comments_m->get_movies_comment($id);
        $this->data['subview'] = 'templates/movies_show';
        $this->load->view('_main_layout', $this->data);
        if (isset($_POST['movies_id'])){

            $rules = $this->comments_m->rules;
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