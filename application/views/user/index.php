<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.min.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
@media(min-width:768px) {
    body {
        margin-top: 50px;
    }
    /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
}
label{
  font-size: 13px;
}
#wrapper {
    padding-left: 0;    
}

#page-wrapper {
    width: 100%;        
    padding: 0;
    background-color: #fff;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 225px;
    }

    #page-wrapper {
        padding: 22px 10px;
    }
}

/* Top Navigation */

.top-nav {
    padding: 0 15px;
}

.top-nav>li {
    display: inline-block;
    float: left;
}

.top-nav>li>a {
    padding-top: 20px;
    padding-bottom: 20px;
    line-height: 20px;
    color: #fff;
}

.top-nav>li>a:hover,
.top-nav>li>a:focus,
.top-nav>.open>a,
.top-nav>.open>a:hover,
.top-nav>.open>a:focus {
    color: #fff;
    background-color: #1a242f;
}

.top-nav>.open>.dropdown-menu {
    float: left;
    position: absolute;
    margin-top: 0;
    /*border: 1px solid rgba(0,0,0,.15);*/
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: #fff;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}

.top-nav>.open>.dropdown-menu>li>a {
    white-space: normal;
}

/* Side Navigation */

@media(min-width:768px) {
    .side-nav {
        position: fixed;
        top: 60px;
        left: 225px;
        width: 225px;
        margin-left: -225px;
        border: none;
        border-radius: 0;
        border-top: 1px rgba(0,0,0,.5) solid;
        overflow-y: auto;
        background-color: #ff0000;
        /*background-color: #5A6B7D;*/
        bottom: 0;
        overflow-x: hidden;
        padding-bottom: 40px;
    }

    .side-nav>li>a {
        width: 225px;
        border-bottom: 1px rgba(0,0,0,.3) solid;
    }

    .side-nav li a:hover,
    .side-nav li a:focus {
        outline: none;
        background-color: #1a242f !important;
    }
}

.side-nav>li>ul {
    padding: 0;
    border-bottom: 1px rgba(0,0,0,.3) solid;
}

.side-nav>li>ul>li>a {
    display: block;
    padding: 10px 15px 10px 38px;
    text-decoration: none;
    /*color: #999;*/
    color: #fff;    
}

.side-nav>li>ul>li>a:hover {
    color: #fff;
}

.navbar .nav > li > a > .label {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  position: absolute;
  top: 14px;
  right: 6px;
  font-size: 10px;
  font-weight: normal;
  min-width: 15px;
  min-height: 15px;
  line-height: 1.0em;
  text-align: center;
  padding: 2px;
}

.navbar .nav > li > a:hover > .label {
  top: 10px;
}

.navbar-brand {
    padding: 5px 15px;
}

.form-group{
    margin-top: 15px;
}
</style>
</head>
<body>

<?php

    $profile_data=$this->db->get_where("user_detail",array('email' =>$this->session->userdata('email')))->row();
    $about_me=$profile_data->about_me;
    $name=$profile_data->name;
    $mobile_no=$profile_data->mobile_no;
    $age=$profile_data->age;
    $dob=date("d-m-Y",strtotime($profile_data->dob));
    $height=$profile_data->height;
    $weight=$profile_data->weight;
    $income=$profile_data->income;
    $hobby=$profile_data->hobby;
    $known_language=$profile_data->known_language;
    $mother_tongue=$profile_data->mother_tongue;
    $gender=$profile_data->gender;
    $cast=$profile_data->cast;
    $sect=$profile_data->sect;
    $sub_sect=$profile_data->sub_sect;
    $state=$profile_data->state;
    $city=$profile_data->city;
    $address=$profile_data->address;
    $last_qualification=$profile_data->last_qualification;
    $qualification_name=$profile_data->qualification_name;
    $career_status=$profile_data->career_status;
    $mother_name=$profile_data->mother_name;
    $father_name=$profile_data->father_name;
    $sister_count=$profile_data->sister_count;
    $brother_count=$profile_data->brother_count;
?>

<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
   <?php include_once("nav.php");?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="progress">
                     <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $this->session->userdata('update_percent');?>%">
                      <?php echo $this->session->userdata('update_percent');?>% Profile Completed 
                    </div>
                   
                  </div>
 <?php
            if($this->session->flashdata('updated')!=""){
              echo ' <div class="alert alert-success">
  <strong>'.$this->session->flashdata('updated').'</strong> 
</div>';
            }
                  ?>
                 <form id="user_form" class="form-horizontal">
                <div class="col-sm-12 col-md-12" id="content">
                              <div class="panel panel-danger">
        <div class="panel-heading"><h4>My Profile</h4></div>
        <div class="panel-body">
                 <div class="form-group">
                <label class="col-md-2">Name</label>
                <div class="col-md-4"><input type="text" class="input-sm form-control" name="name" placeholder="Enter Name" value="<?php echo $name;?>" required="required" />
                </div>
             
                <label class="col-md-2">Email</label>
                <div class="col-md-4"><input type="email" class="input-sm form-control" name="email" placeholder="Enter Email" required="required" value="<?php echo $this->session->userdata("email"); ?>" readonly="readonly" />
                </div>
              </div>
            
               
           
               <div class="form-group">
                <label class="col-md-2">Mobile No.</label>
                <div class="col-md-4"><input type="text" class="input-sm form-control" name="mobile_no" id="mobile_no" placeholder="Enter Mobile No." maxlength="10" value="<?php echo $mobile_no;?>" />
                    <span id="mobile_no_error"></span>
                </div>
              
                <label class="col-md-2">Age (Years)</label>
                <div class="col-md-4"><input type="number" class="input-sm form-control" name="age" placeholder="Enter Age" value="<?php echo $age;?>" required="required" />
                </div>
              </div>
               
              <div class="form-group">
                <label class="col-md-2">Yearly Income (in <i class="fa fa-inr"></i>)</label>
                <div class="col-md-4">
                   <input type="text" class="form-control" name="income" id="income" value="<?php echo $income; ?>" placeholder="Enter Your Income" />
                </div>
              
                <label class="col-md-2">DOB</label>
                <div style="padding-left:15px;padding-right:15px;" class="col-md-4 input-group date" data-provide="datepicker">
                   <input type="text" class="form-control input-sm" name="dob" id="dob" value="<?php echo $dob; ?>" placeholder="Enter Your DOB" data-inputmask="'alias': 'date'" readonly="readonly"  />
                   <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                </div>
              </div>
            
              <div class="form-group">
                <label class="col-md-2">Height</label>
                <div class="col-md-4">
                   <select class="form-control" name="height" id="height" required="required">
                    <option value="">Select Height</option>
                  </select>
                </div>
              
                <label class="col-md-2">Weight (KG)</label>
                <div class="col-md-4">
                    <select class="form-control" name="weight" id="weight" required="required">
                    <option value="">Select Weight</option>
                     <?php
                        for($i=20;$i<=100;$i++){
                           $selected="";
                          if($weight==$i){
                            $selected="selected='selected'";
                          }
                          echo "<option value='".$i."' ".$selected.">".$i." KG</option>";
                        }
                      ?>
                  </select>
                </div>
              </div>
            
              <div class="form-group">
                <label class="col-md-2">Gender</label>
               
                <div class="col-md-4"><input type="radio" name="gender" value="female" required="required" <?php 
                if($gender=="female"){
echo "checked='checked'";
                }   
                  ?> />&nbsp;Female &nbsp;&nbsp;&nbsp;  <input type="radio" name="gender" value="male" required="required" <?php 
                if($gender=="male"){
echo "checked='checked'";
                }   
                  ?> />&nbsp;Male
                </div>
                
                <label class="col-md-2">Cast</label>

                <div class="col-md-4">
                    <select class="form-control" name="cast" id="cast" required="required">
                    <option value="">Select Cast</option>
                  </select>
                </div>
            </div> 
            <div class="form-group">
                <label class="col-md-2">Sect</label>
                <div class="col-md-4">
                  <select class="form-control" required="required" name="sect" id="sect" onchange="get_sub_sect(this.value);">
                    <option value="">Select Sect</option>
                  </select>
                </div>
                <label class="col-md-2">Sub Sect</label>
                <div class="col-md-4">
                   <select class="form-control" name="sub_sect" id="sub_sect" required="required">
                    <option value="">Select Sub Sect</option>
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-md-2">State</label>
                <div class="col-md-4">
                   <select class="form-control" name="state" id="state" required="required" onchange="get_city(this.value);">
                   <option value="">Select State</option>
                  </select>
                </div>
              
                <label class="col-md-2">City</label>
                <div class="col-md-4">
                    <select class="form-control" name="city" id="city" required="required">
                   <option value="">Select City</option>
                  </select>
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-2">Mother Tongue</label>
                <div class="col-md-4">
                   <input type="text" class="form-control" maxlength="30" name="mother_tongue" id="mother_tongue" placeholder="Enter Mother Tongue" value="<?php echo $mother_tongue; ?>" />
                </div>
             
                <label class="col-md-2">Known Language</label>
                <div class="col-md-4">
                   <input type="text" class="form-control" name="known_language" id="known_language" placeholder="Enter Known Language" value="<?php echo $known_language; ?>" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2">Address</label>
                <div class="col-md-4">
                   <textarea class="form-control" name="address" id="address" placeholder="Enter Your Address"><?php echo $address; ?></textarea>
                </div>
             
                <label class="col-md-2">Hobby</label>
                <div class="col-md-4">
                   <textarea class="form-control" name="hobby" id="hobby" placeholder="Enter Your Hobby"><?php echo $hobby; ?></textarea>
                </div>
              </div>
                <div class="form-group">
                <label class="col-md-2">About Me</label>
                <div class="col-md-10">
                   <textarea class="form-control" name="about_me" id="about_me" placeholder="Enter About Me"><?php echo $about_me;?></textarea>
                </div>
              </div>
        </div>
     </div>
                    <div class="col-md-4 col-xs-12">
                      <div class="panel panel-danger">
                        <div class="panel-heading"><h4>My Education & Career </h4></div>
                        <div class="panel-body">
                               <div class="form-group">
                                <label class="col-md-4 col-xs-12">Last Qualification</label>
                                <div class="col-md-8 col-xs-12">
                                    <select class="form-control" name="last_qualification" id="last_qualification">
                                        <option>Last Qualification</option>
                                    </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 col-xs-12">Course Name</label>
                                <div class="col-md-8 col-xs-12">
                                    <input type="text" class="form-control" name="qualification_name" id="qualification_name" placeholder="Course Name" value="<?php echo $qualification_name;?>" />
                                        
                                </div>
                             </div>
                             <div class="form-group">
                                <label class="col-md-4 col-xs-12">Career Status</label>
                                <div class="col-md-8 col-xs-12">
                                    <select class="form-control" name="career_status" id="career_status">
                                        <option>Career Status</option>
                                    </select>
                                </div>
                              </div>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-8 col-xs-12">
                        <div class="panel panel-danger">
                        <div class="panel-heading"><h4>My Family </h4></div>
                        <div class="panel-body">
                               <div class="form-group">
                                <label class="col-md-2 col-xs-12">Mother Name</label>
                                <div class="col-md-10 col-xs-12">
                                   <input type="text" class="input-sm form-control" name="mother_name" placeholder="Enter Mother Name" required="required" value="<?php echo  $mother_name;?>" />
                                </div>
                             </div>
                             <div class="form-group">
                                <label class="col-md-2 col-xs-12">Father Name</label>
                                <div class="col-md-10 col-xs-12">
                                    <input type="text" class="input-sm form-control" name="father_name" placeholder="Enter Father Name" required="required" value="<?php echo  $father_name;?>" />
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-2 col-xs-12">No. of Sister's</label>
                                <div class="col-md-4 col-xs-12">
                                   <input type="number" class="input-sm form-control" name="sister_count" placeholder="No. of Sister's" required="required" value="<?php echo  $sister_count;?>" />
                                </div>
                             
                                <label class="col-md-2 col-xs-12">No. of Brother's</label>
                                <div class="col-md-4 col-xs-12">
                                    <input type="number" class="input-sm form-control" name="brother_count" placeholder="No. of Brother's" required="required" value="<?php echo  $brother_count;?>" />
                                </div>
                              </div>
                        </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                       <button type="button" class="btn btn-warning btn-lg" onclick="update_profile();"><i class="fa fa-save"></i>&nbsp;&nbsp;Update</button>
                    </div>
                 </form>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<script type="text/javascript">
 $(document).ready(function(){
  $(':radio:not(:checked)').attr('disabled', true);
  $(".class").datepicker({
        "setDate": new Date(),
        "autoclose": true
});
    get_state();
    get_cast();
    get_sect();
    get_last_qualification();
    get_career_status();
    get_height();

    var state_id="<?php echo $state?>";
    var sect_id="<?php echo $sect?>";

    get_city(state_id);
    get_sub_sect(sect_id);



  })

    $(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
    });
})    
    ////////////////////////////
     function get_sect(){
       $.ajax({
    url:"<?php echo base_url();?>Welcome/get_sect",
    method:"GET",
    data:"list=list",
    success:function(data){
    var obj= JSON.parse(data);
    
      $.each(obj,function(i,index){
         var selected="";
        if(index.sect_id=="<?php echo $sect; ?>"){
            selected="selected='selected'";
        }
              $("#sect").append("<option value='"+index.sect_id+"' "+selected+">"+index.name+"</option>");
           })
        }
    })
  }
    ///////////////////////////////
     
  function get_sub_sect(sect_id){
       $.ajax({
    url:"<?php echo base_url();?>Welcome/get_sub_sect",
    method:"GET",
    data:"sect_id="+sect_id,
    success:function(data){
    var obj= JSON.parse(data);
     $("#sub_sect").html("");
      $.each(obj,function(i,index){
         var selected="";
          if(index.sub_sect_id=="<?php echo $sub_sect; ?>"){
            selected="selected='selected'";
        }
              $("#sub_sect").append("<option value='"+index.sub_sect_id+"'  "+selected+">"+index.name+"</option>");
           })
        }
    })
  }

  //////////////////////////////
    function get_state(){
       $.ajax({
    url:"<?php echo base_url();?>Welcome/get_state",
    method:"GET",
    data:"list=list",
    success:function(data){
    var obj= JSON.parse(data);
    
      $.each(obj,function(i,index){
         var selected="";
        if(index.state_id=="<?php echo $state; ?>"){
            selected="selected='selected'";
        }
              $("#state").append("<option value='"+index.state_id+"' "+selected+">"+index.state_name+"</option>");
           })
        }
    })
  }
  ////////////////////////
   function get_city(state_id){
       $.ajax({
    url:"<?php echo base_url();?>Welcome/get_city",
    method:"GET",
    data:"state_id="+state_id,
    success:function(data){
    var obj= JSON.parse(data);
     $("#city").html("");
      $.each(obj,function(i,index){
        var selected="";
         if(index.city_id=="<?php echo $city; ?>"){
            selected="selected='selected'";
        }
              $("#city").append("<option value='"+index.city_id+"' "+selected+">"+index.city_name+"</option>");
           })
        }
    })
  }
  ///////////////////////////
   function get_cast(){
       $.ajax({
    url:"<?php echo base_url();?>Welcome/get_cast",
    method:"GET",
    data:"list=list",
    success:function(data){
    var obj= JSON.parse(data);
    
      $.each(obj,function(i,index){
        var selected="";
        if(index.cast_id=="<?php echo $cast; ?>"){
            selected="selected='selected'";
        }
              $("#cast").append("<option value='"+index.cast_id+"' "+selected+">"+index.name+"</option>");
           })
        }
    })
  }


      function get_last_qualification(){
       $.ajax({
    url:"<?php echo base_url();?>Welcome/get_last_qualification",
    method:"GET",
    data:"list=list",
    success:function(data){
    var obj= JSON.parse(data);
    
      $.each(obj,function(i,index){
        var selected="";
         if(index.id=="<?php echo $last_qualification; ?>"){
            selected="selected='selected'";
        }
              $("#last_qualification").append("<option value='"+index.id+"' "+selected+">"+index.name+"</option>");
           })
        }
    })
  }

     function get_career_status(){
       $.ajax({
    url:"<?php echo base_url();?>Welcome/get_career_status",
    method:"GET",
    data:"list=list",
    success:function(data){
    var obj= JSON.parse(data);
    
      $.each(obj,function(i,index){
        var selected="";
        if(index.id=="<?php echo $career_status; ?>"){
            selected="selected='selected'";
        }
              $("#career_status").append("<option value='"+index.id+"' "+selected+">"+index.name+"</option>");
           })
        }
    })
  }
