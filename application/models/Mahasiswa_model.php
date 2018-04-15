<?php  

class Mahasiswa_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	public function daftar_beasiswa($data){
		$daftar = $this->db->insert("bea",$data);
		return $daftar;
	}

	public function cek_nim($table, $where){
		return $this->db->get_where($table, $where);
	}

	//mengambil id_mhs, dan dimasukkan ke fk_id_mhs 
	public function getFk($nim){
		// $this->db->select("id_mhs");
		// $this->db->from("akun");
		// $this->db->where("nim", $nim);
		// $query = $this->db->get();
		// return $query;
		$query = $this->db->query("SELECT id_mhs FROM akun WHERE nim='$nim'");
		return $query;
	}

	//PESERTA LOLOS
	public function peserta_lolos($nama, $nim){
		$this->db->select("*");
		$this->db->from("bea");
		$this->db->where("ipk >=", "3.5");
		$this->db->where("nama", $nama);
		$this->db->where("nim", $nim);
		$this->db->order_by("tunjangan", "ASC");
		$query = $this->db->get();
		return $query;
	}

}