<?php 

class Pagination_model extends CI_Model{

	public function data_limit($table, $start, $end){
		$query = $this->db->get($table, $start, $end);
		return $query->result();
	}
	public function data_count($table){
		$query = $this->db->get($table);
		return $query->num_rows();			// num_rows() -> get jumlah data
	}
	// public function get_data_user(){
	// 	$this->db->select('*, if(status = 1, "Aktif", "Nonaktif") AS sts');
	// 	$this->db->from('t_user');
	// 	$this->db->join('t_level', 't_level.id_level = t_user.id_level');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }
}