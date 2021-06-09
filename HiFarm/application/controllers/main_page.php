<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main_page extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		//$this->load->model('modelku');
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
	
	public function login()
	{
		$this->load->view('login');
	}
	
}
