<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends Base_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->models = array(
            'user'
        );
        
        $this->_load_models();
    }

	
    public function index()
	{
		$data['title'] = "Dashboard";
        $this->load->view('admin/common/header',$data);
        $this->load->view('admin/page');
        $this->load->view('admin/common/footer');
	}
	
	public function logout(){
		$this->user->logout();
	}
}
