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

    public function remove($c_id){
        return $this->Content_model->remove($c_id);
    }
    
    public function modify($c_id){
        $this->data['page_title'] = "Edit Data";
        $this->data['content'] = $this->Content_model->get($c_id);
        $this->render('admin/content_edit');
        
    }

    public function create_data(){
        $this->Content_model->create();
    }

    public function edit(){
        $this->Content_model->modify();
    }
}

