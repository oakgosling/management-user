<?php 

class M_level extends CI_Model{

	// get data level
	public function getData($table)
	{
		return $this->db->get($table)->result();
	}
}