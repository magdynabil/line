<?php
class languages_m extends MY_Model
{

    protected $_table_name = 'languages';
    protected $_order_by = 'name';
    public $rules = array(
        'email' => array(
            'field' => 'name',
            'label' => 'name',
            'rules' => 'trim|required'
        ),
        'password' => array(
            'field' => 'language_shortcut',
            'label' => 'language_shortcut',
            'rules' => 'trim|required|callback__unique_language_shortcut'
        )
    );

    function __construct ()
    {
        parent::__construct();
    }

    public function get_new(){
        $languages = new stdClass();
        $languages->name = '';
        $languages->language_shortcut = '';
        return $languages;
    }
    public function languages(){
        $this->db->select('id,language_shortcut');
        $language = parent::get();

        if (count($language)) {
            foreach ($language as $lang) {
                $array[$lang->id] = $lang->language_shortcut;
            }
        }
        return $array;
    }



}