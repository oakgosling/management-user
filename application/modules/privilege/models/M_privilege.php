<?php 

class M_privilege extends CI_Model{

	// get data privilege
	public function getData($table)
	{
		return $this->db->get($table)->result();
	}
}