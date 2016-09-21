<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends Admin_Controller {

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

        $this->data['page_title'] = 'Groups';
        $this->data['groups'] = $this->ion_auth->groups()->result();
        $this->render('admin/groups/list_groups_view');
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

