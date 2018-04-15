<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Controller untuk mahasiswa, setelah login
class Mahasiswa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("mahasiswa_model");
		$this->load->helper("url");
	}

	public function view($halaman = 'home_mahasiswa'){
		if(!file_exists(APPPATH."views/pages/mahasiswa/".$halaman.'.php')){
			show_404();
		}

		$this->load->view('templates/header');
		$this->load->view('templates/favicon');
		$this->load->view('pages/mahasiswa/'.$halaman);
		$this->load->view('templates/footer');
	}

	public function daftar_beasiswa(){
		$nama = $this->input->post("nama");
		$nim = $this->input->post("nim");
		$tanggal_lahir = $this->input->post("tanggal_lahir");
		$jenis_kelamin = $this->input->post("jenis_kelamin");
		$gaji = $this->input->post("gaji");
		$saudara = $this->input->post("saudara");
		$jurusan = $this->input->post("jurusan");
		$semester = $this->input->post("semester");
		$ipk = $this->input->post("ipk");
		$tunjangan = $gaji/$saudara;

		$this->load->model("mahasiswa_model");
		$id_mhs = $this->mahasiswa_model->getFk($nim)->row_array();
		$fk_id_mhs = $id_mhs["id_mhs"];

		$data = array(
				'nama' => $nama,
				'nim' => $nim,
				'tanggal_lahir' => $tanggal_lahir,
				'jenis_kelamin' => $jenis_kelamin,
				'gaji' => $gaji,
				'saudara' => $saudara,
				'jurusan' => $jurusan,
				'semester' => $semester,
				'ipk' => $ipk,
				'tunjangan' => $tunjangan,
				'fk_id_mhs' => $fk_id_mhs
		);
		
		$where = array("nim" => $nim);
		//cek apakah sudah mendaftar beasiswa atau belum
		$this->load->model("mahasiswa_model");
		$cek_nim = $this->mahasiswa_model->cek_nim("bea", $where)->num_rows();
		if( $cek_nim === 0 ){
			//cek apakah berhasil mendaftarkan beasiswa
			$this->load->model("mahasiswa_model");
			$daftar = $this->mahasiswa_model->daftar_beasiswa($data);
			if( $daftar ){
				$this->session->set_flashdata("sukses", "Berhasil mendaftar beasiswa");
				redirect(base_url("Mahasiswa/view"));
			}else{
				$this->session->set_flashdata("gagal", "Gagal mendaftar beasiswa");
				redirect(base_url("Mahasiswa/view"));
			}
		}else{
			$this->session->set_flashdata("gagal", "NIM sudah terdaftar beasiswa");
			redirect(base_url("Mahasiswa/view"));
		}	
	}

	//Menampilkan tabel (hidden) di halaman pengumuman
	public function peserta_lolos(){
		$nama = $this->input->post("nama");
		$nim = $this->input->post("nim");

		$this->load->model("mahasiswa_model");
		$result = $this->mahasiswa_model->peserta_lolos($nama, $nim)->num_rows();

		if($result > 0){
			$this->session->set_flashdata("sukses", "berhasil");
			redirect(base_url("Mahasiswa/view/pengumuman"));
		}else{
			$this->session->set_flashdata("gagal", "gagal");
			redirect(base_url("Mahasiswa/view/pengumuman"));
			show_error();
		}
	}



	
}
