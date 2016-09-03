<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Base_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->models = array(
            'user'
        );
        
        $this->_load_models();
    }

	

	public function logout(){
		$this->user->logout();
	}
}
