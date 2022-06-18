<?php

class movies extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();


    }

    public function index()
    {
        $lang= $this->session->userdata('default_language');
        $this->data['movies'] = $this->movies_m->get_with_language($lang);
        $this->data['subview'] = 'admin/movies/index';
        $this->load->view('admin/_layout_main', $this->data);

    }

    public function edit($id = null)
    {
        $this->data['upload_error'] = '';
        if ($id) {
            $this->data['movies'] = $this->extract_fields_into_languages_by_id($id, array('name', 'description', 'category'));
            $this->data['upload'] = $this->movies_m->extract_upload_files_by_id($id,array('poster', 'trailer', 'film'));
            count($this->data['movies']) || $this->data['error'] = 'page is couldn`t be found';
        } else {
            $this->data['movies'] = $this->extract_fields_into_languages(array('name', 'description', 'category'));
            $this->data['upload'] = $this->movies_m->extract_upload_files(array('poster', 'trailer', 'film'));
        }
        $this->data['categories_no_parant'] = $this->categories_m->movies_parent();

        $this->data['languages'] = $this->languages_m->languages();

        $rules = $this->movies_m->_rules;
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == TRUE) {
            $data = $this->group_fields_by_languages(array('name', 'description'));
            $data['category'] = $this->input->post('category');
            $data['created_by'] =$this->session->userdata('id');
            if ($this->upload('poster'))
            {
                $data['poster'] = $this->upload('poster');
                if ($this->upload('film'))
                {
                    $data['film'] = $this->upload('film');
                    if ( $this->upload('trailer'))
                    {
                        $data['trailer'] = $this->upload('trailer');
                        $this->movies_m->save($data, $id);
                        redirect('admin/movies');
                    }
                }
            }

        }
        $this->data['subview'] = 'admin/movies/edit';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function delete($id)
    {
        $this->movies_m->delete($id);
        redirect('admin/movies');
    }

    //تججميع الحقول في حقل واحد للادخال في الداتابيز
    function group_fields_by_languages($fields)
    {
        $languages = $this->data['languages'] = $this->languages_m->languages();
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = '{';
            foreach ($languages as $language) {
                $data[$field] .= '"' . $language . '":';
                $data[$field] .= ' "' . $this->input->post($field . $language) . '" , ';
            }
            $data[$field] = rtrim($data[$field], ", ");;

            $data[$field] .= '}';
        }
        return $data;

    }

//ايجاد قيمة الحقول بجميع اللغات للعرض في صفحة التعديل
    function extract_fields_into_languages_by_id($id, $fields)
    {
        $this->db->select($fields);
        $movies = $this->movies_m->get($id);
        $languages = $this->data['languages'] = $this->languages_m->languages();
        $field_data = array();
        foreach ($fields as $field) {

            foreach ($languages as $language) {
                $fi = $movies->$field;
                if ($this->isJSON($fi)) {
                    $jason = json_decode($fi);
                    if (isset($jason->$language)) {
                        $field_data[$field . $language] = $jason->$language;
                    } else {
                        $field_data[$field . $language] = '';
                    }
                } else {
                    $field_data[$field] = $fi;
                }
            }
        }
        return $field_data;
    }


//ضع قيم فارغة للحقول لجميع اللغات عند اضافة تصنيف جديد
    function extract_fields_into_languages($fields)
    {
        $languages = $this->data['languages'] = $this->languages_m->languages();
        foreach ($fields as $field) {

            foreach ($languages as $language) {
                $field_data[$field . $language] = '';
            }
        }
    }

//upload file
    function upload($faild)
    {
        $config['upload_path'] = 'C:\xampp5.6\htdocs\line\public_html\images\movies/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '80000';
        $poster_name = 'poster' . $this->input->post('nameEN') . $this->session->userdata('id');
        $config['file_name'] = $poster_name;
        $config['remove_spaces'] = true;
        $config['encrypt_name'] = true;
        $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number appended
        $this->load->library('upload', $config);
        if ($this->upload->do_upload($faild))
        {
            $upload_data = $this->upload->data();
            $title = $this->input->post($faild.'_title');
            $alt = $this->input->post($faild.'_alt');
            $full_path = 'images/movies/'.$upload_data['file_name'];
            $upload = '{"title":"' . $title . '" , "alt":" ' . $alt . '" , "path": "' . $full_path . '"}';
            return $upload;

        }
        else
        {
            $this->data['upload_error'] = $faild . $this->upload->display_errors();
            return false;
        }

    }




}


?>