<?php 

class M_hak_akses extends CI_Model{

	// get data
	public function getData($table)
	{
		return $this->db->get($table)->result();
	}

	public function insertHakAkses($table, $data){
		return $this->db->insert($table, $data);
	}
}