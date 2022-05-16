<?php
class Login_model extends CI_Model {

	public function cek_login($user_nik, $user_nama){
		$where = array(
										'user_nik' => $user_nik,
										'user_nama' => $user_nama
									);
		$this->db->where($where);
		$row  = $this->db->get('user');
		
		return $row->num_rows();
	}
	
	public function set_user($data){	
		$user_nik = $data['user_nik'];
		$where = array(
										'user_nik' => $user_nik
									);
		$this->db->where($where);
		$row  = $this->db->get('user');
		
		if($row->num_rows()>0)
			return 'duplicate';
		else		
			return $this->db->insert('user', $data);
	}
	
}