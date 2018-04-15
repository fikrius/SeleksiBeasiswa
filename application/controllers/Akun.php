<?php

//Controller akses masuk( login, dan daftar )
class Akun extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('akun_model');
		$this->load->helper('url');
	}
	
	public function login(){
		//variabel buat mahasiswa
		$nim = $this->input->post("nim");
		$password = $this->input->post("password");

		//variabel untuk admin
		$user_admin = $this->input->post("nim");
		$pass_admin = $this->input->post("password");

		//untuk login mahasiswa
		$where = array(
			'nim' => $nim,
			'password' => md5($password)
		);

		//untuk login admin
		$where_admin = array(
			'username' => $nim,
			'password' => $password
		);

		$cek = $this->akun_model->cek_login("akun", $where)->num_rows();
		$cek_admin = $this->akun_model->cek_login_admin("pengaturan", $where_admin)->num_rows();
		if( $cek > 0 ){
			$data = $this->akun_model->cek_login("akun", $where)->row_array();
			$data2 = $this->akun_model->pengaturan()->row_array();
			$data_session = array(
				'nama' => $data['nama'],
				'nim' => $data['nim'],
				'tanggal_lahir' => $data['tanggal_lahir'],
				'jenis_kelamin' => $data['jenis_kelamin'],
				'nama_beasiswa' => $data2['nama_beasiswa'],
				'login' => TRUE
			);

			$this->session->set_userdata($data_session);
			redirect(base_url("Mahasiswa/view"));
			// $user_admin === "admin" && $pass_admin === "admin"
		}else if( $cek_admin > 0 ){
			$data = $this->akun_model->pengaturan()->row_array();
			$data_session = array(
				'nama_beasiswa' => $data['nama_beasiswa'],
				'username' => $data['username'],
				'password' => $data['password'],
				'deskripsi' => $data['deskripsi'],
				'syarat' => $data['syarat'],
				'tanggal_edit' => $data['tanggal_edit'],
			);

			$this->session->set_userdata($data_session);
			redirect(base_url("Admin/index"));
		}else{
			$this->session->set_flashdata('gagal', 'NIM atau password salah!!');
			redirect(base_url("Beasiswa/masuk"));
		}
	}

	public function daftar(){

		$nama = $this->input->post("nama");
		$nim = $this->input->post("nim");
		$password = $this->input->post("password");
		$tanggal_lahir = $this->input->post("tanggal_lahir");
		$jenis_kelamin = $this->input->post("jenis_kelamin");
		$konfirmasi_password = $this->input->post("konfirmasi");

		$data = array(
				"nama" => $nama,
				"nim" => $nim,
				"password" => md5($password),
				"tanggal_lahir" => $tanggal_lahir,
				"jenis_kelamin" => $jenis_kelamin
		);

		//cek konfirmasi password
		if( $password === $konfirmasi_password ){
			//cek nim apakah sudah terdaftar atau belum
			$where = array(
				'nim' => $nim,
			);

			$cek = $this->akun_model->cek_nim("akun", $where)->num_rows();
			if( $cek > 0 ){
				$this->session->set_flashdata('gagal', 'NIM sudah terdaftar!');
				redirect('Beasiswa/daftar');
			}else{
				$daftar = $this->akun_model->daftar($data);
				if( $daftar > 0 ){
					$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
					redirect('Beasiswa/daftar');
				}else{
					redirect('Beasiswa/daftar');
				}
			}

		}else{
			$this->session->set_flashdata("konfirmasi", "Konfirmasi password tidak cocok!");
			redirect("Beasiswa/daftar");
		}

	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Beasiswa/view'));
	}

	
}