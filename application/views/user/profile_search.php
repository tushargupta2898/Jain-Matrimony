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









   .ms-options-wrap,
.ms-options-wrap * {
    box-sizing: border-box;
}

.ms-options-wrap > button:focus,
.ms-options-wrap > button {
    position: relative;
    width: 100%;
    text-align: left;
    border: 1px solid #aaa;
    background-color: #fff;
    padding: 5px 20px 5px 5px;
    margin-top: 1px;
    font-size: 13px;
    color: #aaa;
    outline-offset: -2px;
    white-space: nowrap;
}

.ms-options-wrap > button > span {
    display: inline-block;
}

.ms-options-wrap > button[disabled] {
    background-color: #e5e9ed;
    color: #808080;
    opacity: 0.6;
}

.ms-options-wrap > button:after {
    content: ' ';
    height: 0;
    position: absolute;
    top: 50%;
    right: 5px;
    width: 0;
    border: 6px solid rgba(0, 0, 0, 0);
    border-top-color: #999;
    margin-top: -3px;
}

.ms-options-wrap.ms-has-selections > button {
    color: #333;
}

.ms-options-wrap > .ms-options {
    position: absolute;
    left: 0;
    width: 100%;
    margin-top: 1px;
    margin-bottom: 20px;
    background: white;
    z-index: 2000;
    border: 1px solid #aaa;
    overflow: auto;
    visibility: hidden;
}

.ms-options-wrap.ms-active > .ms-options {
    visibility: visible
}

.ms-options-wrap > .ms-options > .ms-search input {
    width: 100%;
    padding: 4px 5px;
    border: none;
    border-bottom: 1px groove;
    outline: none;
}

.ms-options-wrap > .ms-options .ms-selectall {
    display: inline-block;
    font-size: .9em;
    text-transform: lowercase;
    text-decoration: none;
}
.ms-options-wrap > .ms-options .ms-selectall:hover {
    text-decoration: underline;
}

.ms-options-wrap > .ms-options > .ms-selectall.global {
    margin: 4px 5px;
}

.ms-options-wrap > .ms-options > ul,
.ms-options-wrap > .ms-options > ul > li.optgroup ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.ms-options-wrap > .ms-options > ul li.ms-hidden {
    display: none;
}

.ms-options-wrap > .ms-options > ul > li.optgroup {
    padding: 5px;
}
.ms-options-wrap > .ms-options > ul > li.optgroup + li.optgroup {
    border-top: 1px solid #aaa;
}

.ms-options-wrap > .ms-options > ul > li.optgroup .label {
    display: block;
    padding: 5px 0 0 0;
    font-weight: bold;
}

.ms-options-wrap > .ms-options > ul label {
    position: relative;
    display: inline-block;
    width: 100%;
    padding: 4px 4px 4px 20px;
    margin: 1px 0;
    border: 1px dotted transparent;
}
.ms-options-wrap > .ms-options.checkbox-autofit > ul label,
.ms-options-wrap > .ms-options.hide-checkbox > ul label {
    padding: 4px;
}

.ms-options-wrap > .ms-options > ul label.focused,
.ms-options-wrap > .ms-options > ul label:hover {
    background-color: #efefef;
    border-color: #999;
}

.ms-options-wrap > .ms-options > ul li.selected label {
    background-color: #efefef;
    border-color: transparent;
}

.ms-options-wrap > .ms-options > ul input[type="checkbox"] {
    margin: 0 5px 0 0;
    position: absolute;
    left: 4px;
    top: 7px;
}

.ms-options-wrap > .ms-options.hide-checkbox > ul input[type="checkbox"] {
    position: absolute !important;
    height: 1px;
    width: 1px;
    overflow: hidden;
    clip: rect(1px 1px 1px 1px);
    clip: rect(1px, 1px, 1px, 1px);
}
</style>
</head>
<body>



