<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checker
{

    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function if_exist_get($params,$table_name) {
      $this->CI->db->select();
      $this->CI->db->from($table_name);
      $this->CI->db->where($params);
      $db_results = $this->CI->db->get();
      $results = $db_results->row();
      $num_rows = $db_results->num_rows();
        if ($num_rows > 0){
            return $results;
        }else{
            return false;
        }
  }
}