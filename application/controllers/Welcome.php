<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

 public function __construct()
	{
	    parent::__construct();
	 /* if($this->session->userdata("email")!=""){
	   	redirect(base_url()."my_profile");
	   }
*/
	}


	public function index()
	 {
		$this->load->view('welcome_message');
	}

	public function admin_login()
	 {
		$this->load->view('admin_login');
	 }

	public function register_login()
	 {
		$this->load->view('register_login');
	 }

	 public function forget_pass()
	 {
		$this->load->view('forget_pass');
	 }

	public function registration()
	{
		$this->load->model("Welcome_model");
		$this->Welcome_model->registration();
	}

		public function login(){
		$this->load->model("Welcome_model");
		$this->Welcome_model->login();
	}

	public function get_sect(){
		$this->load->model("Welcome_model");
		$this->Welcome_model->get_sect();
	}

	public function get_sub_sect(){
		$this->load->model("Welcome_model");
		$this->Welcome_model->get_sub_sect();
	}

	public function get_state(){
		$this->load->model("Welcome_model");
		$this->Welcome_model->get_state();
	}
	public function get_city(){
		$this->load->model("Welcome_model");
		$this->Welcome_model->get_city();
	}

	public function get_last_qualification(){
		$this->load->model("Welcome_model");
		$this->Welcome_model->get_last_qualification();
	}

	public function get_cast(){
		$this->load->model("Welcome_model");
		$this->Welcome_model->get_cast();
	}

	public function get_marital_status(){
		$this->load->model("Welcome_model");
		$this->Welcome_model->get_marital_status();
	}

	public function get_career_status(){
		$this->load->model("Welcome_model");
		$this->Welcome_model->get_career_status();
	}

	public function get_height(){
		$this->load->model("Welcome_model");
		$this->Welcome_model->get_height();
	}


	public function profile_search(){
		$this->load->model("Welcome_model");
		$this->Welcome_model->profile_search();
	}

	public function sent_received(){
		$this->load->model("Welcome_model");
		$this->Welcome_model->sent_received();
	}

	public function partner_full_detail(){
		$this->load->model("Welcome_model");
		$this->Welcome_model->partner_full_detail();
	}


	public function adminlogin()
	 {
	$this->load->model("Welcome_model");
	$this->Welcome_model->adminlogin();
	 }

	 public function interest_action(){
		$this->load->model("Welcome_model");
		$this->Welcome_model->interest_action();
	}

	 public function send_otp()
	 {
	$this->load->model("Welcome_model");
	$this->Welcome_model->send_otp();
	 }

	  public function reset_pass()
	 {
	$this->load->model("Welcome_model");
	$this->Welcome_model->reset_pass();
	 }

	public function logout(){
    $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
           $this->session->unset_userdata($key);
		 }
		    $this->session->sess_destroy();
		    redirect(base_url());
		}
}
