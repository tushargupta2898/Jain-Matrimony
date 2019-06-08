<?php
class Welcome_model extends CI_Model {

	public function registration()
	{
		$name=$this->input->post("name");
		$mobile_no=$this->input->post("mobile_no");
		$email=$this->input->post("email");
		$age=$this->input->post("age");
		
		$sect=$this->input->post("sect");
		$sub_sect=$this->input->post("sub_sect");
		$cast=$this->input->post("cast");
		$gender=$this->input->post("gender");
		$state=$this->input->post("state");
		$pass=md5($this->input->post("pass"));
		$dob="1970-01-01";
		$marital_status=$this->input->post("marital_status");
		if($gender=="male"){
			$profile_photo="groom.png";
		}else if($gender=="female"){
			$profile_photo="bride.png";
		}else{
			$profile_photo="";
		}

		$already_exists_check=$this->db->select("email")->get_where("user_detail",array("email"=>$email));
		if($already_exists_check->num_rows()>0){
			$result = array('result' =>'already');
			if($this->input->post("type")=="device"){
				$this->session->set_flashdata(array('fail'=>'Email ID Already Exists'));
						redirect(base_url()."register_login");
					}
		}else{

				$data=array("name"=>$name,"mobile_no"=>$mobile_no,"email"=>$email,"age"=>$age,"sect"=>$sect,"sub_sect"=>$sub_sect,"cast"=>$cast,"gender"=>$gender,"state"=>$state,"pass"=>$pass,"marital_status"=>$marital_status,"image"=>$profile_photo,"dob"=>$dob);
				$query=$this->db->insert("user_detail",$data);
				$data['profile_photo']=$profile_photo;
			
				if($query){
					$result = array('result' =>'success');
					$user_id=$this->db->insert_id();
					$data['user_id']=$user_id;
					$this->session->set_userdata($data);

					if($this->input->post("type")=="device"){
						redirect(base_url()."my_profile");
					}
				}else{
					$result = array('result' =>'fail');
				}

		}
	
		echo json_encode($result);
	}
//////////////////////////////////////////////////////
	public function login()
	{
		$email=$this->input->post("email");
		$pass=md5($this->input->post("pass"));

		$where=array("email"=>$email,"pass"=>$pass);
		$query=$this->db->get_where("user_detail",$where);
		
		if($query->num_rows()==1){
			$user_id=$query->row()->user_id;
			$marital_status=$query->row()->marital_status;
			$gender=$query->row()->gender;
			$email=$query->row()->email;
			$name=$query->row()->name;
			$age=$query->row()->age;
			$sect=$query->row()->sect;
			$sub_sect=$query->row()->sub_sect;
			$cast=$query->row()->cast;
			$state=$query->row()->state;
			$city=$query->row()->city;
			$update_percent=$query->row()->update_percent;
			$profile_photo=$query->row()->image;
			if($gender=="male" && $profile_photo==""){
				$profile_photo="groom.png";
			}

			if($gender=="female" && $profile_photo==""){
				$profile_photo="bride.png";
			}

			$data=array('user_id'=>$user_id,'marital_status'=>$marital_status,'gender'=>$gender,'email'=>$email,'name'=>$name,'age'=>$age,'sect'=>$sect,'sub_sect'=>$sub_sect,'cast'=>$cast,'state'=>$state,'city'=>$city,'update_percent'=>$update_percent,'profile_photo'=>$profile_photo);
			
			$result = array('result' =>'success','data'=>$data);
			
  			$this->session->set_userdata($data);
			if($this->input->post("type")=="device"){
				redirect(base_url()."my_profile");
			}
		}else{
			if($this->input->post("type")=="device"){
				$this->session->set_flashdata('fail','Invalid Login');
				redirect(base_url()."register_login");
			}
			$result = array('result' =>'fail');
		}
		echo json_encode($result);
	}

