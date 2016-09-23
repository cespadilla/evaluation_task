<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content_model extends MY_Model {
        public $table = 'content';

        public function __construct()
        {
                parent::__construct();

                $this->_table = "content";
                
                $this->user = $this->ion_auth->user()->row();
        }

        public function create(){
            $post = $this->input->post();
            $insert = array(
                'text' => $post['text_field'],
                'datetime_added' => date('Y-m-d H:i:s'),
                'added_by_user_id' => $this->user->user_id
            );
            $this->db->insert('content', $insert);
            redirect('admin');
        }

        public function read(){
            $row = $this->db->get_where('content', array('deleted_by_user_id' => null))->result_array();
        	$data  = array();
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

        public function remove($c_id){
            $update = array(
                "deleted_by_user_id" => $this->user->user_id,
                "deleted_datetime" => $this->input->post('deleted')
            );
            $this->update($update,$c_id);
            redirect('admin','refresh');
        }

        public function modify(){
            $post = $this->input->post();
            $id = $post['c_id'];
            $update = array(
                'text' => $post['text_field']
            );
            $this->update($update,$id);
            redirect('admin','refresh');

        }

        protected function render($the_view = NULL, $template = 'admin_master')
        {
            parent::render($the_view, $template);
        }

}