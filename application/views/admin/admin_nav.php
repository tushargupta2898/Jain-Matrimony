 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>dashboard">
                <img src="http://placehold.it/200x50&text=LOGO" alt="LOGO"">
            </a>
        </div>
        <!-- Top Menu Items -->
       
        <ul class="nav navbar-right top-nav">
            <!-- <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Received Interest"><i class="fa fa-heart"></i> ()
                </a>
            </li>   -->          
            <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php  echo $this->session->userdata("admin");?>&nbsp;&nbsp;&nbsp;<b class="fa fa-angle-down"></b></a> 
             
                <ul class="dropdown-menu">
                    <!-- <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li> -->
                    <li><a href="<?php echo base_url();?>admin_pwd"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url();?>logout"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
           
            <ul class="nav navbar-nav side-nav">
               
                <li>
                    <a href="<?php echo base_url();?>dashboard"><i class="fa fa-dashboard"></i>  <b>Dashboard</b></a>
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
                    <a href="<?php echo base_url();?>state"><i class="fa fa-map-marker"></i>  <b>State</b></a>
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
            <a href="<?php echo base_url();?>city"><i class="fa fa-building-o "></i> <b> City</b></a>
                </li>
              <li>
                    <a href="<?php echo base_url();?>cast"><i class="fa fa-star"></i> <b> Cast</b></a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>marital_status"><i class="fa fa-fw fa fa-heart"></i> <b> Marital Status</b></a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>sect"><i class="fa fa-at"></i> <b> Sect</b></a>
                </li>
                 <li>
                    <a href="<?php echo base_url();?>sub_sect"><i class="fa fa-file-word-o"></i> <b>Sub Sect</b></a>
                </li>
                 <li>
                    <a href="<?php echo base_url();?>career_status"><i class="fa fa-graduation-cap"></i><b> Career Status</b></a>
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