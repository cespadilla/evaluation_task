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

        $session = $this->session->userdata;
        if(array_key_exists("email", $session)){
            $data['title'] = "Content";
            // $data['data'] ="";
            $data['data'] = $this->read();

            $this->load->view('admin/common/header',$data);
            $this->load->view('admin/content');
            $this->load->view('admin/common/footer');
        }else{
            redirect('', 'refresh');
        }
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
    
    public function modify(){
        return $this->content->modify();
    }

}

