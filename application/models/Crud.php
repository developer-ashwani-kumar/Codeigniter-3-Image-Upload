<?php

/**
 * Crud Model
 */
class Crud extends CI_Model
{

	public function insert($table, $data)
	{
		$result = $this->db->insert($table, $data);
		return $result;
	}


	public function get_records($table)
	{
		$result = $this->db->get($table)->result();
		return $result;
	}
	
}
