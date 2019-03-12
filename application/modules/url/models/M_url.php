<?php 

class M_url extends CI_Model{

	// get data url
	public function getData($table)
	{
		return $this->db->get($table)->result();
	}
}