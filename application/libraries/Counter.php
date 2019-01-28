<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Counter
{

    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function count_results($params,$table_name) {

      $this->CI->db->select();
      $this->CI->db->from($table_name);
      $this->CI->db->where($params);
      $num_results = $this->CI->db->count_all_results();
        if ($num_results > 0){
            return $num_results;
        }else{
            return false;
        }
  }
}