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
        	$post = $this->input->post();
        	$insert = array(
        		'text' => $post['val'],
        		'datetime_added' => $post['created'],
        		'added_by_user_id' => $this->uid
    		);
    		$this->insert($insert);
    		out_json($get);
        }

        public function read(){
        	$row =  $this->get_many_by("deleted_by_user_id is null");
        	$data  = array();
        	$val = array();
        	foreach ($row as $key) {
        		$val = (array) $key;
	        	if($val){
	        		$create = $this->db->select("concat_ws(' ', first_name,last_name) as name")->where('id',$val['added_by_user_id'])->get("users")->row_array();
	        		$val['name'] = $create['name'];
                    $val['removed_by'] ="" ;
	        	}
	        	$data[] = $val;
        	}
        	return $data;
        }

        public function remove(){
            $id = $this->input->post('id');
            $update = array(
                "deleted_by_user_id" => $this->uid,
                "deleted_datetime" => $this->input->post('deleted')
            );
            $this->update($id,$update);
            out_json($update);
        }

        public function modify(){
            $id = $this->input->post('id');
            $update = array(
                'text' => $this->input->post('text')
            );
            $this->update($id,$update);
            out_json($update);

        }

}