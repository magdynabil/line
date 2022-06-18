<?php

class movies_m extends MY_Model
{
    protected $_table_name = 'movies';

    protected $_order_by = 'id';
    public $_rules = array(
        'nameEN' => array(
            'field' => 'nameEN',
            'label' => 'nameEN',
            'rules' => 'trim|required'
        ),
        'discriptionEN' => array(
            'field' => 'descriptionEN',
            'label' => 'descriptionEN',
            'rules' => 'trim|required'
        ),
        'poster_title' => array(
            'field' => 'poster_title',
            'label' => 'poster_title',
            'rules' => 'trim|required'
        ),
        'poster_alt' => array(
            'field' => 'poster_alt',
            'label' => 'poster_alt',
            'rules' => 'trim|required'
        ),
        'trailer_title' => array(
            'field' => 'trailer_title',
            'label' => 'trailer_title',
            'rules' => 'trim|required'
        ),
        'trailer_alt' => array(
            'field' => 'trailer_alt',
            'label' => 'trailer_alt',
            'rules' => 'trim|required'
        ),
        'film_alt' => array(
            'field' => 'film_alt',
            'label' => 'film_alt',
            'rules' => 'trim|required'
        ),
        'film_title' => array(
            'field' => 'film_title',
            'label' => 'film_title',
            'rules' => 'trim|required'
        ),
        'category' => array(
            'field' => 'parent_category',
            'label' => 'parent_category',
            'rules' => 'trim|intval'
        )
    );