//////////////////////////////////////
    function get_height(){
       $.ajax({
    url:"<?php echo base_url();?>Welcome/get_height",
    method:"GET",
    data:"list=list",
    success:function(data){
    var obj= JSON.parse(data);
    
      $.each(obj,function(i,index){
         var selected="";
        if(index.value=="<?php echo $height; ?>"){
            selected="selected='selected'";
        }
              $("#height").append("<option value='"+index.value+"' "+selected+">"+index.name+"</option>");
           })
        }
    })
  }
  ////////////////////////////////
  function update_profile(){
    data=$("#user_form").serialize();
    $.ajax({
        url:"<?php echo base_url();?>update_profile",
        method:"POST",
        cache:false,
        data:data,
        success:function(result){
         //   alert(data);
            location.href="my_profile";
        }
    })
  }


      ///////////////////////////////////
     function validate_me(something){
            if(something.id=="mobile_no"){
                    pattern =/^([0-9_\.-]+)$/;
                    if(!pattern.test(something.value)){
                       $("#"+something.id).val("");
                       $("#"+something.id+"_error").text("Invalid Mobile No.");
                    }else{
                        if(parseInt(something.value)<6000000000 || parseInt(something.value)>9999999999){
                    $("#"+something.id).val("");
                    $("#"+something.id+"_error").text("Invalid Mobile No.");
                    }else{
                        $("#"+something.id+"_error").text("");
                    }
                    } 

                     
            }
     }
</script>
</body>
</html>
