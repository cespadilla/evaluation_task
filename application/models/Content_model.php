<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content_model extends Base_Model {

        public function __construct()
        {
                parent::__construct();

                $this->_table = "content";
                if (isset($this->session->userdata['user_id']))
				{
					$this->uid = $this->session->userdata['user_id'];
				}
        }

        public function create(){
        	// print_r("here");
        	$post = $this->input->post();
        	$insert = array(
        		'text' => $post['test'],
        		'datetime_added' => $post['created'],
        		'added_by_user_id' => $this->uid
    		);
    		$this->insert($insert);
    		$this->session->set_flashdata('message','Content Text Added!');
    		return;
        }

        public function read(){
        	$row =  $this->get_all();
        	$data  = array();
        	$val = array();
        	foreach ($row as $key) {
        		$val = (array) $key;
	        	if($val){
	        		$create = $this->db->select("concat_ws(' ', first_name,last_name) as name")->where('id',$val['added_by_user_id'])->get("users")->row_array();
	        		$val['name'] = $create['name'];

	        		$rm = $this->db->select("concat_ws(' ', first_name,last_name) as name")->where('id',$val['deleted_by_user_id'])->get("users")->row_array();
	        		$val['removed_by'] = $rm['name'];
	        	}
	        	$data[] = $val;
        	}
        	return $data;
        }

}