	///////////////////////////
	public function get_sect(){
		$sect=$this->db->get_where("sect",array("t_status"=>0))->result();
if(!empty(@$this->input->get('key'))){
		array_unshift($sect ,array("sect_id"=>0,"name"=>"select"));
	}

		echo json_encode($sect);
	    }
	///////////////////////////////
	public function get_sub_sect(){
		$sect_id=$this->input->get("sect_id");
		$sub_sect=$this->db->get_where("sub_sect",array("sect_id"=>$sect_id,"t_status"=>0))->result();
		if(!empty(@$this->input->get('key'))){
		array_unshift($sub_sect ,array("sub_sect_id"=>0,"name"=>"select"));
	}
	//echo "key=".$this->input->get('key');
		echo json_encode($sub_sect);
	  }
	/////////////////////////////
	public function get_state(){
		$state=$this->db->get_where("state",array("t_status"=>0))->result();
		if(!empty(@$this->input->get('key'))){
			array_unshift($state ,array("state_id"=>0,"state_name"=>"select"));
		}
		
		echo json_encode($state);
	}
	//////////////////////////////
	public function get_city(){
		$state_id=$this->input->get("state_id");
		$city=$this->db->get_where("city",array("state_id"=>$state_id,"t_status"=>0))->result();
		if(!empty(@$this->input->get('key'))){
			array_unshift($city ,array("city_id"=>0,"city_name"=>"select"));
		}
		
		echo json_encode($city);
	}
	/////////////////////////////
	public function get_last_qualification(){
		$qualification=$this->db->get("qualification")->result();
		if(!empty(@$this->input->get('key'))){
		array_unshift($qualification ,array("id"=>0,"name"=>"select"));
	}
		echo json_encode($qualification);
	  }
	//////////////////////////////
	  public function get_cast(){
		$cast=$this->db->get_where("cast",array("t_status"=>0))->result();
		if(!empty(@$this->input->get('key'))){
		array_unshift($cast ,array("cast_id"=>0,"name"=>"select"));
	}
		echo json_encode($cast);
	}

	public function get_marital_status(){
		$marital_status=$this->db->get_where("marital_status",array("t_status"=>0))->result();
		if(!empty(@$this->input->get('key'))){
		array_unshift($marital_status ,array("id"=>0,"marital_status"=>"select"));
	        }
		echo json_encode($marital_status);
	  }
	//////////////////////////////

	  public function get_career_status(){
		$career_status=$this->db->get_where("career_status",array("t_status"=>0))->result();
		if(!empty(@$this->input->get('key'))){
		array_unshift($career_status ,array("id"=>0,"name"=>"select"));
	}
		echo json_encode($career_status);
	  }
	//////////////////////////////
	   public function get_height(){
		$height=$this->db->get_where("height",array("t_status"=>0))->result();
		if(!empty(@$this->input->get('key'))){
		array_unshift($height ,array("id"=>0,"name"=>"select","value"=>0));
	}
		echo json_encode($height);
	  }
	//////////////////////////////

	   public function profile_search(){
	    $bride_groom=$this->input->post("bride_groom");
	   	$state=$this->input->post("state");
	   	$age=$this->input->post("age");

	   	if($bride_groom=="male"){
	   		$gender="female";
	   	}else{
	   		$gender="male";
	   	}

		$profile=$this->db->select("A.user_id,A.image,A.name,B.state_name")
					   ->from('user_detail as A')
                       ->where(array("A.state"=>$state,"A.age<="=>$age,"A.gender"=>$gender))
                       ->join('state as B', 'A.state = B.state_id')
                       ->get()->result();
			//echo $this->db->last_query();
		echo json_encode($profile);
	}


	public function sent_received(){
		$email=$this->input->get("email");
		$received=$this->db->get_where("send_request",array("to_user"=>$email,"accept_reject"=>""))->num_rows();
        $sent=$this->db->get_where("send_request",array("from_user"=>$email,"accept_reject"=>""))->num_rows();
        echo json_encode(array("sent"=>$sent,"received"=>$received));
	}

	public function adminlogin(){
		$email=$this->input->post("email");
		$pass=md5($this->input->post("pwd"));

		$where=array("email"=>$email,"pwd"=>$pass);
		$query=$this->db->get_where("admin",$where);
		
		if($query->num_rows()==1){
			$this->session->set_userdata(array("admin"=>$email));
			redirect(base_url()."dashboard");
		}
	}

