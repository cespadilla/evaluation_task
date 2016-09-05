<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends Base_Model {

        public function __construct()
        {
                parent::__construct();
                $this->_table = 'users';
        }

        public function logout(){
        	$this->ion_auth->logout();
        	redirect('auth/login','refresh');
        }

        public function get_fullname($id) {
			$row = $this->get($id);
			if (count($row) > 0) return uclower($row->first_name . ' ' . $row->last_name);
		}
		public function get_delname($id) {
			$row = $this->get($id);
			if (count($row) > 0) return uclower($row->first_name . ' ' . $row->last_name);
		}

}