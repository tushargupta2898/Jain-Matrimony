<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jain Matrimony</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>
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
    $gender=$profile_data->gender;
    $cast=$profile_data->cast;
    $sect=$profile_data->sect;
    $sub_sect=$profile_data->sub_sect;
    $state=$profile_data->state;
    $city=$profile_data->city;
    $address=$profile_data->address;
    $last_qualification=$profile_data->last_qualification;
    $career_status=$profile_data->career_status;
    $mother_name=$profile_data->mother_name;
    $father_name=$profile_data->father_name;
    $sister_count=$profile_data->sister_count;
    $brother_count=$profile_data->brother_count;
?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url()."uploads/".$this->session->userdata('profile_photo');?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                      <li><a href="form_advanced.html">Advanced Components</a></li>
                      <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">General Elements</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="icons.html">Icons</a></li>
                      <li><a href="glyphicons.html">Glyphicons</a></li>
                      <li><a href="widgets.html">Widgets</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url()."uploads/".$this->session->userdata('profile_photo');?>" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url();?>assets/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url();?>assets/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url();?>assets/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo base_url();?>assets/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>My Profile</h2>
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="<?php echo base_url()."uploads/".$this->session->userdata('profile_photo');?>" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>Samuel Doe</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                        </li>
                      </ul>

                      <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br />

                      <!-- start skills -->
                      <h4>Skills</h4>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p>Web Applications</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                        <li>
                          <p>Website Design</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                          </div>
                        </li>
                        <li>
                          <p>Automation & Testing</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                          </div>
                        </li>
                        <li>
                          <p>UI / UX</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                      </ul>
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>User Activity Report</h2>
                        </div>
                        <div class="col-md-6">
                          <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                          </div>
                        </div>
                      </div>
                      <!-- start of user-activity-graph -->
                      <!-- <div id="graph_bar" style="width:100%; height:280px;"></div> -->
                      <!-- end of user-activity-graph -->

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Personal</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- Personal Info -->
                             <form data-parsley-validate method="post" action="<?php echo base_url();?>update_profile" class="form-horizontal">
                                  <div class="form-group">
                <label class="col-md-2 col-xs-12">Name</label>
                <div class="col-md-4 col-xs-12"><input type="text" class="input-sm form-control" name="name" placeholder="Enter Name" value="<?php echo $name;?>" required="required" />
                </div>
             
                <label class="col-md-2 col-xs-12">Email</label>
                <div class="col-md-4 col-xs-12"><input type="text" class="input-sm form-control" name="email" placeholder="Enter Email" required="required" value="<?php echo $this->session->userdata("email"); ?>" readonly="readonly" />
                </div>
              </div>
                              <div class="form-group">
                <label class="col-md-2 col-xs-12">About Me</label>
                <div class="col-md-10 col-xs-12">
                   <textarea class="form-control" name="about_me" id="about_me" placeholder="Enter About Me"><?php echo $about_me;?></textarea>
                </div>
              </div>
               
          
              
               <div class="form-group">
                <label class="col-md-2 col-xs-12">Mobile No.</label>
                <div class="col-md-4 col-xs-12"><input type="text" class="input-sm form-control" name="mobile_no" id="mobile_no" placeholder="Enter Mobile No." maxlength="10" value="<?php echo $mobile_no;?>" />
                    <span id="mobile_no_error"></span>
                </div>
              
                <label class="col-md-2 col-xs-12">Age (Years)</label>
                <div class="col-md-4 col-xs-12"><input type="number" class="input-sm form-control" name="age" placeholder="Enter Age" value="<?php echo $age;?>" required="required" />
                </div>
              </div>
               
              <div class="form-group">
                <label class="col-md-2 col-xs-12">Yearly Income (in <i class="fa fa-inr"></i>)</label>
                <div class="col-md-4 col-xs-12">
                   <input type="text" class="form-control" name="income" id="income" value="<?php echo $income; ?>" placeholder="Enter Your Income" />
                </div>
              
                <label class="col-md-2 col-xs-12">DOB</label>
                <div class="col-md-4 col-xs-12" data-provide="datepicker">
                   <input type="text" class="form-control input-sm" name="dob" id="dob" value="<?php echo $dob; ?>" placeholder="Enter Your DOB" data-inputmask="'alias': 'date'" readonly="readonly"  />
                </div>
              </div>
            
              <div class="form-group">
                <label class="col-md-2 col-xs-12">Height</label>
                <div class="col-md-4 col-xs-12">
                   <select class="form-control" name="height" id="height" required="required">
                    <option value="">Select Height</option>
                  </select>
                </div>
              
                <label class="col-md-2 col-xs-12">Weight (KG)</label>
                <div class="col-md-4 col-xs-12">
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
                <label class="col-md-2 col-xs-12">Gender</label>
               
                <div class="col-md-4 col-xs-12"><input type="radio" name="gender" value="female" required="required" <?php 
                if($gender=="female"){
echo "checked='checked'";
                }   
                  ?> />&nbsp;Female &nbsp;&nbsp;&nbsp;  <input type="radio" name="gender" value="male" required="required" <?php 
                if($gender=="male"){
echo "checked='checked'";
                }   
                  ?> />&nbsp;Male
                </div>
                
                <label class="col-md-2 col-xs-12">Cast</label>

                <div class="col-md-4 col-xs-12">
                    <select class="form-control" name="cast" id="cast" required="required">
                    <option value="">Select Cast</option>
                  </select>
                </div>
            </div> 
            <div class="form-group">
                <label class="col-md-2 col-xs-12">Sect</label>
                <div class="col-md-4 col-xs-12">
                  <select class="form-control" required="required" name="sect" id="sect" onchange="get_sub_sect(this.value);">
                    <option value="">Select Sect</option>
                  </select>
                </div>
                <label class="col-md-2 col-xs-12">Sub Sect</label>
                <div class="col-md-4 col-xs-12">
                   <select class="form-control" name="sub_sect" id="sub_sect" required="required">
                    <option value="">Select Sub Sect</option>
                  </select>
                </div>
              </div>
             
              <div class="form-group">
                <label class="col-md-2 col-xs-12">State</label>
                <div class="col-md-4 col-xs-12">
                   <select class="form-control" name="state" id="state" required="required" onchange="get_city(this.value);">
                   <option value="">Select State</option>
                  </select>
                </div>
              
                <label class="col-md-2 col-xs-12">City</label>
                <div class="col-md-4 col-xs-12">
                    <select class="form-control" name="city" id="city" required="required">
                   <option value="">Select City</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 col-xs-12">Address</label>
                <div class="col-md-4 col-xs-12">
                   <textarea class="form-control" name="address" id="address" placeholder="Enter Your Address"><?php echo $address; ?></textarea>
                </div>
              
                <label class="col-md-2 col-xs-12">Hobby</label>
                <div class="col-md-4 col-xs-12">
                   <textarea class="form-control" name="hobby" id="hobby" placeholder="Enter Your Hobby"><?php echo $hobby; ?></textarea>
                </div>
              </div>
              <div class="form-group pull-right">
                <div class="col-md-4 col-xs-4">
                   <button type="submit" class="btn btn-warning"><i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;Update Profile</button> 
                </div>
              </div>
            </form>
                            <!-- end recent activity -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                           <form data-parsley-validate method="post" action="<?php echo base_url();?>update_profile" class="form-horizontal">
                               <div class="form-group">
                                <label class="col-md-2 col-xs-12">Last Qualification</label>
                                <div class="col-md-4 col-xs-12">
                                    <select class="form-control" name="last_qualification" id="last_qualification">
                                        <option>Select Last Qualification</option>
                                    </select>
                                </div>
                             
                                <label class="col-md-2 col-xs-12">Career Status</label>
                                <div class="col-md-4 col-xs-12">
                                    <select class="form-control" name="career_status" id="career_status">
                                        <option>Select Career Status</option>
                                    </select>
                                </div>
                              </div>
                              <div class="form-group pull-right">
                                <div class="col-md-4 col-xs-4">
                                   <button type="submit" class="btn btn-warning"><i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;Update Profile</button> 
                                </div>
                              </div>
                           </form>
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                           <form data-parsley-validate method="post" action="<?php echo base_url();?>update_profile" class="form-horizontal">
                              <div class="form-group">
                                <label class="col-md-2 col-xs-12">Mother Name</label>
                                <div class="col-md-4 col-xs-12">
                                   <input type="text" class="input-sm form-control" name="mother_name" placeholder="Enter Mother Name" required="required" value="<?php echo  $mother_name;?>" />
                                </div>
                             
                                <label class="col-md-2 col-xs-12">Father Name</label>
                                <div class="col-md-4 col-xs-12">
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
                              <div class="form-group pull-right">
                                <div class="col-md-4 col-xs-4">
                                   <button type="submit" class="btn btn-warning"><i class="fa fa-save"></i>&nbsp;&nbsp;&nbsp;Update Profile</button> 
                                </div>
                              </div>
                           </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- morris.js -->
    <script src="<?php echo base_url();?>assets/vendors/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/build/js/custom.min.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
  
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