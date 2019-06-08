<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

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
  font-size: 12px;
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
$full_detail_email=$this->uri->segment(3);
     $profile_data=$this->db->get_where("user_detail",array('user_id' =>$full_detail_email))->row();
    $about_me=$profile_data->about_me;
     $hobby=$profile_data->hobby;
    $name=$profile_data->name;
    $mobile_no=$profile_data->mobile_no;
    $age=$profile_data->age;
    $dob=date("d-m-Y",strtotime($profile_data->dob));
    if($dob=="01-01-1970"){
      $dob="Not Available";
    }
    $height=$profile_data->height;
    if($height==0){
      $height="Not available";
    }else{
      $height=$this->db->get_where("height",array('value' =>$height))->row()->name;
    }

    $weight=$profile_data->weight;
    if($weight==0){
      $weight="Not available";
    }
    $email=$profile_data->email;
    $gender=$profile_data->gender;
    $income=$profile_data->income;
     if($income==0){
      $income="Not available";
    }
    $image=$profile_data->image;
    if($image=="" && $gender=="male"){
      $image="groom.png";
    }
    if($image=="" && $gender=="female"){
      $image="bride.png";
    }

    $cast=$this->db->get_where("cast",array("cast_id"=>$profile_data->cast))
                       ->row()->name;
    $sect=$this->db->get_where("sect",array("sect_id"=>$profile_data->sect))
                       ->row()->name;
    $sub_sect=$this->db->get_where("sub_sect",array("sub_sect_id"=>$profile_data->sub_sect))
                       ->row()->name;
    $state=$this->db->get_where("state",array("state_id"=>$profile_data->state))
                       ->row()->state_name;
    $city=$this->db->get_where("city",array("city_id"=>$profile_data->city))
                       ->row()->city_name;
    $address=$profile_data->address;

    $mother_tongue=$profile_data->mother_tongue;
    $known_language=$profile_data->known_language;

if($profile_data->last_qualification!=0){
   $last_qualification=$this->db->get_where("qualification",array("id"=>$profile_data->last_qualification))->row()->name;
}else{
   $last_qualification="Not Defined";
}
   if($profile_data->career_status!=0){
    $career_status=$this->db->get_where("career_status",array("id"=>$profile_data->career_status))->row()->name;
  }else{
   $career_status="Not Defined";
}
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
            <div class="row" id="main">
                <div class="col-sm-12 col-md-12" id="content">
                  <div class="panel panel-danger">
                    
        <div class="panel-heading"><h4><u><?php echo $name;?></u> Profile's</h4></div>
        <div class="panel-body">
          <div class="col-md-2 text-center">
            <img src="<?php echo base_url().'uploads/'.$image; ?>" class="img-thumbnail" alt="profile Image" style="height:120px;" />
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-picture-o"></i>&nbsp;&nbsp;See Gallery</button>
                    </div>
                    <div class="col-md-10">
              <div class="row">
                <label class="col-md-2">Name</label>
                <div class="col-md-2"><?php echo $name;?>
                </div>
             
                <label class="col-md-2">Email</label>
                <div class="col-md-2"><?php echo $email; ?>
                </div>
                 <label class="col-md-2">Mobile no.</label>
                <div class="col-md-2"><?php echo $mobile_no;?>
                </div>
              </div>
                <div class="row">
                <label class="col-md-2">DOB</label>
                <div class="col-md-2"><?php echo $dob;?>
                </div>
             
                <label class="col-md-2">Height</label>
                <div class="col-md-2"><?php echo $height; ?>
                </div>
                 <label class="col-md-2">Weight</label>
                <div class="col-md-2"><?php echo $weight;?>
                </div>
              </div>
                  <div class="row">
                <label class="col-md-2">Age</label>
                <div class="col-md-2">
                  <?php echo $age;?>
                </div>
             
                <label class="col-md-2">Cast</label>
                <div class="col-md-2"><?php echo $cast;?>
                </div>
              
                <label class="col-md-2">Sect</label>
                <div class="col-md-2">
                  <?php echo $sect;?>
                </div>
                </div>
                <div class="row">
                <label class="col-md-2">Sub Sect</label>
                <div class="col-md-2">
                  <?php echo $sub_sect;?>
                </div>
                <label class="col-md-2">Yearly Income</label>
                <div class="col-md-2">
                  <?php echo $income;?>&nbsp;&nbsp;<i class="fa fa-inr"></i>
                </div>
                <label class="col-md-2">Sub Sect</label>
                <div class="col-md-2">
                  <?php echo $sub_sect;?>
                </div>
              </div>
               <div class="row">
                <label class="col-md-2">Mother Tongue</label>
                <div class="col-md-2">
                  <?php echo $mother_tongue;?>
                </div>
                <label class="col-md-2">Known Language</label>
                <div class="col-md-6">
                  <?php echo $known_language;?>
                </div>
                
              </div>
              <div class="row">
                <label class="col-md-2">About </label>
                <div class="col-md-10">
                  <?php echo $about_me;?>
                </div>
              </div>  
               <div class="row">
                <label class="col-md-2">Hobbies </label>
                <div class="col-md-10">
                  <?php echo $hobby;?>
                </div>
              </div>             
        </div>
      </div>
     </div>
                      <div class="panel panel-danger">
                        <div class="panel-heading"><h4>Education & Career Detail</h4></div>
                        <div class="panel-body">
                               <div class="form-group">
                                <label class="col-md-2">Last Qualification</label>
                                <div class="col-md-4">
                                  <?php echo $last_qualification;?>
                                </div>
                             
                                <label class="col-md-2">Career Status</label>
                                <div class="col-md-4">
                                   <?php echo $career_status;?>
                                </div>
                              </div>
                        </div>
                      </div>

                        <div class="panel panel-danger">
                        <div class="panel-heading"><h4>Family Detail</h4></div>
                        <div class="panel-body">
                               <div class="form-group">
                                <label class="col-md-2">Mother Name</label>
                                <div class="col-md-4">
                                  <?php echo  $mother_name;?>
                                </div>
                             
                                <label class="col-md-2">Father Name</label>
                                <div class="col-md-4">
                                   <?php echo  $father_name;?>
                                </div>
                              </div>
                              <br />
                              <div class="form-group">
                                <label class="col-md-2">No. of Sister's</label>
                                <div class="col-md-4">
                                   <?php echo  $sister_count;?>
                                </div>
                             
                                <label class="col-md-2">No. of Brother's</label>
                                <div class="col-md-4">
                                    <?php echo  $brother_count;?>
                                </div>
                              </div>
                        </div>
                      </div>
                </div>
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<script type="text/javascript">
 $(document).ready(function(){
    get_state();
    get_cast();
    get_sect();
    get_last_qualification();
    get_career_status();

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
    ///////////////////////////
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




 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Gallery</h4>
        </div>
        <div class="modal-body">
          <p>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
 

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php
 $gallery_data=$this->db->get_where("gallery",array('user_id' =>$full_detail_email));
 if($gallery_data->num_rows()>0){
 $i=1;
 foreach ($gallery_data->result() as $value) {
  $active="";
  if($i==1){
  $active="active";
  }

  $gallery_src=base_url()."uploads/".$value->img_name;
  echo '<div class="item '.$active.'">
        <img src="'.$gallery_src.'" alt="gallery">
      </div>';
  $i++;
 }
}else{
  echo "Gallery Image not Available , Try again after sometime.";
}
    ?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
   <i class="fa fa-angle-right"></i>
    <span class="sr-only">Next</span>
  </a>
</div>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>
