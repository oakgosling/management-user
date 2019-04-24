<?php

class M_home extends CI_Model {

	// get all data
	public function getData($table) {
		return $this->db->get($table)->result();
	}

	public function jumlah_data($table){
		$query = $this->db->get($table);
		return $query->num_rows();
		// num_rows() -> get jumlah data
	}

	// get data user dan level -- join
	public function get_data_user(){
		$this->db->select('*, if(status = 1, "Aktif", "Nonaktif") AS sts');
		$this->db->from('t_user');
		$this->db->join('t_level', 't_level.id_level = t_user.id_level');
		$query = $this->db->get();
		return $query->result();

		// $this->db->query("SELECT *, if(status = 1, 'Aktif', 'Nonaktif') AS u.sts FROM t_user u LIMIT $offset, $record")->result();
	}

	// select daftar list biodata All kategory
    public function list_biodata($page, $record){
        $query = $this->db->query("SELECT * FROM v_list_biodata WHERE kd not IN (SELECT kd_user FROM t_user) limit $page, $record");
        return $query->result();
	}

	// daftar user
	public function daftar($data){
        return $this->db->query("INSERT INTO `t_user` (`kd_user`, `user`, `password`, `pass`, `id_level`, `status`) 
        VALUES (MD5('$data[kd_user]'), '$data[user]', MD5('$data[password]'), '$data[pass]', '$data[id_level]', '0')");
	}

	// delete user data
	public function delete_user($kd_user){
		$this->db->where('kd_user', $kd_user);
		return $this->db->delete('t_user');
	}

	public function aktif_user($kd_user){
		$data = array('status' => '1');
		$this->db->where('kd_user', $kd_user);
		return $this->db->update('t_user', $data);
	}

	public function nonaktif_user($kd_user){
		$data = array('status' => '0');
		$this->db->where('kd_user', $kd_user);
		return $this->db->update('t_user', $data);
	}
	
}
