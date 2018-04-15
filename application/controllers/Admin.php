<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Controller untuk admin, setelah login sebagai admin
class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->helper('url'); 
	}

	//load halaman utama admin
	public function index(){
		$this->load->model("Admin_model");
		
		$data['jumlah_akun'] = $this->Admin_model->jumlah_akun();
		$data['jumlah_akun_laki'] = $this->Admin_model->jumlah_akun_laki();
		$data['jumlah_akun_perempuan'] = $this->Admin_model->jumlah_akun_perempuan();

		$data['jumlah_beasiswa'] = $this->Admin_model->jumlah_beasiswa();
		$data['jumlah_beasiswa_laki'] = $this->Admin_model->jumlah_beasiswa_laki();
		$data['jumlah_beasiswa_perempuan'] = $this->Admin_model->jumlah_beasiswa_perempuan();

		$data['tampil_peserta_lolos'] = $this->Admin_model->tampil_peserta_lolos()->num_rows();
		$data['jumlah_peserta_lolos_laki'] = $this->Admin_model->jumlah_peserta_lolos_laki()->num_rows();
		$data['jumlah_peserta_lolos_perempuan'] = $this->Admin_model->jumlah_peserta_lolos_perempuan()->num_rows();

		$data['jumlah_feedback'] = $this->Admin_model->jumlah_feedback();
		$this->load->view('templates/header');
		$this->load->view('templates/favicon');
		$this->load->view('pages/admin/home_admin', $data);
		$this->load->view('templates/footer');
	}

	//menampilkan akun yang terdaftar di database akun
	public function tampil_akun(){
		$data['akun'] = $this->Admin_model->tampil_akun();
		$data['jumlah_feedback'] = $this->Admin_model->jumlah_feedback();
		$this->load->view('templates/header');
		$this->load->view('templates/favicon');
		$this->load->view('pages/admin/jumlah_akun_user', $data);
		$this->load->view('templates/footer2');
	}

	public function tampil_ubah_akun($id){
		$where = array('id_mhs' => $id);
		$data['akun'] = $this->Admin_model->tampil_ubah_akun($where,'akun')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/favicon');
		$this->load->view('pages/admin/ubah_akun_user', $data);
		$this->load->view('templates/footer');
		
	}

	public function ubah_akun(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
	 
		$data = array(
			'nama' => $nama,
			'nim' => $nim,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin
		);
	 
		$where = array(
			'id_mhs' => $id
		);
	 
		$this->Admin_model->ubah_akun($where,$data,'akun');
		redirect(base_url('Admin/tampil_akun'));
	}

	public function hapus_akun(){
		$id = $this->uri->segment(3);
		$this->load->model("Admin_model");
		$this->Admin_model->hapus_akun($id);
		redirect(base_url("Admin/tampil_akun"));
	}

	//menampilkan pendaftar beasiswa 
	public function tampil_beasiswa(){
		$data['bea'] = $this->Admin_model->tampil_beasiswa();
		$data['jumlah_feedback'] = $this->Admin_model->jumlah_feedback();
		$this->load->view('templates/header');
		$this->load->view('templates/favicon');
		$this->load->view('pages/admin/jumlah_pendaftar_beasiswa', $data);
		$this->load->view('templates/footer2');
	}

	public function tampil_ubah_beasiswa($id){
		$where = array('id_bea' => $id);
		$data['bea'] = $this->Admin_model->tampil_ubah_beasiswa("bea", $where)->result();
		$data['jumlah_feedback'] = $this->Admin_model->jumlah_feedback();
		$this->load->view('templates/header');
		$this->load->view('templates/favicon');
		$this->load->view('pages/admin/ubah_pendaftar_beasiswa', $data);
		$this->load->view('templates/footer2');
	}

	public function hapus_beasiswa(){
		$id = $this->uri->segment(3);
		$this->load->model("Admin_model");
		$this->Admin_model->hapus_beasiswa($id);
		redirect(base_url("Admin/tampil_beasiswa"));
	}

	public function ubah_beasiswa(){
		$id = $this->input->post('id');
		$gaji = $this->input->post('gaji');
		$saudara = $this->input->post('saudara');
		$jurusan = $this->input->post('jurusan');
		$semester = $this->input->post('semester');
		$ipk = $this->input->post('ipk');
	 	$tunjangan = $gaji/$saudara;

		$data = array(
			'gaji' => $gaji,
			'saudara' => $saudara,
			'jurusan' => $jurusan,
			'semester' => $semester,
			'ipk' => $ipk,
			'tunjangan' => $tunjangan
		);
	 
		$where = array(
			'id_bea' => $id
		);
	 
		$this->Admin_model->ubah_beasiswa("bea",$where,$data);
		redirect(base_url('Admin/tampil_beasiswa'));
	}

	//peserta lolos
	public function peserta_lolos(){
		$jumlah_lolos = $this->input->post("set_lolos");

		if(!empty($jumlah_lolos)){
			$this->load->model("Admin_model");
			$data['lolos'] = $this->Admin_model->peserta_lolos($jumlah_lolos);
			$data['jumlah_feedback'] = $this->Admin_model->jumlah_feedback();
			$this->load->view('templates/header');
			$this->load->view('templates/favicon');
			$this->load->view('pages/admin/peserta_lolos', $data);
			$this->load->view('templates/footer2');
		}else{
			$this->load->model("Admin_model");
			$data["lolos"] = $this->Admin_model->tampil_peserta_lolos();
			$data['jumlah_feedback'] = $this->Admin_model->jumlah_feedback();
			$this->load->view('templates/header');
			$this->load->view('templates/favicon');
			$this->load->view('pages/admin/peserta_lolos', $data);
			$this->load->view('templates/footer2');
		}
	}

	//menghapus data di tabel bea. Kemudian tabel bea digunakan untuk menyimpan data beasiswa periode selanjutnya
	public function hapus_peserta_lolos(){
		$hapus = $this->admin_model->hapus_peserta_lolos();
		if($hapus){
			$this->session->set_flashdata("sukses", "Data berhasil dikosongkan");
			redirect(base_url("Admin/peserta_lolos"));
		}
	}


	//menampilkan feedback
	public function tampil_feedback(){
		$data['kontak'] = $this->Admin_model->tampil_feedback();
		$this->load->view('templates/header');
		$this->load->view('templates/favicon');
		$this->load->view('pages/admin/feedback', $data);
		$this->load->view('templates/footer2');
	}

	public function hapus_feedback($id){
		$id = $this->uri->segment(3);
		$this->load->model("Admin_model");
		$this->Admin_model->hapus_feedback($id);
		redirect(base_url("Admin/tampil_feedback"));
	}

	//pengaturan sistem beasiswa
	public function pengaturan(){
		$this->load->view('templates/header');
		$this->load->view('templates/favicon');
		$this->load->view("pages/admin/pengaturan");
		$this->load->view('templates/footer');
	}

	public function ubah_pengaturan(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$konfirmasi_password = $this->input->post("konfirmasi_password");
		$nama_beasiswa = $this->input->post("nama_beasiswa");
		$deskripsi_beasiswa = $this->input->post("deskripsi");
		$syarat_beasiswa = $this->input->post("syarat");
		$tanggal_edit = $this->input->post("tanggal_edit");

		$data = array(
			'username' => $username,
			'password' => $password, 
			'nama_beasiswa' => $nama_beasiswa,
			'deskripsi' => $deskripsi_beasiswa,
			'syarat' => $syarat_beasiswa,
			'tanggal_edit' => $tanggal_edit
		);

		//cek password dan konfirmasi password
		if($password === $konfirmasi_password){
			$update = $this->admin_model->ubah_pengaturan($data);
			if($update){
				$this->session->set_flashdata("sukses", "Pengaturan berhasil diubah! Silakan masuk lagi");
				redirect(base_url("Admin/pengaturan"));
			}else{
				$this->session->set_flashdata("gagal", "Pengaturan gagal diubah!");
				redirect(base_url("Admin/pengaturan"));
			}
		}else{
			$this->session->set_flashdata("konfirmasi", "Konfirmasi password salah!");
			redirect(base_url("Admin/pengaturan"));
		}

	}

}
