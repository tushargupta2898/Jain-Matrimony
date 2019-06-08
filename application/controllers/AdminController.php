<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	 public function __construct()
	{
	    parent::__construct();
	  if($this->session->userdata("admin")==""){
	   	redirect(base_url());
	   }

	    $this->load->model("AdminModel");

	}

	public function dashboard(){
		$this->load->view("admin/dashboard");
	  }

	  public function state(){
		$this->load->view("admin/state");
	  }

	    public function city(){
		$this->load->view("admin/city");
	  }

	   public function cast(){
		$this->load->view("admin/cast");
	  }

	   public function marital_status(){
		$this->load->view("admin/marital_status");
	  }

	   public function sect(){
		$this->load->view("admin/sect");
	  }

	   public function sub_sect(){
		$this->load->view("admin/sub_sect");
	  }

	   public function career_status(){
		$this->load->view("admin/career_status");
	  }

	   public function admin_pwd(){
		$this->load->view("admin/admin_pwd");
	  }


	  public function insert($table_name,$id)
	{
		$this->AdminModel->insert($table_name,null,$id);
	}
		/////////////////////////////////
	public function state_list(){
		$query=$this->AdminModel->state_list();
	}
	//////////////////////////////////
	public function state_record()
	{
		$this->AdminModel->state_record();
	}


		public function city_list(){
		$query=$this->AdminModel->city_list();
		echo "<table class='table table-hover table-strip'>
						<thead class='bg-secondary'>
							<tr>
							<th>S.No.</th>
							<th>State</th>
							<th>City</th>
							<th>Action<th>
							</tr>
						<thead>
						<tbody>";
		if($query->num_rows()>0){
			$i=1;
			foreach ($query->result() as $value){
				$state_name=$this->db->get_where("state",array("t_status"=>0,"state_id"=>$value->state_id))->row()->state_name;
				echo "<tr>";
				echo "<td>".$i."</td>";
				echo "<td>".$state_name."</td>";
				echo "<td>".$value->city_name."</td>";
				echo "<td><button type='button' class='btn btn-warning' onclick='get_record(".$value->city_id.")'><i class='fa fa-edit'></i></button>&nbsp;&nbsp;&nbsp;<button type='button' class='btn btn-danger' onclick='delete_record(".$value->city_id.")'><i class='fa fa-trash'></i></button></td>";
				echo "</tr>";
				$i++;
			}
		}
		echo "			</tbody>
			</table>";
	}
	/////////////////////////////
	public function city_record()
	{
		$this->AdminModel->city_record();
	}
	///////////////////////////////
	public function cast_list(){
		$query=$this->AdminModel->cast_list();
	}
	//////////////////////////////////
	public function cast_record()
	{
		$this->AdminModel->cast_record();
	}
	public function marital_status_list(){
		$query=$this->AdminModel->marital_status_list();
	}
	//////////////////////////////////
	public function marital_status_record()
	{
		$this->AdminModel->marital_status_record();
	}
	//////////////////
		public function sect_list(){
		$query=$this->AdminModel->sect_list();
	}
	//////////////////////////////////
	public function sect_record()
	{
		$this->AdminModel->sect_record();
	}
	///////////////////
	public function full_detail()
	{
		$this->load->view('admin/full_detail');
	}
	//////////////////////
	public function admin_update_profile()
	{
		$this->load->view('admin/admin_update_profile');
	}
	//////////////////////
			public function get_all_member(){
		$query=$this->AdminModel->get_all_member();
		echo "<table id='example' class='table table-hover table-strip'>
						<thead class='bg-secondary'>
							<tr>
							<th>S.No.</th>
							<th>Name</th>
							<th>Gender</th>
							<th>Age (Years)</th>
							<th>Marital Status</th>
							<th>Cast</th>
							<th>Sect</th>
							<th>Action<th>
							</tr>
						<thead>
						<tbody>";
						/*<th>Education</th>
							<th>Career</th>
							<th>State/City</th>*/
		if($query->num_rows()>0){
			$i=1;
			foreach ($query->result() as $value){
				$full_detail=base_url()."AdminController/full_detail/".$value->user_id;
				$update_detail=base_url()."AdminController/admin_update_profile/".$value->user_id;
				echo "<tr>";
				echo "<td>".$i."</td>";
				echo "<td><a href='".$full_detail."'>".$value->name."</a></td>";
				echo "<td>".$value->gender."</td>";
				echo "<td>".$value->age."</td>";
				echo "<td>".$value->marital_status."</td>";
				echo "<td>".$value->cast."</td>";
				echo "<td>".$value->sect."</td>";
				/*echo "<td>".$value->last_qualification."</td>";
				echo "<td>".$value->career_status."</td>";*/
				/*echo "<td>".$value->state."/".$value->city."</td>";*/
				echo "<td><a href='".$update_detail."' class='btn btn-warning'><i class='fa fa-edit'></i></a></td>";
				echo "</tr>";
				$i++;
			}
		}
		echo "			</tbody>
			</table>";
	}
	/////////////////////////////
	public function sub_sect_record()
	{
		$this->AdminModel->sub_sect_record();
	}

		public function delete_record($table_name,$id)
	{
		$this->AdminModel->delete_record($table_name,$id);
	}
	/////////////////////////////////

	public function sub_sect_list(){
		$query=$this->AdminModel->sub_sect_list();
		echo "<table class='table table-hover table-strip'>
						<thead class='bg-secondary'>
							<tr>
							<th>S.No.</th>
							<th>Sect</th>
							<th>Sub Sect</th>
							<th>Action<th>
							</tr>
						<thead>
						<tbody>";
		if($query->num_rows()>0){
			$i=1;
			foreach ($query->result() as $value){
				$sect_name=$this->db->get_where("sect",array("t_status"=>0,"sect_id"=>$value->sect_id))->row()->name;
				echo "<tr>";
				echo "<td>".$i."</td>";
				echo "<td>".$sect_name."</td>";
				echo "<td>".$value->name."</td>";
				echo "<td><button type='button' class='btn btn-warning' onclick='get_record(".$value->sub_sect_id.")'><i class='fa fa-edit'></i></button>&nbsp;&nbsp;&nbsp;<button type='button' class='btn btn-danger' onclick='delete_record(".$value->sub_sect_id.")'><i class='fa fa-trash'></i></button></td>";
				echo "</tr>";
				$i++;
			}
		}
		echo "			</tbody>
			</table>";
	}
	/////////////////////////////
	public function career_status_list(){
		$query=$this->AdminModel->career_status_list();
	}
	//////////////////////////////////
	public function career_status_record()
	{
		$this->AdminModel->career_status_record();
	}

	 public function change_admin_pwd()
   {
  $this->AdminModel->change_admin_pwd();
  }
	
}
