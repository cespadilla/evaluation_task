<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Base_Controller extends CI_Controller
{
    protected $data = array();
    
    protected $models = array();
    
    protected $model_string = '%_model';
   
    protected $helpers = array();
 
  function __construct()
  {
    parent::__construct();

    $this->_load_models();
    $this->_load_helpers();
  }

  public function _load_models() {
        foreach ($this->models as $model) {
            $this->load->model($this->_model_name($model), $this->_model_alias($model));
        }
  }
  public function _load_helpers() {
      foreach ($this->helpers as $helper) {
          $this->load->helper($helper);
      }
  }
  protected function _model_name($model) {
      return str_replace('%', $model, $this->model_string);
  }
  
  protected function _model_alias($model) {
      $alias = explode("/", $model);
      
      return (count($alias) > 1) ? $alias[(count($alias) - 1) ] : $alias[0];
  }
}
 