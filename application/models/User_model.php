<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        public function logout(){
        	$this->ion_auth->logout();
        	redirect('auth/login','refresh');
        }

}