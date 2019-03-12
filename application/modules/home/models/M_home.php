<?php

class M_home extends CI_Model {

	// get all data
	public function getData($table)
	{
		return $this->db->get($table)->result();
	}

	// get data user dan level -- join
	public function get_data_user()
	{
		$this->db->select('*, if(status = 1, "Aktif", "Nonaktif") AS sts');
		$this->db->from('t_user');
		$this->db->join('t_level', 't_level.id_level = t_user.id_level');
		$query = $this->db->get();
		return $query->result();
	}

    // select id level
	// public function ulv($id){
	// 	return $this->db->query("SELECT level as lv_nama FROM t_level WHERE id_level='$id'")->result();
	// }

	// select daftar list biodata All kategory
    public function list_biodata(){
        return $this->db->query('SELECT * FROM v_list_biodata WHERE kd not IN (SELECT kd_user FROM t_user )')->result();
	}

	// daftar user
	public function daftar($data){
        return $this->db->query("INSERT INTO `t_user` (`kd_user`, `user`, `password`, `pass`, `id_level`, `status`) 
        VALUES (MD5('$data[kd_user]'), '$data[user]', MD5('$data[password]'), '$data[pass]', '$data[id_level]', '0')");
	}

	// delete user data
	public function delete_user($kd_user)
	{
		$this->db->where('kd_user', $kd_user);
		return $this->db->delete('t_user');
	}

	public function aktif_user($kd_user)
	{
		$data = array('status' => '1');
		$this->db->where('kd_user', $kd_user);
		return $this->db->update('t_user', $data);
	}

	public function nonaktif_user($kd_user)
	{
		$data = array('status' => '0');
		$this->db->where('kd_user', $kd_user);
		return $this->db->update('t_user', $data);
	}

	// select daftar user
	// public function dftUsr(){
 //        return $this->db->query('SELECT * FROM t_user a JOIN t_level b ON a.id_level=b.id_level')->result();
 //    }
}
