<?php

class Akun_model extends CI_Model{

	function __construct(){
        $this->load->database();
    }

    //PENGATURAN BEASISWA
	//1. nama beasiswa
	public function pengaturan(){
		return $this->db->get("pengaturan");
	}

    // LOGIN & REGISTRASI

	public function daftar($data){
		$daftar = $this->db->insert("akun", $data);
		return $daftar;
	}

	public function cek_nim($table,$where){
		return $this->db->get_where($table, $where);
	}

	public function cek_login($table, $where){
		return $this->db->get_where($table, $where);
	}

	public function cek_login_admin($table, $where){
		return $this->db->get_where($table, $where);
	}




}