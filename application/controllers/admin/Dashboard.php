<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Dashboard extends Admin_Controller
{
 
  function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
  	$this->data['page_title'] = 'Content';
    $this->data['groups'] = $this->content->read();
    $this->render('admin/content');
  }
}