<?php
class comments_m extends MY_Model
{
    protected $_table_name = 'comments';

    protected $_order_by = 'id';
    public $rules = array(
        'comment' => array(
            'field' => 'comment',
            'label' => 'comment',
            'rules' => 'trim|required'
        )
    );
    public function get_movies_comment($id)
    {
     $data = $this->db->query("SELECT
                                    JSON_EXTRACT(`movies`.`name`,'$.EN') as movies_name,
                                    `comments`.`comment` as comment,
                                    `comments`.`created_at` as created_at,
                                    `user`.`name` as name 
                                FROM comments  JOIN movies on `comments`.`movies_id`=`movies`.`id` join `user` on`comments`.`created_by`=`user`.`id` where `comments`.`movies_id`=$id")->result();

        return $data;
}

}