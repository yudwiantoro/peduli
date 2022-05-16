<?php
class Dashboard extends CI_Controller{
	
	function __construct(){
		parent::__construct(); 
		if( ! isset($this->session->userdata['user_nama'] )){
			redirect( base_url( 'login' ) );
		}
	}
	
	public function index(){
		$this->load->view('dashboard/index');
	}
	
	public function isi(){
		$this->load->view('dashboard/isi');
	}
	
	public function isi_simpan(){
		$data['catatan_tanggal'] = $this->input->post('catatan_tanggal');
		$data['catatan_jam'] = $this->input->post('catatan_jam');
		$data['catatan_lokasi'] = $this->input->post('catatan_lokasi');
		$data['catatan_suhu'] = $this->input->post('catatan_suhu');
		
		$this->load->model('Dashboard_model');
		$this->Dashboard_model->isi_simpan($data);
		
		redirect(base_url('dashboard/catatan'));		
	}
	
	public function catatan(){
		$this->load->model('Dashboard_model');
		$data['catatan'] = $this->Dashboard_model->get_isi();
		
		$this->load->view('dashboard/catatan', $data);
	}
}
