<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register & Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
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
        width: 100%;
      
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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>" style="color:white;"> Jain Matrimony</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
        <li><a href="<?php echo base_url();?>register_login" style="color:white;">Login/Register</a></li>
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
      <form id="user_form">
        <input type="hidden" name="email" value=""  />
                <div class="col-sm-12 col-md-12" id="content">
                              <div class="panel panel-danger">
                                <div class="panel-heading"><h4>Profile Search</h4></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                      <div class="col-md-2">
                                          <input type="radio" name="gender" value="male" required="required" checked="checked" style="margin-top:23px" />&nbsp;&nbsp;Aspirant &nbsp;&nbsp;
                                          <input type="radio" name="gender" value="female" required="required" style="margin-top:23px" />&nbsp;&nbsp;Groom
                                         
                                        </div>
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
                                              $selected="";
                                              if($i==60){
                                                $selected="selected='selected'";
                                              }
                                              echo "<option value='".$i."' ".$selected.">".$i." Year</option>";
                                            }
                                            ?>
                                          </select>
                                        </div>
                                        <div class="col-md-2">
                                             <label>State</label>
                                          <select name="state[]" id="state" class="form-control 3col active" multiple="multiple">
                                            <?php
                                            $state_query=$this->db->get_where("state",array("t_status"=>0));
                                            foreach ($state_query->result() as $key => $value) {
                                              echo "<option value='".$value->state_id."'>".$value->state_name."</option>";
                                            }
                                            ?>
                                          </select>
                                        </div>
                                         
                                        <div class="col-md-2">
                                             <label>Qualification</label>
                                          <select name="qualification" id="qualification" class="form-control">
                                          </select>
                                        </div>
                                        <div class="col-md-2">
                                           <button type="button" class="btn btn-warning" onclick="get_search_profile();" style="margin-top:23px"><i class="fa fa-search"></i> &nbsp;&nbsp;&nbsp;Search</button>
                                        </div>
                                    </div>
                                </div>                                
                               </div>

                        <div class="panel panel-danger">
                        <div class="panel-heading"><h4>Matching Searched Profile</h4></div>
                        <div class="panel-body" id="search_profile">
                        </div>
                      </div>
                   </div>
                 </form>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.multiselect.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
   // get_state();
    get_cast();
    get_last_qualification();
    get_search_profile();
   // $('select[multiple]').multiselect();
    $('#state').multiselect({
    columns: 1,
    placeholder: 'All State'
      });
  })

  
  function get_search_profile(){
    data=$("#user_form").serialize();
    $.ajax({
        url:"<?php echo base_url();?>get_search_profile",
        method:"POST",
        cache:false,
        data:data,
        success:function(result){
          var obj=JSON.parse(result);
         
          var gender= $("input[name='gender']:checked").val();
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
            var course_name="";
            if(index.qualification_name!=""){
              course_name="("+index.qualification_name+")";
            }
           var profile='<div class="panel panel-primary">'+
                      '<div class="panel-heading"><b>'+index.user_id+'&nbsp;&nbsp;'+course_name+'</b></div>'+
                       ' <div class="panel-body">'+
                       '<div class="col-md-4"><img src="'+img_src+'" class="img-thumbnail" style="width:120px;height:120px"></div>'+
                       '<div class="col-md-6"><table>'+
                      ' <tr><td class="text-right">Age</td><td><b>&nbsp;&nbsp;&nbsp;'+index.age+' Years</b></td></tr>'+
                       ' <tr><td class="text-right">Last Qualification</td><td><b>&nbsp;&nbsp;&nbsp;&nbsp;'+index.qualification+' </b></td></tr>'+
                      ' <tr><td class="text-right">State</td><td><b>&nbsp;&nbsp;&nbsp;'+index.state+' </b></td></tr>'+
                      ' <tr><td class="text-right">Cast</td><td><b>&nbsp;&nbsp;&nbsp;&nbsp;'+index.cast+' </b></td></tr>'+
                      ' <tr><td class="text-right">Sect</td><td><b>&nbsp;&nbsp;&nbsp;'+index.sect+' </b></td></tr>'+
                      ' <tr><td class="text-right">Sub Sect</td><td><b>&nbsp;&nbsp;&nbsp;'+index.sub_sect+'</b> </td></tr>'+
                      '</table></div>'+
                      '<div class="col-md-2"><button class="btn btn-warning" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-heart"></i> &nbsp;&nbsp;&nbsp;View Detail</button></div>'+
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


      ///////////////////////////////////
      function get_last_qualification(){
       $.ajax({
    url:"<?php echo base_url();?>Welcome/get_last_qualification",
    method:"GET",
    data:"list=list",
    success:function(data){
    var obj= JSON.parse(data);
    $("#qualification").html("");
     $("#qualification").append("<option value=''>All Qualification</option>");
      $.each(obj,function(i,index){
              $("#qualification").append("<option value='"+index.id+"'>"+index.name+"</option>");
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

    function get_sect(){
       $.ajax({
    url:"<?php echo base_url();?>Welcome/get_sect",
    method:"GET",
    data:"list=list",
    success:function(data){
    var obj= JSON.parse(data);
    
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
          <p id="interest_status">You need to Login to see detail , <a href="<?php echo base_url();?>register_login">Login here</a> !!!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>
