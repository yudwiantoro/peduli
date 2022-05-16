<?php
class Dashboard_model extends CI_Model {

	public function isi_simpan($data){
		return $this->db->insert('catatan', $data);
	}
	
	public function get_isi(){
		return $this->db->get('catatan')->result_array();
	}

}