<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">

  <?php include "nav.php";?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $this->session->userdata('update_percent');?>%">
                      <?php echo $this->session->userdata('update_percent');?>% Profile Completed 
                    </div>
                  </div>
                 <form id="user_form">
                  <input type="hidden" name="gender" value="<?php echo $this->session->userdata('gender');?>">
                   <input type="hidden" name="email" value="<?php echo $this->session->userdata('email');?>">
                <div class="col-sm-12 col-md-12" id="content">
                              <div class="panel panel-danger">
                                <div class="panel-heading"><h4>Profile Search</h4></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-md-2">
                                             <label>Age(From)</label>
                                          <select name="age1" id="age1" class="form-control">
                                            <?php
                                            for($i=18;$i<=60;$i++){
                                              echo "<option value='".$i."'>".$i." Year</option>";
                                            }
                                            ?>
                                          </select>
                                        </div>
                                        <div class="col-md-2">
                                             <label>Age(To)</label>
                                          <select name="age2" id="age2" class="form-control">
                                            <?php
                                            for($i=18;$i<=60;$i++){
                                              echo "<option value='".$i."'>".$i." Year</option>";
                                            }
                                            ?>
                                          </select>
                                        </div>
                                        <div class="col-md-2">
                                             <label>Height(From)</label>
                                          <select name="height1" id="height1" class="form-control">
                                            <?php
                                           $height=$this->db->get("height");
                                           foreach ($height->result() as $value) {
                                            echo "<option value='".$value->value."'>".$value->name."</option>";
                                           }
                                            ?>
                                          </select>
                                        </div>
                                        <div class="col-md-2">
                                             <label>Height(To)</label>
                                          <select name="height2" id="height2" class="form-control">
                                            <?php
                                           $height=$this->db->get("height");
                                           foreach ($height->result() as $value) {
                                            $selected="";
                                            if($value->value=="170.18"){
                                              $selected="selected='selected'";
                                            }
                                            echo "<option value='".$value->value."' ".$selected.">".$value->name."</option>";
                                           }
                                            ?>
                                          </select>
                                        </div>
                                        <div class="col-md-2">
                                             <label>State</label>
                                          
                                            <select name="state[]" id="state" class="form-control 3col active" multiple="multiple" onchange="get_city(this.value);">
                                            <?php
                                            $state_query=$this->db->get_where("state",array("t_status"=>0));
                                            foreach ($state_query->result() as $key => $value) {
                                              echo "<option value='".$value->state_id."'>".$value->state_name."</option>";
                                            }
                                            ?>
                                          </select>
                                        </div>
                                        <div class="col-md-2">
                                             <label>City</label>
                                          <select name="city" id="city" class="form-control">
                                          </select>
                                        </div>
                                        <div class="col-md-2">
                                             <label>Cast</label>
                                          <select name="cast" id="cast" class="form-control">
                                          </select>
                                        </div>
                                        <div class="col-md-2">
                                             <label>Sect</label>
                                          <select name="sect" id="sect" class="form-control" onchange="get_sub_sect(this.value);">
                                          </select>
                                        </div>
                                        <div class="col-md-2">
                                             <label>Sub Sect</label>
                                          <select name="sub_sect" id="sub_sect" class="form-control">
                                          </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-footer">
                                    <button type="button" class="btn btn-warning" onclick="get_search_profile();"><i class="fa fa-search"></i> &nbsp;&nbsp;&nbsp;Search</button>
                                </div>
                               </div>

                        <div class="panel panel-danger">
                        <div class="panel-heading"><h4>My Matching Searched Profile</h4></div>
                        <div class="panel-body" id="search_profile">
                        </div>
                      </div>
                   </div>
                 </form>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.multiselect.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
  //  get_state();
      $('#state').multiselect({
    columns: 1,
    placeholder: 'All State'
      });
    get_cast();
    get_sect();

    var state_id="<?php echo $this->session->userdata('state');?>";
    var sect_id="<?php echo $this->session->userdata('sect');?>";
    var age="<?php echo $this->session->userdata('age');?>";
    $("#age2").val(age);
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

  function get_search_profile(){
    data=$("#user_form").serialize();
    $.ajax({
        url:"<?php echo base_url();?>get_search_profile",
        method:"POST",
        cache:false,
        data:data,
        success:function(result){
          var obj=JSON.parse(result);
         
          var gender="<?php echo $this->session->userdata("gender");?>";
          var default_image="bride.png";
          if(gender=="female"){
            default_image="groom.png";
          }

          $("#search_profile").html("");

          if(obj.length>0){


          $.each(obj,function(i,index){
            if(index.image==""){

              var img_src="<?php echo base_url();?>assets/images/"+default_image;
            }else{
               var img_src="<?php echo base_url();?>uploads/"+index.image;
            }

            var update_percent="<?php echo $this->session->userdata('update_percent'); ?>";
            var interest="Send Interest";
            if(index.interest=='1'){
              interest="Sent";
            }
            var course_name="";
            if(index.qualification_name!=""){
              course_name="("+index.qualification_name+")";
            }
           var profile='<div class="panel panel-primary">'+
                      '<div class="panel-heading"><b>'+index.user_id+'&nbsp;&nbsp;'+course_name+'</b></div>'+
                       ' <div class="panel-body">'+
                       '<div class="col-md-4"><img src="'+img_src+'" class="img-thumbnail" style="width:150px;height:150px"></div>'+
                       '<div class="col-md-6"><table>'+
                      ' <tr><td class="text-right">Age</td><td><b>&nbsp;&nbsp;'+index.age+' Years</b></td></tr>'+
                       ' <tr><td class="text-right">Last Qualification</td><td><b>&nbsp;&nbsp;'+index.qualification+' </b></td></tr>'+
                      ' <tr><td class="text-right">State</td><td><b>&nbsp;&nbsp;'+index.state+' </b></td></tr>'+
                      ' <tr><td class="text-right">Cast</td><td><b>&nbsp;&nbsp;'+index.cast+' </b></td></tr>'+
                      ' <tr><td class="text-right">Sect</td><td><b>&nbsp;&nbsp;'+index.sect+' </b></td></tr>'+
                      ' <tr><td class="text-right">Sub Sect</td><td><b>&nbsp;&nbsp;'+index.sub_sect+'</b> </td></tr>'+
                      '</table></div>'+
                      '<div class="col-md-2"><button class="btn btn-warning" type="button" onclick="send_interest('+update_percent+',\'' + index.email + '\');" data-toggle="modal" data-target="#myModal">'+interest+'</button></div>'+
                        '</div>'+
                      '</div>';
            $("#search_profile").append(profile);
          })
            }else{
           $("#search_profile").append("<h5 class='text-danger'>No matching for this search criteria !!!</h5>");
            }
        }
    })
  }
