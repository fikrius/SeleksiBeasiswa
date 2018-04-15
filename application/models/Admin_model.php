<?php 

class Admin_model extends CI_model{

	function __construct(){
		$this->load->database();
	}

	// AKUN
	public function tampil_akun(){
		return $this->db->get('akun');
	}

	public function hapus_akun($id){
		$this->db->where("id_mhs", $id);
		$this->db->delete("akun");
	}

	public function jumlah_akun(){
		$query = $this->db->get("akun");
		return $query->num_rows();
	}

	public function jumlah_akun_laki(){
		$query = $this->db->query("SELECT jenis_kelamin FROM akun WHERE jenis_kelamin='P'");
		return $query->num_rows();
	}

	public function jumlah_akun_perempuan(){
		$query = $this->db->query("SELECT jenis_kelamin FROM akun WHERE jenis_kelamin='W'");
		return $query->num_rows();
	}

	public function tampil_ubah_akun($where,$table){		
		return $this->db->get_where($table,$where);
	}

	public function ubah_akun($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	//BEASISWA
	public function tampil_beasiswa(){
		return $this->db->get('bea');
	}

	public function tampil_ubah_beasiswa($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function ubah_beasiswa($table, $where, $data){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function hapus_beasiswa($id){
		$this->db->where("id_bea", $id);
		$this->db->delete("bea");
	}

	public function jumlah_beasiswa(){
		$query = $this->db->get("bea");
		return $query->num_rows();
	}

	public function jumlah_beasiswa_laki(){
		$query = $this->db->query("SELECT jenis_kelamin FROM bea WHERE jenis_kelamin='P'");
		return $query->num_rows();
	}

	public function jumlah_beasiswa_perempuan(){
		$query = $this->db->query("SELECT jenis_kelamin FROM bea WHERE jenis_kelamin='W'");
		return $query->num_rows();
	}

	//FEEDBACK
	public function tampil_feedback(){
		return $this->db->get('kontak');
	}

	public function hapus_feedback($id){
		$this->db->where("id_kontak", $id);
		$this->db->delete("kontak");
	}

	public function jumlah_feedback(){
		$query = $this->db->get("kontak");
		return $query->num_rows();
	}

	//PESERTA LOLOS
	public function tampil_peserta_lolos(){
		$this->db->select("*");
		$this->db->from("bea");
		$this->db->where("ipk >=", "3.5");
		$this->db->order_by("tunjangan", "ASC");
		$query = $this->db->get();
		return $query;
	}

	public function jumlah_peserta_lolos_laki(){
		$this->db->select("*");
		$this->db->from("bea");
		$this->db->where("ipk >=", "3.5");
		$this->db->where("jenis_kelamin", "P");
		$this->db->order_by("tunjangan", "ASC");
		$query = $this->db->get();
		return $query;
	}

	public function jumlah_peserta_lolos_perempuan(){
		$this->db->select("*");
		$this->db->from("bea");
		$this->db->where("ipk >=", "3.5");
		$this->db->where("jenis_kelamin", "W");
		$this->db->order_by("tunjangan", "ASC");
		$query = $this->db->get();
		return $query;
	}

	public function peserta_lolos($limit){
		$this->db->select("*");
		$this->db->from("bea");
		$this->db->where("ipk >=", "3.5");
		$this->db->order_by("tunjangan", "ASC");
		$this->db->limit($limit);
		$query = $this->db->get();
		return $query;
	}

	public function hapus_peserta_lolos(){
		$query = $this->db->empty_table("bea");
		return $query;
	}

	//UPDATE PENGATURAN
	public function ubah_pengaturan($data){
		$query = $this->db->update("pengaturan", $data);
		return $query;
	}


}