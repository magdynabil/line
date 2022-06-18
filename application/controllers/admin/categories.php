<?php

class categories extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();


    }

    public function index()
    {
        $lang= $this->session->userdata('default_language');
        $this->data['categories'] = $this->categories_m->get_with_language($lang);
        $this->data['subview'] = 'admin/categories/index';
        $this->load->view('admin/_layout_main', $this->data);

    }

    public function edit($id = null)
    {
        $lang= $this->session->userdata('default_language');
        if ($id) {
            $this->data['categories'] = $this->extract_fields_into_languages_by_id($id, array('name', 'description', 'parent_category'));
            count($this->data['categories']) || $this->data['error'] = 'page is couldn`t be found';
        } else {
            $this->data['categories'] = $this->extract_fields_into_languages(array('name', 'description', 'parent_category'));
        }

        $this->data['languages'] = $this->languages_m->languages();
        $this->data['categories_no_parant'] = $this->categories_m->get_no_parents($lang);

        $rules = $this->categories_m->_rules;
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == TRUE) {
            $data = $this->group_fields_by_languages(array('name', 'description'));
            $data['parent_category'] = $this->input->post('parent_category');
            $data['created_by'] = $this->session->userdata('id');
            $this->categories_m->save($data, $id);
            redirect('admin/categories');
        }
        $this->data['subview'] = 'admin/categories/edit';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function delete($id)
    {
        $this->categories_m->delete($id);
        redirect('admin/categories');
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
        $categories = $this->categories_m->get($id);
        $languages = $this->data['languages'] = $this->languages_m->languages();
        $field_data = array();
        foreach ($fields as $field) {

            foreach ($languages as $language) {
                $fi = $categories->$field;


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

}

?>