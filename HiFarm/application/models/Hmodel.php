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
    
    public function hapus($tabel,$where){
        $datany = $this->db->delete($tabel,$where);
        return $datany;
    }
    
    public function perbarui($tabel,$data,$where){
        $datany = $this->db->update($tabel,$data,$where);
        return $datany;
    }
    
    public function select($tabel,$where){
        $datany = $this->db->where($tabel,$where);
        return $datany;
    }

}