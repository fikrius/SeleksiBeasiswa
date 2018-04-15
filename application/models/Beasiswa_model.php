<?php 

class Beasiswa_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	//memasukkan pesan di halaman kontak
	public function kirim_masukan($data){
		$kirim = $this->db->insert("kontak", $data);
		return $kirim;
	}

	public function nama_beasiswa(){
		$this->db->select("nama_beasiswa");
		$this->db->from("pengaturan");
		$result = $this->db->get();
		return $result;
	}

	public function syarat_beasiswa(){
		$query = $this->db->query("SELECT syarat FROM pengaturan");
		return $query;
	}

	public function deskripsi_beasiswa(){
		$query = $this->db->query("SELECT deskripsi FROM pengaturan");
		return $query;
	}

}