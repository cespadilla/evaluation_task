<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Base_Controller {

	public function index()
	{
		$data['title'] = "Dashboard";
        $this->load->view('admin/common/header',$data);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/common/footer');
	}
}