    public function get_with_language($lang)
    {

        $data = $this->db->query("SELECT
                                    `movies`.`id`,
                                    `movies`.`category`, 
                                    JSON_EXTRACT(name,'$.$lang') as name,
                                    JSON_EXTRACT(description,'$.$lang') as discription
                                FROM movies")->result();
        return $data;
    }
    public function get_all_movies_details($page,$lang)
    {
        if($page==null){
            $page=0;
        }
        $data = $this->db->query("SELECT
                                    `movies`.`id`,
                                    `movies`.`category`, 
                                    `movies`.`created_at`, 
                                    `categories`.`id`as category_id,
                                    JSON_EXTRACT(`categories`.`name`,'$.$lang') as category_name,
                                    JSON_EXTRACT(`movies`.`name`,'$.$lang') as name,
                                    JSON_EXTRACT(`movies`.`description`,'$.$lang') as discription,
                                    JSON_EXTRACT(poster,'$.title') as poster_title,
                                    JSON_EXTRACT(poster,'$.alt') as poster_alt,
                                    JSON_EXTRACT(poster,'$.path') as poster_path,
                                    JSON_EXTRACT(trailer,'$.title') as trailer_title,
                                    JSON_EXTRACT(trailer,'$.alt') as trailer_alt,
                                    JSON_EXTRACT(trailer,'$.path') as trailer_path,
                                    JSON_EXTRACT(film,'$.title') as film_title,
                                    JSON_EXTRACT(film,'$.alt') as film_alt,
                                    JSON_EXTRACT(film,'$.path') as film_path
                                    
                                FROM movies  JOIN categories on `movies`.`category`=`categories`.`id` order by created_at LIMIT 4 offset $page ")->result();
        return $data;
    }
    public function get_all_movies_details_by_id($id,$lang)
    {

        $data = $this->db->query("SELECT
                                    `movies`.`id`,
                                    `movies`.`category`, 
                                    `movies`.`created_at`, 
                                    `categories`.`id`as category_id,
                                    JSON_EXTRACT(`categories`.`name`,'$.$lang') as category_name,
                                    JSON_EXTRACT(`movies`.`name`,'$.$lang') as name,
                                    JSON_EXTRACT(`movies`.`description`,'$.$lang') as discription,
                                    JSON_EXTRACT(poster,'$.title') as poster_title,
                                    JSON_EXTRACT(poster,'$.alt') as poster_alt,
                                    JSON_EXTRACT(poster,'$.path') as poster_path,
                                    JSON_EXTRACT(trailer,'$.title') as trailer_title,
                                    JSON_EXTRACT(trailer,'$.alt') as trailer_alt,
                                    JSON_EXTRACT(trailer,'$.path') as trailer_path,
                                    JSON_EXTRACT(film,'$.title') as film_title,
                                    JSON_EXTRACT(film,'$.alt') as film_alt,
                                    JSON_EXTRACT(film,'$.path') as film_path
                                    
                                FROM movies  JOIN categories on `movies`.`category`=`categories`.`id` where `movies`.`id`=$id")->result();
        return $data;
    }
    public function get_all_main_category_movies($id,$lang)
    {
        $data = $this->db->query("SELECT
                                    `movies`.`id`,
                                    `movies`.`category`, 
                                    `movies`.`created_at`, 
                                    `categories`.`id`as category_id,
                                    JSON_EXTRACT(`categories`.`name`,'$.$lang') as category_name,
                                    JSON_EXTRACT(`movies`.`name`,'$.$lang') as name,
                                    JSON_EXTRACT(`movies`.`description`,'$.$lang') as discription,
                                    JSON_EXTRACT(poster,'$.title') as poster_title,
                                    JSON_EXTRACT(poster,'$.alt') as poster_alt,
                                    JSON_EXTRACT(poster,'$.path') as poster_path,
                                    JSON_EXTRACT(trailer,'$.title') as trailer_title,
                                    JSON_EXTRACT(trailer,'$.alt') as trailer_alt,
                                    JSON_EXTRACT(trailer,'$.path') as trailer_path,
                                    JSON_EXTRACT(film,'$.title') as film_title,
                                    JSON_EXTRACT(film,'$.alt') as film_alt,
                                    JSON_EXTRACT(film,'$.path') as film_path
                                    
                                FROM movies  JOIN categories on `movies`.`category`=`categories`.`id` where `categories`.`parent_category`=$id ")->result();
        return $data;
    }
    public function get_all_sub_category_movies($id,$lang)
    {
        $data = $this->db->query("SELECT
                                    `movies`.`id`,
                                    `movies`.`category`, 
                                    `movies`.`created_at`, 
                                    `categories`.`id`as category_id,
                                    JSON_EXTRACT(`categories`.`name`,'$.$lang') as category_name,
                                    JSON_EXTRACT(`movies`.`name`,'$.$lang') as name,
                                    JSON_EXTRACT(`movies`.`description`,'$.$lang') as discription,
                                    JSON_EXTRACT(poster,'$.title') as poster_title,
                                    JSON_EXTRACT(poster,'$.alt') as poster_alt,
                                    JSON_EXTRACT(poster,'$.path') as poster_path,
                                    JSON_EXTRACT(trailer,'$.title') as trailer_title,
                                    JSON_EXTRACT(trailer,'$.alt') as trailer_alt,
                                    JSON_EXTRACT(trailer,'$.path') as trailer_path,
                                    JSON_EXTRACT(film,'$.title') as film_title,
                                    JSON_EXTRACT(film,'$.alt') as film_alt,
                                    JSON_EXTRACT(film,'$.path') as film_path
                                    
                                FROM movies  JOIN categories on `movies`.`category`=`categories`.`id` where `movies`.`category`=$id ")->result();
        return $data;
    }
    function extract_upload_files_by_id($id, $upload)
    {
        $this->db->select($upload);
        $files = $this->movies_m->get($id);
        $upload_data = array();
        foreach ($upload as $field)
        {
            $fi = $files->$field;
            $jason = json_decode($fi);
            if ($this->isJSON($fi))
            {
                $upload_data[$field . '_title'] = $jason->title;
                $upload_data[$field . '_alt'] = $jason->alt;
                $upload_data[$field] = $jason->path;
            }
            else {
                $upload_data[$field . '_title'] = '';
                $upload_data[$field . '_alt'] = '';
                $upload_data[$field] = '';
            }
        }
        return $upload_data;
    }

    function extract_upload_files($upload)
    {
        foreach ($upload as $field)
        {

            $upload_data[$field . '_title'] = '';
            $upload_data[$field . '_alt'] = '';
            $upload_data[$field] = '';
        }
    }


}