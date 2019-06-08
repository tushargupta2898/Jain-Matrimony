<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewController extends CI_Controller {

 public function __construct()
	{
	    parent::__construct();
	  if($this->session->userdata("email")!=""){
	   	redirect(base_url()."my_profile");
	   }
}


	public function index()
	 {
		$this->load->view('welcome_message');
	}

	public function register_login()
	 {
		$this->load->view('register_login');
	 }
}
