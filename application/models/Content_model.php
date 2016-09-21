<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();

                $this->_table = "content";
                
        }

        public function create(){
        	$post = $this->input->post();
            $user = $this->ion_auth->user()->row();
            $insert = array(
                'text' => $post['text_field'],
                'datetime_added' => date('Y-m-d H:i:s'),
                'added_by_user_id' => $user->user_id
            );
            // $this->db->insert('content', $insert);
            // $this->ion_auth->messages();
            redirect('admin');
        }

        public function read(){
        	// $row =  $this->("deleted_by_user_id is null");
            $row = $this->db->get_where('content', array('deleted_by_user_id' => null))->result_array();
        	$data  = array();
        	// $val = array();
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

        protected function render($the_view = NULL, $template = 'admin_master')
        {
            parent::render($the_view, $template);
        }

}