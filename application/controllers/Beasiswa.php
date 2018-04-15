<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Controller buat halaman awal sebelum login...
class Beasiswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Beasiswa_model');
		$this->load->helper('url');
	}

	public function masuk(){
		$this->load->view('templates/header');
		$this->load->view('templates/favicon');
		$this->load->view('pages/akun/masuk');
	}

	public function daftar(){
		$data["nama_beasiswa"] = $this->Beasiswa_model->nama_beasiswa();

		$this->load->view('templates/header');
		$this->load->view('templates/favicon');
		$this->load->view('pages/akun/daftar', $data);
	}

	public function view($halaman = 'beranda'){
		$data["deskripsi_beasiswa"] = $this->Beasiswa_model->deskripsi_beasiswa();
		$data["syarat_beasiswa"] = $this->Beasiswa_model->syarat_beasiswa();

		if(!file_exists(APPPATH."views/pages/".$halaman.'.php')){
			show_404();
		}

		$row = $this->Beasiswa_model->nama_beasiswa()->row();
		if($row){
			$result = $row->nama_beasiswa;
			$data_session = array(
				'nama_beasiswa' => $result
			);

			$this->session->set_userdata($data_session);
			$this->load->view('templates/header');
			$this->load->view('templates/favicon');
			$this->load->view('pages/'.$halaman, $data);
			$this->load->view('templates/footer');
		}else{
			echo "Session nama beasiswa gagal!";
			redirect(base_url("Beasiswa/view"));
		}

		
	}

	public function kirim_masukan($data){
		$nama = $this->input->post("nama");
		$email = $this->input->post("email");
		$pesan = $this->input->post("pesan");

		$data = array(
				"nama" => $nama,
				"email" => $email,
				"pesan" => $pesan
		);

		$this->load->model("Beasiswa_model");
		$daftar = $this->Beasiswa_model->kirim_masukan($data);
		if( $daftar > 0 ){
			$this->session->set_flashdata("sukses", "Masukan berhasil dikirim");
			redirect(base_url("Beasiswa/view/kontak"));
		}else{
			$this->session->set_flashdata("gagal", "Masukan gagal dimasukkan");
			redirect(base_url("Beasiswa/view/kontak"));
		}
	}

	
}
