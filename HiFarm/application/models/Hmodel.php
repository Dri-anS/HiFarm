<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hmodel extends CI_Model {

	public function cekLogin($data){
        $this->db->where($data);
        return $this->db->get('user');
    }
	
	public function masukan($tabel,$data){
        $datany = $this->db->insert($tabel,$data);
        return $datany;
    }
	
	public function ambilData($tabel){
        $datany = $this->db->get($tabel);
        return $datany->result_array();
    }

}