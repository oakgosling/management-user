<?php 

class M_privilege extends CI_Model{

	// get data privilege
	public function getData($table)
	{
		return $this->db->get($table)->result();
	}

	public function add_privilege($data) {
		return $this->db->insert('t_privilege', $data);
	}

	public function update_privilege($table, $data, $where) {
		$query = $this->db->update($table, $data, $where);
		return $query;
	}
	public function delete_privilege($table, $where){
		$query = $this->db->delete($table, $where);
		return $query;
	}
}