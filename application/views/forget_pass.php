<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forget Password</title>
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

      <div class="col-md-6" id="login">
        <div class="panel panel-danger">
        <div class="panel-heading">
          <h4>Reset Password</h4>
        </div>
         <?php if(!empty($this->session->flashdata("error"))){ ?>
       <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>send_otp">
          <?php }else if(!empty($this->session->flashdata("msg"))){ ?>    
        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>reset_pass">
       <?php }else{  ?>
      <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>send_otp">
     <?php  } ?>
          <input type="hidden" name="type" value="device" />
        <div class="panel-body">
            <div class="form-group">
                <label class="col-md-3">Email</label>
                <div class="col-md-9"><input type="email" class="input-sm form-control" name="email" placeholder="Enter Email" value="<?php echo $this->session->flashdata('email'); ?>" required="required" />

                   <b class='text-danger text-right'>
                    <?php if(!empty($this->session->flashdata("error"))){ echo $this->session->flashdata('error');}?>                     
                   </b>
                </div>
                
              </div>
              <?php 
               if(!empty($this->session->flashdata("msg"))){
              ?>
               <div class="form-group">
                <label class="col-md-3">OTP</label>
                <div class="col-md-9"><input type="text" class="input-sm form-control" name="otp" placeholder="Enter OTP" required="required" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3">New Password</label>
                <div class="col-md-9"><input type="password" class="input-sm form-control" name="pass" placeholder="Enter New Password" required="required" />
                   <b class='text-danger text-center' id='error'>
                    <?php echo $this->session->flashdata('msg');?>                     
                   </b>
                </div>
              </div>
               <?php 
               }
              ?>

            </div>
        <div class="panel-footer">
          <div class="form-group">
                <div class="col-md-2 col-xs-4">
                  <button type="submit" class="btn btn-success" name="submit"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Submit</button>
                </div>
                <div class="col-md-2 col-xs-4">
                  <a  class="btn btn-primary" href="<?php echo base_url();?>"><i class="fa fa-plus"></i>&nbsp;&nbsp;Register</a>
                </div>

              </div>
        </div>
      </form>
      
     </div>
   </div>
    </div>
</div>
<script type="text/javascript">
  
</script>
</body>
</html> 
