<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Feeds_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->library('insert');
		$this->load->library('get');
		$this->load->library('checker');
		$this->load->library('update');
		$this->load->library('counter');
    }

public function count_feeds($params)
	{
		$table_name = 'feeds';
		return $this->counter->count_results($params,$table_name);
	}


public function update_feed($params,$id)
	{

		$table_name = 'feeds';
		$id_name = 'feed_id';
		return $this->update->update_table_where_id($params,$id,$id_name, $table_name);
	}


public function check_feed_exist_then_get($id)
	{
		$params = array('deleted' => 'No', 'feed_id'=>$id);
		$table_name = 'feeds';
		return $this->checker->if_exist_get($params, $table_name);
	}

	public function check_feed_exist_then_delete($params, $id)
	{

		$table_name = 'feeds';
		$id_name = 'feed_id';
		return $this->update->update_table_where_id($params,$id,$id_name, $table_name);
	}


   public function get_all_feeds_deleted()
	{
		$params = array('deleted' => 'Yes');
		$table_name = 'feeds';
		return $this->get->get_from_table($params, $table_name);
	}

    public function get_all_feeds()
	{
		$params = array('deleted' => 'No');
		$table_name = 'feeds';
		return $this->get->get_from_table($params, $table_name);
	}
	 public function get_feed_by_id($id)
	{
		$params = array('deleted' => 'No', 'feed_id'=>$id);
		$table_name = 'feeds';
		return $this->get->get_from_table($params, $table_name);
	}
    public function add_feed($params){
		$table_name = 'feeds';
		return $this->insert->insert_into_table($params, $table_name);
	}
}

