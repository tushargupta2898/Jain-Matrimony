<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	 public function __construct()
	{
	    parent::__construct();
	 /* if($this->session->userdata("email")==""){
	   	redirect(base_url());
	   }*/

	    $this->load->model("CommonModel");

	}



	public function get_gallery(){
		$this->load->model("CommonModel");
	    $this->CommonModel->get_gallery();
	  }

	  public function get_search_profile()
	 {
	$this->load->model("CommonModel");
	$this->CommonModel->get_search_profile();
	}

	public function update_profile()
	 {
	$this->load->model("CommonModel");
	$this->CommonModel->update_profile();
	}

    public function update_pwd()
   {
  $this->load->model("CommonModel");
  $this->CommonModel->update_pwd();
  }

	 public function send_interest() { 
	 	$this->load->model("CommonModel");
	    
         $from_email = $this->input->get('from_email'); 
         $to_email = $this->input->get('to_email'); 

         $this->CommonModel->send_interest(array("from_user"=>$from_email,"to_user"=>$to_email,"entry_date"=>date("Y-m-d H:i:s")));	

         
         //Load email library 
         /*$this->load->library('email'); 
   
         $this->email->from($from_email, $this->session->userdata('name')); 
         $this->email->to($to_email);
         $this->email->subject('Marriage Proposal Interest'); 
         $this->email->message('Someone interested in your profile in jain matrimony'); 
         $this->email->send();*/
   		
      } 

       public function get_interest() { 
	 	$this->load->model("CommonModel");
        $this->CommonModel->get_interest();	
      }

       public function action_for_received() { 
        $this->load->model("CommonModel");
        $this->CommonModel->action_for_received(); 
      }

   	public function profile_photo_update(){
   		if($this->input->post("type")!=""){
   	  	$img=$this->input->post("profile_photo");

$filename_path = md5(time().uniqid()).".jpg";
$base64_string = str_replace('data:image/jpg;base64,', '', $img);
$base64_string = str_replace(' ', '+', $img);
$decoded = base64_decode($base64_string);
file_put_contents("./uploads/".$filename_path,$decoded);

   		 $this->CommonModel->profile_photo_update(array('image'=>$filename_path));
   		}else{
   			$profile_photo=$_FILES["profile_photo"]["name"];
   		}
   		 if (isset($profile_photo)) {
   		 	 $config['upload_path'] = './uploads/';
                        $config['allowed_types'] = 'jpg|jpeg|png|gif';
                        $this->load->library('upload', $config);
                        if (!$this->upload->do_upload('profile_photo')) {
                            $error= $this->upload->display_errors();
                            $this->session->set_flashdata("updated","Invalid Image Format");
                        } else {
                            $file_data = $this->upload->data();
                            $fileName = $file_data["file_name"];
  if($this->session->userdata("profile_photo")!="bride.png" && $this->session->userdata("profile_photo")!="groom.png"){
     unlink('./uploads/'.$this->session->userdata("profile_photo"));
  }
                     
                            $this->session->set_userdata(array("profile_photo"=>$fileName));
                           $this->CommonModel->profile_photo_update(array('image'=>$fileName));

                        }
   		 }
                       
}

public function gallery_delete(){
  $this->CommonModel->gallery_delete();
}

	public function update_gallery(){
      if($this->input->post("type")!=""){
        $img1=$this->input->post("gallery_photo1");
        if($img1!=null){
          $img=$img1;
          $filename_path = md5(time().uniqid()).".jpg";
$base64_string = str_replace('data:image/jpg;base64,', '', $img);
$base64_string = str_replace(' ', '+', $img);
$decoded = base64_decode($base64_string);
file_put_contents("./uploads/".$filename_path,$decoded);
        }
        $img2=$this->input->post("gallery_photo2");
         if($img2!=null){
          $img=$img2;
          $filename_path = md5(time().uniqid()).".jpg";
$base64_string = str_replace('data:image/jpg;base64,', '', $img);
$base64_string = str_replace(' ', '+', $img);
$decoded = base64_decode($base64_string);
file_put_contents("./uploads/".$filename_path,$decoded);
        }
        $img3=$this->input->post("gallery_photo3");
         if($img3!=null){
          $img=$img3;
          $filename_path = md5(time().uniqid()).".jpg";
$base64_string = str_replace('data:image/jpg;base64,', '', $img);
$base64_string = str_replace(' ', '+', $img);
$decoded = base64_decode($base64_string);
file_put_contents("./uploads/".$filename_path,$decoded);
        }
       



/*$filename_path = md5(time().uniqid()).".jpg";
$base64_string = str_replace('data:image/jpg;base64,', '', $img);
$base64_string = str_replace(' ', '+', $img);
$decoded = base64_decode($base64_string);
file_put_contents("./uploads/".$filename_path,$decoded);*/

      }else{
        $this->load->library('upload');
    $dataInfo = array();
    $files = $_FILES;
    $cpt = count($_FILES['userfile']['name']);
    for($i=0; $i<$cpt; $i++)
    {           
        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

        $this->upload->initialize($this->set_upload_options());
        $this->upload->do_upload();
        $dataInfo[] = $this->upload->data();
        $data=array("user_id"=>$this->session->userdata("user_id"),"img_name"=>$files['userfile']['name'][$i],"entry_date"=>date("Y-m-d H:i:s"));
       
        $result_set = $this->CommonModel->update_gallery($data);
    }
    redirect(base_url()."my_photos");
      }
    
}

private function set_upload_options()
{   
    //upload an image options
    $config = array();
    $config['upload_path'] = './uploads';
    $config['allowed_types'] = 'gif|jpg|jpeg|png';
    $config['max_size']      = '0';
    $config['overwrite']     = FALSE;

    return $config;
}

	
}