////////////////////////////////
function send_interest(update_percent,email){
 var from_email="<?php echo $this->session->userdata('email'); ?>";
  $("#interest_status").html("");
  if(update_percent<90){
 $("#interest_status").html("Sorry your profile is incomplete , So update and send again interest <a href='<?php echo base_url();?>my_profile'>here</a> !!!");
    }else{
          $.ajax({
        url:"<?php echo base_url();?>send_interest",
        method:"GET",
        cache:false,
        data:"to_email="+email+"&from_email="+from_email,
        success:function(result){
         var obj=JSON.parse(result);
         if(obj.result=="sent"){
          $("#interest_status").html("Sent interest Successfully");
          }else{
             $("#interest_status").html("Already Sent Interest");
          }
        }
      })
    }

}

      ///////////////////////////////////
      function get_gallery(){
    $.ajax({
        url:"<?php echo base_url();?>get_gallery",
        method:"GET",
        cache:false,
        data:"list=list",
        success:function(result){
           var obj=JSON.parse(result);
           $("#gallary").html("");
           $.each(obj,function(i,index){
            var img_src="<?php echo base_url();?>uploads/"+index.img_name;
                $("#gallary").append("<div class='col-md-4'><img src='"+img_src+"' alt='Gallery' class='img-thumbnail' style='height:250px;width:250px' /></div>");
           })
        }
    })
  }
///////////////////
 function get_cast(){
       $.ajax({
    url:"<?php echo base_url();?>Welcome/get_cast",
    method:"GET",
    data:"list=list",
    success:function(data){
    var obj= JSON.parse(data);
    $("#cast").append("<option value=''>All Cast</option>");
      $.each(obj,function(i,index){
        var selected="";
        if(index.cast_id=="<?php echo $this->session->userdata('cast'); ?>"){
            selected="selected='selected'";
        }
              $("#cast").append("<option value='"+index.cast_id+"' "+selected+">"+index.name+"</option>");
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
    $("#state").append("<option value=''>All State</option>");
      $.each(obj,function(i,index){
         var selected="";
        if(index.state_id=="<?php echo $this->session->userdata('state'); ?>"){
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
     $("#city").append("<option value=''>All City</option>");
      $.each(obj,function(i,index){
        var selected="";
         if(index.city_id=="<?php echo $this->session->userdata('city'); ?>"){
            selected="selected='selected'";
        }
              $("#city").append("<option value='"+index.city_id+"' "+selected+">"+index.city_name+"</option>");
           })
        }
    })
  }
    function get_sect(){
       $.ajax({
    url:"<?php echo base_url();?>Welcome/get_sect",
    method:"GET",
    data:"list=list",
    success:function(data){
    var obj= JSON.parse(data);
     $("#sect").append("<option value=''>All Sect</option>");
      $.each(obj,function(i,index){
         var selected="";
        if(index.sect_id=="<?php echo $this->session->userdata('sect'); ?>"){
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
      $("#sub_sect").append("<option value=''>All Sub Sect</option>");
      $.each(obj,function(i,index){
         var selected="";
          if(index.sub_sect_id=="<?php echo $this->session->userdata('sub_sect'); ?>"){
            selected="selected='selected'";
        }
              $("#sub_sect").append("<option value='"+index.sub_sect_id+"'  "+selected+">"+index.name+"</option>");
           })
        }
    })
  }

  //////////////////////////////
</script>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Interest Status</h4>
        </div>
        <div class="modal-body">
          <p id="interest_status">Sorry your profile is incomplete , So update and send again interest <a href="<?php echo base_url();?>my_profile">here</a> !!!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>
