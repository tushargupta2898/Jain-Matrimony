<!DOCTYPE html>
<html>
<head>
    <title>Marital Status Master</title>
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
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/validationEngine.jquery.min.css" />
</head>
<body>



<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">

  <?php include "admin_nav.php";?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
               
              <section class="content">
    <div class="alert alert-success">
        <strong id="msg"></strong>
      </div>
      <div class="col-sm-6">
      <form id="user_form" class="form-horizontal" enctype="multipart/form-data" >
              <input type="hidden" value="add" name="fstatus" id="fstatus" class="form-control" />
              <input type="hidden" value="" name="sno" id="sno" class="form-control" />

             <div class="panel panel-danger">
                                <div class="panel-heading"><b>Marital Status Master</b></div>
                                <div class="panel-body">
                 <div class="form-group">
                  <label for="prod_category" class="col-sm-4 control-label">Marital Status</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control validate[required]" name="marital_status" id="marital_status" placeholder="Marital Status">
                  </div>
                </div>

              

                <div class="form-group">
                  <div class="col-sm-3 col-sm-offset-9">
                    <button type="button" class="form-control btn btn-primary" onclick="newsubmit();"><b><span class="pull-left"><i class="fa fa-save"></i></span>Submit</b></button>
                  </div>
                
                </div>
            </div>
        </div>
              
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </form>
          </div>
          <div class="col-sm-6">
         
            <table class='table table-hover table-strip table-responsive'>
            <thead class='bg-secondary'>
              <tr>
              <th>S.No.</th>
              <th>Marital Status</th>
              <th>Action<th>
              </tr>
            </thead>
            <tbody>
            </tbody>
            </table>
            </div>         
      <!-- /.row -->

    </section>
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-en.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>
<script type="text/javascript">
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
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".alert").hide();
    $("#result").hide();
    show_list();
  })
   function newsubmit(){
       
        var valid = $("#user_form").validationEngine('validate');
             if (valid == true) {
               var data=$("#user_form").serialize();
               
                 $.ajax({
                        url: "<?php echo base_url(); ?>AdminController/insert/marital_status/id",
                        type: "POST",
                        data: data,
                        cache: false,
                        success: function (html_data){
                           $(".alert").show();
                        
                         if(html_data==1){
                             $("#user_form")[0].reset();
                             $('#fstatus').val("add");   
                             $("#marital_status").focus();
                             $("#msg").html("Successfully Submitted.");
                             $("#msg").slideUp(10000).delay(5000).slideDown(1000);
                             $("#form_div").hide();
                            show_list();

                           }else{
                             $("#msg").html("Already Existed !!!");
                             $("#msg").slideUp(1000).delay(5000).slideDown(500);
                            
                              }
                            }
                        });
          }
       
      }
      ////////////////////////////////
       function show_list(){
        var data="list=list";
        $.ajax({
          url:"<?php echo base_url(); ?>AdminController/marital_status_list",
          data:data,
          type:"get",
          cache:false,
          success:function(result){
          var obj=JSON.parse(result);
          var tr="";
          var j=0;
          $("#form_div").hide();
          $("#result").show();
          $("tbody").empty();
          $.each(obj, function(i, item) {
            j=i+1;
            tr="<tr><td>"+j+"</td><td>"+item.marital_status+"</td><td><button type='button' class='btn btn-warning' onclick='get_record("+item.id+")'><i class='fa fa-pencil'></i></button>&nbsp;&nbsp;&nbsp;<button type='button' class='btn btn-danger' onclick='delete_record("+item.id+")'><i class='fa fa-trash'></i></button></td></tr>";
           
           $("tbody").append(tr);
          })
            
          }
        })
      }
      //////////////////////////////////
       function get_record(id){
         var url = "<?php echo base_url(); ?>AdminController/marital_status_record?id=" + id;
             $.get(url, function (data) {
              var obj=JSON.parse(data);
              if(obj.msg=="success"){
              $("#fstatus").val("edit");
               $("#sno").val(obj.id);
                $("#form_div").show();
                $("#result").hide();
               $.each(obj, function(i, item) {
                $("#"+i).val(item);
               })
             }else{
              alert("Invalid Data");
             }
             
            });
      }
      //////////////////////
      function delete_record(id) {
                                                    var r = confirm("Do You Want to Delete");
                                                    if (r == true) {
                                                        $.ajax({
                                                            url: "<?php echo base_url(); ?>AdminController/delete_record/marital_status/id",
                                                            type: "POST",
                                                            data: {id: id},
                                                            cache: false,
                                                            success: function (html) {
                                                              
                                                              if(html==1){
                                                                show_list();
                                                                $("#msg").html("Deleted Successfully");
                                                                $("#msg").slideUp(1000).delay(5000).slideDown(500);
                                                              }else{
                                                                 $("#msg").html("Deletion Failed !!!");
                                                                $("#msg").slideUp(1000).delay(5000).slideDown(500);
                                                              }
                             
                                                            }
                                                        });
                                                        return false;
                                                    }
                                                }
     /////////////////////////////////
     function new_form(){
       $("#form_div").show();
       $("#result").hide();
        $("#user_form")[0].reset();
       $('#fstatus').val("add");   
      $("#marital_status").focus();
     }
</script>
</body>
</html>
