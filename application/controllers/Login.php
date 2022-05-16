<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		if(!isset($this->session->userdata['user_nama'])){
			redirect(base_url('login/logon'));
		} else {
			redirect(base_url('dashboard'));
		}
	}
	
	public function logon(){
		$this->load->view('login/login');
	}
	
	public function cek(){
		$user_nik = $this->input->post('user_nik');
		$user_nama = $this->input->post('user_nama');
		
		$this->load->model('Login_model');
		
		$numrow = $this->Login_model->cek_login($user_nik, $user_nama);
		
		if( $numrow==1 ){
			$this->session->set_userdata(
				array(
					'user_nama' => $user_nama
				)
			);
			redirect( base_url('login/index') );
		} else {
			redirect( base_url('login/login?err=username atau password salah') );
		}
	}
	
	public function register(){
		$this->load->view('login/register');
	}
	
	public function register_simpan(){
		$data['user_nik'] = $this->input->post('user_nik');
		$data['user_nama'] = $this->input->post('user_nama');
		$data['user_alamat'] = $this->input->post('user_alamat');
						
		$this->load->model('Login_model');		
		$result = $this->Login_model->set_user($data);
				
		if($result===0){
			echo "Pendaftaran gagal";
			echo "<br/>Coba lagi <a href='".base_url('login/register')."'>register</a>";
		}else if($result==='duplicate'){
			echo "NIK sudah digunakan";
			echo "<br/>Coba lagi <a href='".base_url('login/register')."'>register</a>";
		}else{
			echo "Data berhasil disimpan";
			echo "<br/>Ke halaman <a href='".base_url('login/logon')."'>login</a>";
		}
	}

  public function logout(){
		$this->session->unset_userdata('user_nama');
		redirect('login');
	}
}