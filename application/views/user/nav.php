 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>my_profile">
                <img src="<?php echo base_url(); ?>assets/images/logo.png" style="width:150px;height:50px;" alt="LOGO" />
            </a>
        </div>
        <!-- Top Menu Items -->
       
        <ul class="nav navbar-right top-nav">
            <!-- <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Received Interest"><i class="fa fa-heart"></i> ()
                </a>
            </li>   -->          
            <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php  echo $this->session->userdata("name");?>&nbsp;&nbsp;&nbsp;<b class="fa fa-angle-down"></b></a> 
             
                <ul class="dropdown-menu">
                    <!-- <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li> -->
                    <li><a href="<?php echo base_url();?>forget_pwd"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url();?>logout"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
           
            <ul class="nav navbar-nav side-nav">
                 <li class="text-center">
                    <img src="<?php echo base_url()."uploads/".$this->session->userdata('profile_photo');?>" class="img-thumbnail" alt="profile Image" style="height:180px;weight:200px;" />
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal1"><i class="fa fa-camera"></i>&nbsp;&nbsp;Update Photo</button> 
                </li>
                <li>
                    <a href="<?php echo base_url();?>my_profile"><i class="fa fa-fw fa-user"></i> <b> My Profile</b></a>
                </li>
              <!--   <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i>My Account <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-1" class="collapse">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
                    </ul>
                </li> -->
                <li>
                    <a href="<?php echo base_url();?>profile_search"><i class="fa fa-fw fa-search"></i> <b> Profile Search</b></a>
                </li>
               <!--  <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i>  Profile Search <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.1</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.2</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.3</a></li>
                    </ul>
                </li> -->
                <li>
            <a href="<?php echo base_url();?>my_photos"><i class="fa fa-camera"></i> <b>  My Photos</b></a>
                </li>
              <li>
                    <a href="<?php echo base_url();?>interest"><i class="fa fa-fw fa fa-heart"></i>  <b>Interest</b></a>
                </li>
                
                    
               
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>



    <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
         <form method="post" action="<?php echo base_url();?>profile_photo_update" enctype="multipart/form-data">
            <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id');?>" />
            <input type="hidden" name="type" value="" />
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">  Update Profile Photo</h4>
        </div>
        <div class="modal-body">
          <p>
           <input type="file" name="profile_photo" required="required" />
          </p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success"><i class="fa fa-camera"></i>&nbsp;&nbsp;Upload</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>