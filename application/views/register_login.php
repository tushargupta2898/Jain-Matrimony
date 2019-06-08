<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register & Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
  
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    body{
       background-image: url("<?php echo base_url();?>assets/images/banner.jpg");
       background-repeat: inherit;
     
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="color:white;" href="<?php echo base_url();?>">Jain Matrimony</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url();?>" style="color:white;">Home</a></li>
        <li class="active"><a href="<?php echo base_url();?>register_login">Login/Register</a></li>
      </ul>
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul> -->
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
      <div class="col-md-6">
      <!--  <img src="<?php // echo base_url();?>assets/images/matrimony.jpg" class="img img-responsive" alt="Jain Matrimony" />  -->
    
      </div>
      <div class="col-md-6" id="register" style="padding-top: -15px;">
        <div class="panel panel-danger">
        <div class="panel-heading"><h4>Registration Here</h4></div>
         <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>registration">
          <input type="hidden" name="type" value="device" />
        <div class="panel-body">
              <div class="form-group">
                <label class="col-md-3">Name</label>
                <div class="col-md-9"><input type="text" class="input-sm form-control" name="name" placeholder="Enter Name" required="required" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3">Email</label>
                <div class="col-md-9"><input type="text" class="input-sm form-control" name="email" placeholder="Enter Email" required="required" />
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-3">Mobile no.</label>
                <div class="col-md-9"><input type="text" class="input-sm form-control" name="mobile_no" placeholder="Enter Mobile No." maxlength="10" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3">Age</label>
                <div class="col-md-9"><input type="number" class="input-sm form-control" name="age" placeholder="Enter Age" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3">Gender</label>
                <div class="col-md-9"><input type="radio" name="gender" value="female" required="required" />&nbsp;Female &nbsp;&nbsp;&nbsp;  <input type="radio" name="gender" value="male" required="required" />&nbsp;Male
                </div>
              </div>
                <div class="form-group">
                <label class="col-md-3">Cast</label>
                <div class="col-md-9">
                    <select class="form-control" name="cast" required="required">
                    <option value="">Select Cast</option>
                  <?php
                    $get_cast=$this->db->get("cast");
                    foreach($get_cast->result() as $cast){
                    echo "<option value='".$cast->cast_id."'>".$cast->name."</option>";
                     }
                   ?>
                  </select>
                </div>
              </div>
               <div class="form-group">
                <label class="col-md-3">Sect</label>
                <div class="col-md-9">
                  <select class="form-control" required="required" name="sect" onchange="get_sub_sect(this.value);">
                    <option value="">Select Sect</option>
                  <?php
                    $get_sect=$this->db->get("sect");
                    foreach($get_sect->result() as $sect){
                    echo "<option value='".$sect->sect_id."'>".$sect->name."</option>";
                     }
                   ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3">Sub Sect</label>
                <div class="col-md-9">
                   <select class="form-control" name="sub_sect" id="sub_sect" required="required">
                    <option value="">Select Sub Sect</option>
                  </select>
                </div>
              </div>
            
              <div class="form-group">
                <label class="col-md-3">Marital Status</label>
                <div class="col-md-9">
                    <select class="form-control" name="marital_status" id="marital_status" required="required">
                    
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3">State</label>
                <div class="col-md-9">
                   <select class="form-control" name="state" id="state" required="required">
                   <option value="">Select State</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3">Password</label>
                <div class="col-md-9"><input type="password" class="input-sm form-control" name="pass" placeholder="Enter Password" required="required" />
                </div>
              </div>
        </div>
        <div class="panel-footer">
          <div class="form-group">
                <div class="col-md-3 col-xs-6">
                  <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-plus"></i>&nbsp;&nbsp;Register</button>
                </div>
                <div class="col-md-3 col-xs-6">
                  <button type="button" onclick="show_hide('login');" class="btn btn-success"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Login</button>
                </div>
              </div>
        </div>
      </form>
     </div>
   </div>

      <div class="col-md-6" id="login">
        <div class="panel panel-danger">
        <div class="panel-heading"><h4>Login Here</h4></div>
          <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>login">
          <input type="hidden" name="type" value="device" />
        <div class="panel-body">
            <div class="form-group">
                <label class="col-md-3">Email</label>
                <div class="col-md-9"><input type="email" class="input-sm form-control" name="email" placeholder="Enter Email" required="required" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3">Password</label>
                <div class="col-md-9"><input type="password" class="input-sm form-control" name="pass" placeholder="Enter Password" required="required" />
                   <b class='text-danger text-center' id='error'></b>
                </div>
              </div>
            
               
        </div>
        <div class="panel-footer">
          <div class="form-group">
                <div class="col-md-2 col-xs-12">
                  <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Login</button>
                </div>
                <div class="col-md-4 col-xs-12">
                  <a href="<?php echo base_url();?>forget_pass" class="btn btn-danger"><i class="fa fa-question"></i>&nbsp;&nbsp;Forget Password</a>
                </div>
                <div class="col-md-3 col-xs-12">
                  <button type="button" onclick="show_hide('register');" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;&nbsp;Register</button>
                </div>

              </div>
        </div>
      </form>
      
     </div>
   </div>
    </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    get_state();
    get_marital_status();
    $("#login").show();
    $("#register").hide();
    var error="<?php echo $this->session->flashdata('fail');?>";
    if(error!=""){
       $("#error").text("Invalid Login");
         setTimeout(function() { 
        $("#error").text("");
      }, 5000);
       
    }
  })

  function get_sub_sect(sect_id){
       $.ajax({
    url:"<?php echo base_url();?>Welcome/get_sub_sect",
    method:"GET",
    data:"sect_id="+sect_id,
    success:function(data){
    var obj= JSON.parse(data);
    
      $.each(obj,function(i,index){
              $("#sub_sect").append("<option value='"+index.sub_sect_id+"'>"+index.name+"</option>");
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
              $("#state").append("<option value='"+index.state_id+"'>"+index.state_name+"</option>");
           })
        }
    })
  }
  //////////////////////
    function get_marital_status(){
       $.ajax({
    url:"<?php echo base_url();?>Welcome/get_marital_status",
    method:"GET",
    data:"list=list",
    success:function(data){
    var obj= JSON.parse(data);
    $("#marital_status").html("");
      $.each(obj,function(i,index){
              $("#marital_status").append("<option value='"+index.id+"'>"+index.marital_status+"</option>");
           })
        }
    })
  }

  function show_hide(button){
    if(button=="login"){
      $("#login").show();
      $("#register").hide();
    }else{
      $("#login").hide();
      $("#register").show();
    }
    
  }
 
</script>
</body>
</html> 
