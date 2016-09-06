<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends Base_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->models = array(
            'user',
            'content'
        );
        
        $this->_load_models();
    }

	public function index()
	{

		$data['title'] = "Dashboard";
        // $data['data'] ="";
        $data['data'] = $this->read();
        $this->load->view('admin/common/header',$data);
        $this->load->view('admin/content');
        $this->load->view('admin/common/footer');
    }

    public function logout(){
		$this->user->logout();
	}

    public function create(){
        $this->content->create();
    }

    public function read(){
        return $this->content->read();
    }

    public function remove(){
        return $this->content->remove();
    }

    public function getData(){
        return $this->content->getData();
    }
    
    public function modify(){
        return $this->content->modify();
    }

}

