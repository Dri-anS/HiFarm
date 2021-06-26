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
	public function artikel()
	{
		$this->load->view('artikel');
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
	
	//tampil kan data diskusi
	public function discussion(){
	    $this->load->model('Hmodel');
	    $dataAsk = $this->Hmodel->ambilData("ask");
	    $data = array(
	        "show" => $dataAsk
	    );
	    
	    $this->load->view('discussion',$data);
	}
	
	//tambah data ask
	public function aksi_ask(){
	    $this->load->model('Hmodel');
	    $dataInputan = array(
	        'username' => $this->session->userdata('username'),
	        'pertanyaan' => $this->input->post('tanya'),
	    );
	    $this->Hmodel->masukan('ask',$dataInputan);
	    
	    //ke diskusi
	    $dataAsk = $this->Hmodel->ambilData("ask");
	    $data = array(
	        "show" => $dataAsk
	    );
	    
	    $this->load->view('discussion',$data);
	}
	
	//hapus data diskusi
	public function hapus($wheres){
	    
	    $inputWhere = array(
	        'id' => $wheres
	    );
	    $this->Hmodel->hapus('ask',$inputWhere);
	    redirect(base_url()."index.php/main_page/discussion");
	}
	
	public function edit(){
	    $this->load->view('edit_form');
	}
	
//  update/edit data diskusi
	public function update(){
	    $inputData = array(
// 	        'username' => $this->input->post('username'),
	        'pertanyaan' => $this->input->post('tanya')
	    );
	    
	    $inputWhere = array(
	        'id' => $this->input->post('id')
	    );
	    
	    
	    $this->Hmodel->perbarui('ask',$inputData,$inputWhere);
	    redirect(base_url()."index.php/main_page/discussion");
	}
	
	public function reply(){
	    $this->load->view('reply');
	}
	
	
	
}
