<?php
class CommonModel extends CI_Model {

	public function update_profile()
	{
		$update_percent=0;
		$one_percent=4;
//// 25 fields
		$about_me=$this->input->post("about_me");
		if($about_me){
			$update_percent=$update_percent+$one_percent;
		}
		$name=$this->input->post("name");
		if($name){
			$update_percent=$update_percent+$one_percent;
		}
		$mobile_no=$this->input->post("mobile_no");
		if($mobile_no){
			$update_percent=$update_percent+$one_percent;
		}
		$email=$this->input->post("email");
		if($email){
			$update_percent=$update_percent+$one_percent;
		}
		$age=$this->input->post("age");
		if($age){
			$update_percent=$update_percent+$one_percent;
		}
		$dob=date("Y-m-d",strtotime($this->input->post("dob")));
		if($dob!="01/01/1970"){
			$update_percent=$update_percent+$one_percent;
		}
		$sect=$this->input->post("sect");
		if($sect){
			$update_percent=$update_percent+$one_percent;
		}
		$sub_sect=$this->input->post("sub_sect");
		if($sub_sect){
			$update_percent=$update_percent+$one_percent;
		}
		$cast=$this->input->post("cast");
		if($cast){
			$update_percent=$update_percent+$one_percent;
		}
		$gender=$this->input->post("gender");
		if($gender){
			$update_percent=$update_percent+$one_percent;
		}
		$state=$this->input->post("state");
		if($state){
			$update_percent=$update_percent+$one_percent;
		}
		$city=$this->input->post("city");
		if($city){
			$update_percent=$update_percent+$one_percent;
		}
		$address=$this->input->post("address");
		if($address){
			$update_percent=$update_percent+$one_percent;
		}
		$mother_name=$this->input->post("mother_name");
		if($mother_name){
			$update_percent=$update_percent+$one_percent;
		}
		$father_name=$this->input->post("father_name");
		if($father_name){
			$update_percent=$update_percent+$one_percent;
		}
		$sister_count=$this->input->post("sister_count");
		if($sister_count){
			$update_percent=$update_percent+$one_percent;
		}
		$brother_count=$this->input->post("brother_count");
		if($brother_count){
			$update_percent=$update_percent+$one_percent;
		}

		$last_qualification=$this->input->post("last_qualification");
		if($last_qualification){
			$update_percent=$update_percent+$one_percent;
		}
		$career_status=$this->input->post("career_status");
		if($career_status){
			$update_percent=$update_percent+$one_percent;
		}
		$income=$this->input->post("income");
		if($income){
			$update_percent=$update_percent+$one_percent;
		}
		$height=$this->input->post("height");
		if($height){
			$update_percent=$update_percent+$one_percent;
		}
		$weight=$this->input->post("weight");
		if($weight){
			$update_percent=$update_percent+$one_percent;
		}
		$hobby=$this->input->post("hobby");
		if($hobby){
			$update_percent=$update_percent+$one_percent;
		}
		$mother_tongue=$this->input->post("mother_tongue");
		if($mother_tongue){
			$update_percent=$update_percent+$one_percent;
		}
		$known_language=$this->input->post("known_language");
		if($known_language){
			$update_percent=$update_percent+$one_percent;
		}

		$qualification_name=$this->input->post("qualification_name");


		$this->session->set_userdata(array("update_percent"=>round($update_percent)));

		$data=array("about_me"=>$about_me,"name"=>$name,"mobile_no"=>$mobile_no,"email"=>$email,"age"=>$age,"sect"=>$sect,"sub_sect"=>$sub_sect,"cast"=>$cast,"gender"=>$gender,"state"=>$state,"city"=>$city,"address"=>$address,"mother_name"=>$mother_name,"father_name"=>$father_name,"brother_count"=>$brother_count,"sister_count"=>$sister_count,"last_qualification"=>$last_qualification,"qualification_name"=>$qualification_name,"career_status"=>$career_status,"update_percent"=>$update_percent,"income"=>$income,"height"=>$height,"weight"=>$weight,"hobby"=>$hobby,"dob"=>$dob,"mother_tongue"=>$mother_tongue,"known_language"=>$known_language);
		$this->db->where("email",$this->input->post("email"));
		$query=$this->db->update("user_detail",$data);
		if($query){
			$result = array('result' =>'success','update_percent'=>$update_percent);
			$this->session->set_flashdata('updated','Updated Successfully');
		}else{
			$result = array('result' =>'fail');
		}
		echo json_encode($result);
	}