	public function partner_full_detail(){
		$user_id=$this->input->get("user_id");
		//$user_id=12;
		$full_detail=$this->db->select("A.*,B.name AS height_1,C.name AS sect_1,D.name AS sub_sect_1,E.name AS cast_1,F.state_name AS state_1,G.city_name AS city_1,H.name AS last_qualification_1,I.name AS career_status_1,J.marital_status AS marital_status_1")
							  ->from("user_detail A")
							  ->join("height B","A.height=B.value")
							  ->join("sect C","A.sect=C.sect_id")
							  ->join("sub_sect D","A.sub_sect=D.sub_sect_id")
							  ->join("cast E","A.cast=E.cast_id")
							  ->join("state F","A.state=F.state_id")
							  ->join("city G","A.state=G.city_id")
							  ->join("qualification H","A.last_qualification=H.id")
							  ->join("career_status I","A.career_status=I.id")
							  ->join("marital_status J","A.marital_status=J.id")
							  ->where(array("A.user_id"=>$user_id))
							  ->get()->result();
//echo $this->db->last_query();
     echo json_encode(array("result"=>$full_detail));
	}

	public function send_otp(){
		$email=$this->input->post("email");
		$otp=rand(10000,99999);
		$already=$this->db->get_where("user_detail",array("email"=>$email))->num_rows();
	
		if($already==1){
	$this->session->set_flashdata(array("email"=>$email));
	$this->session->set_flashdata(array("msg"=>"OTP has sent to your registered E-MAIL ID"));
	$this->db->where("email",$email);
    $this->db->update("user_detail",array("otp"=>$otp));

            $subject = "Password Reset OTP From ".base_url();
			$txt = "Your OTP is : ".$otp;

			mail($email,$subject,$txt);
			if($this->input->post("type")=="device"){
			 redirect(base_url()."forget_pass");
		    }else{
			echo json_encode(array("result"=>"success"));
		    }
		  }else{
		    	echo json_encode(array("result"=>"This Email ID is not registered."));
		    }
	}

		public function reset_pass(){
		$email=$this->input->post("email");
		$otp=$this->input->post("otp");
		$pwd=md5($this->input->post("pass"));
		$already=$this->db->get_where("user_detail",array("email"=>$email,"otp"=>$otp))->num_rows();
		if($already==1){
	$this->session->set_flashdata(array("msg"=>"Password Updated Successfully"));
	$this->db->where("email",$email);
    $this->db->update("user_detail",array("pass"=>$pwd));

            $subject = "Profile Password Updated in ".base_url();
			$txt = "Your Profile Password is updated ";
		
			mail($email,$subject,$txt);
          if($this->input->post("type")=="device"){
			 redirect(base_url()."forget_pass");
		    }else{
			echo json_encode(array("result"=>"success"));
		    }
         
		   }else{
			$this->session->set_flashdata(array("invalid_otp"=>"Invalid OTP"));
			if($this->input->post("type")=="device"){
			 redirect(base_url()."forget_pass");
		    }else{
			echo json_encode(array("result"=>"Invalid OTP"));
		    }
		}
	}


	//////////////////////////
	public function interest_action(){
		$my_email=$this->input->get("email");
		$accepted_by_me=$this->db->get_where("send_request",array("to_user"=>$my_email,"accept_reject"=>"accepted"))->num_rows();
		$rejected_by_me=$this->db->get_where("send_request",array("to_user"=>$my_email,"accept_reject"=>"rejected"))->num_rows();
		
		$accepted_by_other=$this->db->get_where("send_request",array("from_user"=>$my_email,"accept_reject"=>"accepted"))->num_rows();
		
		$rejected_by_other=$this->db->get_where("send_request",array("from_user"=>$my_email,"accept_reject"=>"rejected"))->num_rows();
		
		
		echo json_encode(array("accepted_by_me"=>$accepted_by_me,"accepted_by_other"=>$accepted_by_other,"rejected_by_other"=>$rejected_by_other,"rejected_by_me"=>$rejected_by_me));
	}
}
