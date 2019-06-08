<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserViewController extends CI_Controller {

	 public function __construct()
	{
	    parent::__construct();
	  if($this->session->userdata("email")==""){
	   	redirect(base_url());
	   }
	}



	public function index()
	 {
		$this->load->view('user/index');
	}

	public function home()
	 {
		$this->load->view('user/home');
	}

	public function my_photos()
	 {
	 	
		$this->load->view('user/my_photos');
	}

	public function profile_search()
	 {
		$this->load->view('user/profile_search');
	}

	public function interest()
	 {
		$this->load->view('user/interest');
	}

	public function accept_reject()
	 {
		$this->load->view('user/accept_reject');
	}

	public function full_detail()
	 {
		$this->load->view('user/full_detail');
	}

	public function forget_pwd()
	 {
		$this->load->view('user/forget_pwd');
	}
	
}
