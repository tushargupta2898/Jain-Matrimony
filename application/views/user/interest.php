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
                <?php
                $received=$this->db->get_where("send_request",array("to_user"=>$this->session->userdata("email"),"accept_reject"=>""))->num_rows();
                 $sent=$this->db->get_where("send_request",array("from_user"=>$this->session->userdata("email"),"accept_reject"=>""))->num_rows();

                 $accepted_by_me=$this->db->get_where("send_request",array("to_user"=>$this->session->userdata("email"),"accept_reject"=>"accepted"))->num_rows();
                 $accepted_by_other=$this->db->get_where("send_request",array("from_user"=>$this->session->userdata("email"),"accept_reject"=>"accepted"))->num_rows();

                 $rejected_by_me=$this->db->get_where("send_request",array("to_user"=>$this->session->userdata("email"),"accept_reject"=>"rejected"))->num_rows();
                 $rejected_by_other=$this->db->get_where("send_request",array("from_user"=>$this->session->userdata("email"),"accept_reject"=>"rejected"))->num_rows();

                ?>
                <div class="col-sm-12 col-md-12" id="content">
                  <div class="col-md-2 col-xs-12">
                    <button type="button" class="btn btn-info" onclick="get_interest('received',<?php echo $this->session->userdata('update_percent');?>);">Received Interest (<?php echo $received;?>)</button>
                  </div>
                  <div class="col-md-2 col-xs-12">
                    <button type="button" class="btn btn-danger" onclick="get_interest('sent',<?php echo $this->session->userdata('update_percent');?>);">Sent Interest (<?php echo $sent;?>)</button>
                  </div>  
                   <div class="col-md-2 col-xs-12">
                    <button type="button" class="btn btn-default" onclick="get_interest('my_acceptance',<?php echo $this->session->userdata('update_percent');?>);">My Acceptance (<?php echo $accepted_by_me;?>)</button>
                  </div> 
                  <div class="col-md-2 col-xs-12">
                    <button type="button" class="btn btn-warning" onclick="get_interest('others_acceptance',<?php echo $this->session->userdata('update_percent');?>);">Other's Acceptance (<?php echo $accepted_by_other;?>)</button>
                  </div>  
                  <div class="col-md-2 col-xs-12">
                    <button type="button" class="btn btn-primary" onclick="get_interest('my_rejection',<?php echo $this->session->userdata('update_percent');?>);">My Rejection (<?php echo $rejected_by_me;?>)</button>
                  </div>
                  <div class="col-md-2 col-xs-12">
                    <button type="button" class="btn btn-success" onclick="get_interest('others_rejection',<?php echo $this->session->userdata('update_percent');?>);">Other's Rejection (<?php echo $rejected_by_other;?>)</button>
                  </div>                 
                </div>

                   <div class="col-md-12" style="padding-top:5px;">
                      <div class="panel panel-danger">
                        <div class="panel-heading"><h4 id="interest">Interest</h4></div>
                        <div class="panel-body" id="interest_data">
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

  function get_interest(interest,update_percent){
   if(update_percent>90){
    $.ajax({
        url:"<?php echo base_url();?>get_interest",
        method:"GET",
        cache:false,
        data:"interest="+interest+"&gender=<?php echo $this->session->userdata('gender');?>&email=<?php echo $this->session->userdata('email');?>",
        success:function(result){
          var obj=JSON.parse(result);
         
          var gender="<?php echo $this->session->userdata("gender");?>";
          var default_image="bride.png";
          if(gender=="female"){
            default_image="groom.png";
          }

          $("#interest_data").html("");
          $("#interest").html("");
           if(interest=="received"){
            $("#interest").html("Received Interest");
          }
          
          if(interest=="sent"){
            $("#interest").html("Sent Interest");
          }

           if(interest=="my_rejection"){
            $("#interest").html("My Rejection");
          }

          if(interest=="my_acceptance"){
            $("#interest").html("My Acceptance");
          }

          if(interest=="others_acceptance"){
            $("#interest").html("Other's Acceptance");
          }

          if(interest=="others_rejection"){
            $("#interest").html("Other's Rejection");
          }

         var accept_reject_button="";

          if(obj.length>0){
          $.each(obj,function(i,index){
           
             if(index.accept_reject=="accepted"){
            accept_reject_button='<br /><br /><button type="button" class="btn btn-danger">Accepted</button>';
            }
             if(index.accept_reject=="rejected"){
               accept_reject_button='<br /><br /><button type="button" class="btn btn-danger">Rejected</button>';
            }
             if(index.accept_reject=="" && interest=="received"){
              var parameter1="'accepted','"+index.email+"'";
              var parameter2="'rejected','"+index.email+"'";
               accept_reject_button='<br /><br /><button type="button" class="btn btn-info" onclick="accept_receive('+parameter1+');">Accept</button><br /><br /><button type="button" class="btn btn-danger" onclick="accept_receive('+parameter2+');">Reject</button>';
            }

            if(index.accept_reject=="" && interest=="sent"){
              
               accept_reject_button='<br /><br /><button type="button" class="btn btn-info">Pending</button>';
            }

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
                       '<div class="col-md-4"><img src="'+img_src+'" class="img-thumbnail" style="width:150px;height:150px"></div>'+
                       '<div class="col-md-6"><table>'+
                      ' <tr><td class="text-right">Age</td><td><b>&nbsp;&nbsp;'+index.age+' Years</b></td></tr>'+
                      ' <tr><td class="text-right">Last Qualification</td><td><b>&nbsp;&nbsp;'+index.qualification+' </b></td></tr>'+
                      ' <tr><td class="text-right">State</td><td><b>&nbsp;&nbsp;'+index.state+' </b></td></tr>'+
                      ' <tr><td class="text-right">Cast</td><td><b>&nbsp;&nbsp;'+index.cast+' </b></td></tr>'+
                      ' <tr><td class="text-right">Sect</td><td><b>&nbsp;&nbsp;'+index.sect+' </b></td></tr>'+
                      ' <tr><td class="text-right">Sub Sect</td><td><b>&nbsp;&nbsp;'+index.sub_sect+'</b> </td></tr>'+
                      '</table></div>'+
                      '<div class="col-md-2"><button class="btn btn-warning" type="button" onclick="full_detail('+update_percent+',\'' + index.user_id + '\');" data-toggle="modal" data-target="#myModal">Full Details</button>'+accept_reject_button+'</div>'+
                        '</div>'+
                      '</div>';
            $("#interest_data").append(profile);
          })
            }else{
           $("#interest_data").append("<h5 class='text-danger'>Try again after some time , for the time best of Luck</h5>");
            }
        }
    })
     }else{
      $("#interest_data").html("");
       $("#interest_data").append("<h5 class='text-danger'>Update your profile to see detail.</h5>");
     }
  }

      ///////////////////////////////////
      function full_detail(update_percent,email){
        if(update_percent>0){
       location.href="<?php echo base_url();?>UserViewController/full_detail/"+email;
       }else{
          $("#interest_data").html("");
       $("#interest_data").append("<h5 class='text-danger'>Update your profile to see detail.</h5>");
        }
      }


      function accept_receive(action,email){
        if(confirm("Are you sure to make "+action)){
                 $.ajax({
        url:"<?php echo base_url();?>action_for_received",
        method:"POST",
        cache:false,
        data:"action="+action+"&from_email="+email+"&to_email=<?php echo $this->session->userdata('email');?>",
        success:function(result){

                    }
            })
        }

      }
</script>

</body>
</html>
