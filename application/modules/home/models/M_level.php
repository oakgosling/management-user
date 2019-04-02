<?php 

class M_level extends CI_Model{

	// get data level
	public function getData($table) {
		return $this->db->get($table)->result();
	}

	// insert level
	public function add_level($data) {
		return $this->db->insert('t_level', $data);
	}

	public function update_level($table, $data, $where) {
		$query = $this->db->update($table, $data, $where);
		return $query;
	}
	public function delete_level($table, $id){
		$query = $this->db->delete($table, $id);
		return $query;
	}
}