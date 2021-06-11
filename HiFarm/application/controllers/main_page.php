<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main_page extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Hmodel');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->view('home');
	}
	
	public function ask()
	{
		$this->load->view('ask');
	}
	
	public function ask_2()
	{
		$this->load->view('ask_2');
	}
	
	//login
	public function login()
	{
		$this->load->view('login');
	}
	
	public function aksi_login(){
	    $data = array(
	        'username' => $this->input->post('user'),
	        'password' => $this->input->post('pass')
	    );
	    
	    // Load Model
	    
	    $cek = $this->Hmodel->cekLogin($data)->num_rows();
	    
	    $data_user = $this->Hmodel->cekLogin($data)->row();
	    
	    if ($cek > 0) {
	        $sess = array(
	            'username'  => $data_user->username,
	            'status'	=> TRUE
	        );
	        
	        $this->session->set_userdata($sess);
// 	        redirect(base_url('home_user'));
	        $this->load->view('home_user');
	    }else{
	        redirect(base_url());
	    }
	    
	}
	
// 	public function home_user(){
// 	    if ($this->session->userdata('status') == TRUE ) {
// 	        $this->load->view('halaman_user');
// 	    }else{
// 	        redirect(base_url());
// 	    }
	    
// 	}
	
	//diskusi
	public function discussion()
	{
		$this->load->view('discussion');
	}
	
	//sign up
	public function sign_up()
	{
		$this->load->view('sign_up');
	}
	
	public function aksi_daftar(){
	    
	    $dataInputan = array(
	        'username' => $this->input->post('user'),
	        'password' => $this->input->post('pass')
	    );
	    $this->Hmodel->masukan('user',$dataInputan);
	    redirect(base_url(),'refresh');
	}
	
	//logout
	public function logout(){
	    session_destroy();
	    redirect(base_url());
	}
	
}
