<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Base_Controller {

	public function index()
	{
		$session = $this->session->userdata;
		if(array_key_exists("email", $session)){
			$this->show();
		}else{
			redirect('auth/login', 'refresh');
		}
	}

	public function show(){
		$data['title'] = "Dashboard";
		$this->load->view('admin/common/header',$data);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/common/footer');
	}
}
