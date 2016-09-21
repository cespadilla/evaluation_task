<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Dashboard extends Admin_Controller
{
 
  function __construct()
  {
    parent::__construct();
    $this->load->model("Content_model");
  }
  public function index()
  {
  	$this->data['page_title'] = 'Content';
    $this->data['content'] = $this->Content_model->read();
    $this->render('admin/content');
  }
}