	public function update_pwd()
	{
		$email=$this->input->post("email");
	    $pwd=md5($this->input->post("pwd"));
		$new_pwd1=$this->input->post("pwd1");

		$old_pwd_check=$this->db->get_where("user_detail",array("email"=>$email,"pass"=>$pwd));
		
		if($old_pwd_check->num_rows()==1){
			$this->db->where("email",$email);
			$this->db->update("user_detail",array("pass"=>md5($new_pwd1)));
			$this->session->set_flashdata("msg","Password has been changed successfully.");
			if(!empty($_POST['device'])){
				echo json_encode(array("result"=>"success"));
			}else{
				redirect("forget_pwd");
			}
		}else{
			if(!empty($_POST['device'])){
				echo json_encode(array("result"=>"fail"));
			}else{
				$this->session->set_flashdata("msg","Wrong Password.");
				//redirect("forget_pwd");
			}
		}
		
	}

	public function profile_photo_update($data){
		$user_id=$this->input->post("user_id");
		$this->db->where("user_id",$user_id);
		$query=$this->db->update("user_detail",$data);

		if($query){
			$data['result']='success';
			$data1=array_reverse($data);
			echo json_encode($data1);
			 $this->input->post("type");
			if($this->input->post("type")==""){
				redirect(base_url()."my_profile");
			}
		}else{
			echo json_encode(array("result"=>"fail"));
		}
	}
	public function update_gallery($data){
		$this->db->insert("gallery",$data);
		
	}

	public function get_search_profile(){
		$where=array();
		$age1=$this->input->post('age1');
		if($age1!=""){
			$where['A.age>=']=$age1;
		}
		$age2=$this->input->post('age2');
		if($age1!=""){
			$where['A.age<=']=$age2;
		}
		$height1=$this->input->post('height1');
		if($height1!=""){
			$where['A.height>=']=$height1;
		}
		$height2=$this->input->post('height2');
		if($height1!=""){
			$where['A.height<=']=$height2;
		}
		$state=$this->input->post('state');

		if(@count($state)>0){
			/*$where['A.state']=$state;*/
			//$where['A.state']=$state;
		}
		$qualification=$this->input->post('qualification');
		if($qualification!=""){
			$where['A.last_qualification']=$qualification;
		}
		$cast=$this->input->post('cast');
		if($cast!=""){
			$where['A.cast']=$cast;
		}
		$sect=$this->input->post('sect');
		if($sect!=""){
			$where['A.sect']=$sect;
		}
		$sub_sect=$this->input->post('sub_sect');
		if($sub_sect!=""){
			$where['A.sub_sect']=$sub_sect;
		}
		$email=$this->input->post('email');
		
		


	   if($this->input->post('gender')=="male"){
	   		$where['A.gender']="female";
	   	}else{
	   		$where['A.gender']="male";
	   	}
	   	if($email==""){
	   		$profile=$this->db->select("A.email,A.age,A.user_id,A.image,A.name,A.qualification_name,B.state_name AS state,C.name AS qualification,D.name AS cast,E.name AS sect,F.name AS sub_sect")
					   ->from('user_detail as A','send_request as G')
                       ->where($where)
                       ->where_in('state', $state)
                       ->order_by("A.user_id","DESC")
                       ->join('state as B', 'A.state = B.state_id')
                       ->join('qualification as C', 'A.last_qualification = C.id')
                       ->join('cast as D', 'A.cast = D.cast_id')
                       ->join('sect as E', 'A.sect = E.sect_id')
                       ->join('sub_sect as F', 'A.sub_sect = F.sub_sect_id')
                       ->get()->result();
//echo $this->db->last_query();
                       echo json_encode($profile);
	   	}else{
	   			    $data=array();
		$profile=$this->db->select("A.email,A.age,A.user_id,A.image,A.name,A.qualification_name,B.state_name AS state,C.name AS qualification,D.name AS cast,E.name AS sect,F.name AS sub_sect")
					   ->from('user_detail as A','send_request as G')
                       ->where($where)
                       ->where_in('state', $state)
                       ->order_by("A.user_id","DESC")
                       ->join('state as B', 'A.state = B.state_id')
                       ->join('qualification as C', 'A.last_qualification = C.id')
                       ->join('cast as D', 'A.cast = D.cast_id')
                       ->join('sect as E', 'A.sect = E.sect_id')
                       ->join('sub_sect as F', 'A.sub_sect = F.sub_sect_id')
                       ->get();
                      // echo $profile->num_rows();
                      // echo $this->db->last_query();
                       foreach ($profile->result() as $value){
                       	$interest=$this->db->get_where("send_request",array("from_user"=>$email,"to_user"=>$value->email));
                       	if($interest->num_rows()==0){
                       		$interest='0';
                       	}else{
                          $interest='1';
                       	}
                       
                       $data[]=array("interest"=>$interest,"email"=>$value->email,"age"=>$value->age,"user_id"=>$value->user_id,"image"=>$value->image,"name"=>$value->name,"state"=>$value->state,"qualification"=>$value->qualification,"qualification_name"=>$value->qualification_name,"cast"=>$value->cast,"sect"=>$value->sect,"sub_sect"=>$value->sub_sect);
                       }
		//	echo $this->db->last_query();
		echo json_encode($data);
	   	}

	}

