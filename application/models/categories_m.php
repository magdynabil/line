<?php

class categories_m extends MY_Model
{
    protected $_table_name = 'categories';

    protected $_order_by = 'id';
    public $_rules = array(
        'nameEN' => array(
            'field' => 'nameEN',
            'label' => 'nameEN',
            'rules' => 'trim|required'
        ),
        'descriptionEN' => array(
            'field' => 'descriptionEN',
            'label' => 'descriptionEN',
            'rules' => 'trim|required'
        ),
        'parent_category' => array(
            'field' => 'parent_category',
            'label' => 'parent_category',
            'rules' => 'trim|intval'
        )
    );

    public function get_with_language($lang)
    {

       $data= $this->db->query("SELECT
                                    `categories`.`id`,
                                    `categories`.`parent_category`, 
                                    JSON_EXTRACT(name,'$.$lang') as parent_name,
                                    JSON_EXTRACT(description,'$.$lang') as parent_description 
                                FROM categories")->result();
        return $data;

    }
    public function get_category_by_id($id,$lang){
        $category=  $this->db->query("SELECT
                                    JSON_EXTRACT(`categories`.`name`,'$.$lang') as name,
                                    JSON_EXTRACT(`categories`.`description`,'$.$lang') as description 
                                FROM categories where `categories`.`id` =$id")->result();
        return $category;


    }
    public function get_no_parents($lang)
    {
        $categories=  $this->db->query("SELECT
                                    `categories`.`id`,
                                    `categories`.`parent_category`, 
                                    JSON_EXTRACT(name,'$.$lang') as parent_name,
                                    JSON_EXTRACT(description,'$.$lang') as parent_description 
                                FROM categories where parent_category=0 ")->result();
        $array[0] = 'no_parent';
        if (count($categories)) {
            foreach ($categories as $category) {
                $array[$category->id] = $category->parent_name;
            }
        }
        return $array;


    }
    public function get_chiled_categories($id,$lang)
    {

        $array=array();
        $categories=  $this->db->query("SELECT
                                    `categories`.`id`,
                                    `categories`.`parent_category`, 
                                    JSON_EXTRACT(name,'$.$lang') as chiled_name,
                                    JSON_EXTRACT(description,'$.$lang') as chiled_description 
                                FROM categories where `categories`.`parent_category`=$id ")->result();;
        if (count($categories)) {
            foreach ($categories as $category) {
                $array[$category->id] = $category->chiled_name;
            }
        }
        return $array;


    }
    public function movies_parent()
    {
        $categories= $this->db->query("SELECT
                                            `categories`.`id`,
                                            `categories`.`name`
                                            FROM `categories`
                                            where `parent_category`>0
                                      ")->result();
        if (count($categories)) {
            foreach ($categories as $category) {
                $array[$category->id] = $category->name;
            }
        }
        return $array;
    }

}