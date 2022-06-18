<?php
class dash_board extends Admin_Controller
{
    function index()
    {
        $this->data['users'] =count($this->user_m->get()) ;
        $this->data['movies'] =count($this->movies_m->get()) ;
        $this->data['categories'] =count($this->categories_m->get()) ;
        $this->data['subview'] = 'admin/dash_bord/index';
        $this->load->view('admin/_layout_main', $this->data);
    }
}