	public function send_interest($data){
		$from_email = $this->input->get('from_email'); 
        $to_email = $this->input->get('to_email');
        $data=array("from_user"=>$from_email,"to_user"=>$to_email);
        $already_exist_check=$this->db->get_where("send_request",$data);
       // echo $this->db->last_query();
        if($already_exist_check->num_rows()>0){
        	echo json_encode(array("result"=>"already exist"));
        }else{
        	$data["entry_date"]=date("Y-m-d H:i:s");
        	$this->db->insert("send_request",$data);
        	echo json_encode(array("result"=>"sent"));

        	
			$subject = "Got new interest in ".base_url();
			$txt = "Someone has sent to you interest in ".base_url();" , Login to see detail.";
			/*$headers = "From: webmaster@example.com" . "\r\n" .
			"CC: somebodyelse@example.com";*/
			mail($to_email,$subject,$txt);
			/*mail($to,$subject,$txt,$headers);*/
        } 
	}


		public function get_interest(){
		$where=array();

		if($this->input->get('gender')=="male"){
	   		$where['A.gender']="female";
	   	}else{
	   		$where['A.gender']="male";
	   	}

		$interest=$this->input->get('interest');
	if($interest=="sent" ||$interest=="others_acceptance" || $interest=="others_rejection"){
			$where['G.from_user']=$this->input->get("email");
			if($interest=="sent"){
			$where['G.accept_reject']='';
			}
			if($interest=="others_acceptance"){
			$where['G.accept_reject']='accepted';
			}
			if($interest=="others_rejection"){
			$where['G.accept_reject']='rejected';
			}
			$profile=$this->db->select("A.email,A.age,A.user_id,A.image,A.name,B.state_name AS state,C.name AS qualification,D.name AS cast,E.name AS sect,F.name AS sub_sect,G.accept_reject")
					   ->from('user_detail as A')
                       ->where($where)
                       ->join('state as B', 'A.state = B.state_id')
                       ->join('qualification as C', 'A.last_qualification = C.id')
                       ->join('cast as D', 'A.cast = D.cast_id')
                       ->join('sect as E', 'A.sect = E.sect_id')
                       ->join('sub_sect as F', 'A.sub_sect = F.sub_sect_id')
                       ->join('send_request as G', 'A.email = G.to_user')
                       ->get()->result();

                      //  echo $this->db->last_query();
		}
if($interest=="received" || $interest=="my_acceptance" || $interest=="my_rejection"){
			$where['G.to_user']=$this->input->get("email");
			if($interest=="received"){
			$where['G.accept_reject']='';
			}
			if($interest=="my_acceptance"){
			$where['G.accept_reject']='accepted';
			}
			if($interest=="my_rejection"){
			$where['G.accept_reject']='rejected';
			}
			$profile=$this->db->select("A.email,A.age,A.user_id,A.image,A.name,B.state_name AS state,C.name AS qualification,D.name AS cast,E.name AS sect,F.name AS sub_sect,G.accept_reject")
					   ->from('user_detail as A')
                       ->where($where)
                       ->join('state as B', 'A.state = B.state_id')
                       ->join('qualification as C', 'A.last_qualification = C.id')
                       ->join('cast as D', 'A.cast = D.cast_id')
                       ->join('sect as E', 'A.sect = E.sect_id')
                       ->join('sub_sect as F', 'A.sub_sect = F.sub_sect_id')
                       ->join('send_request as G', 'A.email = G.from_user')
                       ->get()->result();

                  //     echo $this->db->last_query();
		}
	
		
		echo json_encode($profile);
	}


			public function action_for_received(){
		$from_email=$this->input->post("from_email");
		$to_email=$this->input->post("to_email");
		$action=$this->input->post("action");
		$this->db->where(array("from_user"=>$from_email,"to_user"=>$to_email));
		$query=$this->db->update("send_request",array("accept_reject"=>$action));
		if($query){

			$subject = "You have received a response against your intrest in ".base_url();
			$txt = "Dear candidate , someone has responsed to your interest , login and check response in ".base_url();
			mail($to_email,$subject,$txt);

			echo json_encode(array('result'=>'success'));
	       }else{
	       	echo json_encode(array('result'=>'fail'));
	       }
		}



	

	public function get_gallery(){
		$data=$this->db->get_where("gallery",array("user_id"=>$this->session->userdata("user_id")))->result();
		echo json_encode($data);
	}

	public function gallery_delete(){
		$img_name=$this->input->post("img_name");
		$gallery_id=$this->input->post("gallery_id");
		$this->db->where("id",$gallery_id);
		$this->db->delete("gallery");
		unlink("./uploads/".$img_name);
	}

}
