<?php
class AdminModel extends CI_Model {

	public function insert($table_name,$data,$id)
	{
	$fstatus=$this->input->post("fstatus");
	
	$fields=$this->db->field_data($table_name);
	foreach ($fields as $field) {
		if($field->primary_key==1)
			continue;
		$value=$this->input->post($field->name);
		if(!empty($value)){
				if($field->name=="password"){
					$data[$field->name]=md5($value);
				}else{
					$data[$field->name]=$value;
				}
			}
		}

		if($fstatus=="add"){
			$data["entry_date"]=date("Y-m-d");
			$insert_query=$this->db->insert($table_name,$data);
			if($insert_query){
				echo "1";
			}else{
				echo "2";
			}
		}

		if($fstatus=="edit"){
			$id_value=$this->input->post("sno");
			$this->db->where($id,$id_value);
			$update_query=$this->db->update($table_name,$data);
			
			if($update_query){
				echo "1";
			}else{
				echo "2";
			}

		}
	}

	public function state_list(){
		$query=$this->db->order_by("state_name","ASC")->get_where("state",array("t_status"=>0))->result();
		
		echo  json_encode($query);
	}
	////////////////////////////////////////
	public function state_record(){
		$id=$this->input->get("id");
		$query=$this->db->get_where("state",array("state_id"=>$id,"t_status"=>0));
		$data=array();
		if($query->num_rows()==1){
			foreach ($query->result() as $value) {
				$data['id']=$value->state_id;
				$data['state_name']=$value->state_name;
				$data['msg']="success";
			}
		}else{
			$data['msg']="fail";
		}
		echo json_encode($data);
	}
	/////////////////////////////
	public function city_list(){
		$query=$this->db->order_by("city_name","ASC")->get_where("city",array("t_status"=>0));
		
		return $query;
	}
	////////////////////////
	public function city_record(){
		$id=$this->input->get("id");
		$query=$this->db->get_where("city",array("city_id"=>$id,"t_status"=>0));
		$data=array();
		if($query->num_rows()==1){
			foreach ($query->result() as $value) {
				$data['id']=$value->state_id;
				$data['state_id']=$value->state_id;
				$data['city_name']=$value->city_name;
				$data['msg']="success";
			}
		}else{
			$data['msg']="fail";
		}
		echo json_encode($data);
	}
	/////////////////////////////
	public function cast_list(){
		$query=$this->db->order_by("name","ASC")->get_where("cast",array("t_status"=>0))->result();
		
		echo  json_encode($query);
	}
	////////////////////////////////////////
	public function cast_record(){
		$id=$this->input->get("id");
		$query=$this->db->get_where("cast",array("cast_id"=>$id,"t_status"=>0));
		$data=array();
		if($query->num_rows()==1){
			foreach ($query->result() as $value) {
				$data['id']=$value->cast_id;
				$data['name']=$value->name;
				$data['msg']="success";
			}
		}else{
			$data['msg']="fail";
		}
		echo json_encode($data);
	}
	/////////////////////////////
	public function marital_status_list(){
		$query=$this->db->order_by("marital_status","ASC")->get_where("marital_status",array("t_status"=>0))->result();
		
		echo  json_encode($query);
	}
	////////////////////////////////////////
	public function marital_status_record(){
		$id=$this->input->get("id");
		$query=$this->db->get_where("marital_status",array("id"=>$id,"t_status"=>0));
		$data=array();
		if($query->num_rows()==1){
			foreach ($query->result() as $value) {
				$data['id']=$value->id;
				$data['marital_status']=$value->marital_status;
				$data['msg']="success";
			}
		}else{
			$data['msg']="fail";
		}
		echo json_encode($data);
	}
	/////////////////////////////
	public function sect_list(){
		$query=$this->db->order_by("name","ASC")->get_where("sect",array("t_status"=>0))->result();
		
		echo  json_encode($query);
	}
	////////////////////////////////////////
	public function sect_record(){
		$id=$this->input->get("id");
		$query=$this->db->get_where("sect",array("sect_id"=>$id,"t_status"=>0));
		$data=array();
		if($query->num_rows()==1){
			foreach ($query->result() as $value) {
				$data['id']=$value->sect_id;
				$data['name']=$value->name;
				$data['msg']="success";
			}
		}else{
			$data['msg']="fail";
		}
		echo json_encode($data);
	}
	/////////////////////////////
	public function sub_sect_list(){
		$query=$this->db->order_by("name","ASC")->get_where("sub_sect",array("t_status"=>0));
		
		return $query;
	}
	////////////////////////
	public function sub_sect_record(){
		$id=$this->input->get("id");
		$query=$this->db->get_where("sub_sect",array("sub_sect_id"=>$id,"t_status"=>0));
		$data=array();
		if($query->num_rows()==1){
			foreach ($query->result() as $value) {
				$data['id']=$value->sub_sect_id;
				$data['sect_id']=$value->sect_id;
				$data['name']=$value->name;
				$data['msg']="success";
			}
		}else{
			$data['msg']="fail";
		}
		echo json_encode($data);
	}
	/////////////////////////////
	public function get_all_member(){
		$gender=$this->input->get("gender");
		/*$query=$this->db->select("A.user_id,A.name,A.gender,C.name AS sect,E.name AS cast,F.state_name AS state,G.city_name AS city,H.name AS last_qualification,I.name AS career_status")*/
		$query=$this->db->select("A.user_id,A.name,A.gender,A.age,C.name AS sect,E.name AS cast,F.state_name AS state,J.marital_status AS marital_status")
							  ->from("user_detail A")
							  ->join("sect C","A.sect=C.sect_id")
							  ->join("cast E","A.cast=E.cast_id")
							  ->join("state F","A.state=F.state_id")
							  ->join("marital_status J","A.marital_status=J.id")
							 /* ->join("city G","A.state=G.city_id")
							  ->join("qualification H","A.last_qualification=H.id")
							  ->join("career_status I","A.career_status=I.id")*/
							  ->where(array("A.gender"=>$gender))
							  ->get();
		return $query;
	}

	public function delete_record($table_name,$id){
		$id_value=$this->input->post("id");
		$this->db->where($id,$id_value);
        $query=$this->db->update($table_name,array("t_status"=>1));
        if($query){
        	echo "1";
        }else{
        	echo "2";
        } 
	}
	public function career_status_list(){
		$query=$this->db->order_by("name","ASC")->get_where("career_status",array("t_status"=>0))->result();
		
		echo  json_encode($query);
	}
	////////////////////////////////////////
	public function career_status_record(){
		$id=$this->input->get("id");
		$query=$this->db->get_where("career_status",array("id"=>$id,"t_status"=>0));
		$data=array();
		if($query->num_rows()==1){
			foreach ($query->result() as $value) {
				$data['id']=$value->id;
				$data['name']=$value->name;
				$data['msg']="success";
			}
		}else{
			$data['msg']="fail";
		}
		echo json_encode($data);
	}
	/////////////////////////////
		public function change_admin_pwd()
	{
		$email=$this->session->userdata("admin");
	    $pwd=md5($this->input->post("pwd"));
		$new_pwd1=$this->input->post("pwd1");

		$old_pwd_check=$this->db->get_where("admin",array("email"=>$email,"pwd"=>$pwd));
		
		if($old_pwd_check->num_rows()==1){
			$this->db->where("email",$email);
			$this->db->update("admin",array("pwd"=>md5($new_pwd1)));
			$this->session->set_flashdata("msg","Password has been changed successfully.");
		}else{
			$this->session->set_flashdata("msg","Wrong Password.");
		}
		redirect("admin_pwd");
		
	}

}
