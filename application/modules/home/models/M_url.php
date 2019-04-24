<?php 

class M_url extends CI_Model{

	// get caption from t_url
	public function get($table, $where)
	{
		$query = $this->db->get_where($table, $where);
		return $query->result();
	}

	// get t_head_menu limit
	public function get_limit(){
		$query = $this->db->query("SELECT * FROM t_head_menu where id_head_menu >= 2"); // offset = 2, record = 3
		return $query->result();
	}

	// insert new url
	public function insert($data){
		$query = $this->db->insert('t_url', $data);
		return $query;
	}

	// update id_head_menu
	public function update($table, $data, $where){
		$query = $this->db->update($table, $data, $where);
		return $query;
	}

	public function select_max(){
		$query = $this->db->query("SELECT MAX(level_short) as ls FROM t_url");
		return $query->row();
	}
}