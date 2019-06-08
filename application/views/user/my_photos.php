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
                 <form id="user_form" enctype="multipart/form-data" method="post" action="<?php echo base_url();?>update_gallery">
                <div class="col-sm-12 col-md-12" id="content">
                              <div class="panel panel-danger">
                                <div class="panel-heading"><h4>My Photo</h4></div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                             <label>Image Upload</label>
                                          <input type="file" name="userfile[]" multiple="multiple" class="form-control"  required="required" />
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-footer">
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </div>
                               </div>

                        <div class="panel panel-danger">
                        <div class="panel-heading"><h4>My Gallary </h4></div>
                        <div class="panel-body" id="gallary">
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
<script type="text/javascript">
 $(document).ready(function(){
   get_gallery();
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
                $("#gallary").append("<div class='col-md-3'><img src='"+img_src+"' alt='Gallery' class='img-thumbnail' style='height:200px;width:200px' /><button type='button' class='btn btn-danger btn-sm' onclick='gallery_delete("+index.id+",\""+index.img_name+"\");'><i class='fa fa-trash'></i>&nbsp;&nbsp;Delete</button></div>");
           })
        }
    })
  }

  function gallery_delete(id,img_name){
      $.ajax({
        url:"<?php echo base_url();?>gallery_delete",
        method:"POST",
        cache:false,
        data:"gallery_id="+id+"&img_name="+img_name,
        success:function(result){
            location.href="my_photos";
        }
    })
  }

</script>
</body>
</html>