<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update
{

    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function update_table_where_id($params,$id,$id_name, $table_name)
    {

      $this->CI->db->where($id_name, $id);

      if ($this->CI->db->update($table_name, $params)) {
            return  $this->CI->db->affected_rows(); 
      } else { 
          return false; 
      } 
  }

}