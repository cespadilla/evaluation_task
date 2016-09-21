<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends Admin_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model("Content_model");
    }

    public function logout(){
		$this->user->logout();
	}

    public function create(){
        $this->form_validation->set_rules('text_field','text_field','required|min_length[20]');
        $this->data['page_title'] = "Create Data";
        $this->render('admin/content_create');
    }

    public function read(){
        return $this->content->read();
    }

    public function remove(){
        return $this->content->remove();
    }
    
    public function modify(){
        $this->data['page_title'] = "Edit Data";
        $this->render('admin/content_edit');
        // return $this->content->modify();
    }

    public function create_data(){
        $this->Content_model->create();
    }

}

