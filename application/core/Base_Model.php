<?php

class Base_Model extends CI_Model
{
     protected $_table;

    /**
     * Database conn object; will use default connection
     * unless overridden
     */
    protected $_db;

    /**
     * This model's default primary key or unique identifier.
     * Used by the get(), update() and delete() functions.
     */
    protected $primary_key = 'id';

    

    protected $_with = array();

    protected $return_type = 'array';
    protected $_temporary_return_type = NULL;


	 public function __construct()
    {
        parent::__construct();
    }

    public function get($primary_value)
    {
        $this->trigger('before_get');

        $row = $this->db->where($this->primary_key, $primary_value)
                        ->get($this->_table)
                        ->{$this->_return_type()}();
        $this->_temporary_return_type = $this->return_type;

        $row = $this->trigger('after_get', $row);

        $this->_with = array();
        return $row;
    }

     public function get_all()
    {
        $this->trigger('before_get');

        $result = $this->db->get($this->_table)
                           ->{$this->_return_type(1)}();
        $this->_temporary_return_type = $this->return_type;

        foreach ($result as $key => &$row)
        {
            $row = $this->trigger('after_get', $row, ($key == count($result) - 1));
        }

        $this->_with = array();
        return $result;
    }


    public function insert($data, $skip_validation = FALSE)
    {
    	$valid = TRUE;

        if ($skip_validation === FALSE)
        {
            $data = $this->validate($data);
        }

        if ($data !== FALSE)
        {	
            $data = $this->trigger('before_create', $data);

            $this->db->insert($this->_table, $data);
            $insert_id = $this->db->insert_id();

            $this->trigger('after_create', $insert_id);

            return $insert_id;
        }
        else
        {
            return FALSE;
        }
    }

     public function trigger($event, $data = FALSE, $last = TRUE)
    {
        if (isset($this->$event) && is_array($this->$event))
        {
            foreach ($this->$event as $method)
            {
                if (strpos($method, '('))
                {
                    preg_match('/([a-zA-Z0-9\_\-]+)(\(([a-zA-Z0-9\_\-\., ]+)\))?/', $method, $matches);

                    $method = $matches[1];
                    $this->callback_parameters = explode(',', $matches[3]);
                }

                $data = call_user_func_array(array($this, $method), array($data, $last));
            }
        }

        return $data;
    }

    public function validate($data)
    {
        return $data;
    }

    protected function _return_type($multi = FALSE)
    {
        $method = ($multi) ? 'result' : 'row';
        return $this->_temporary_return_type == 'array' ? $method . '_array' : $method;
    }
}