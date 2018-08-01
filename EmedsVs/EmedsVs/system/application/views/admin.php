<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Emeds">

    <title>Administrator | Emeds</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>static/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>static/admin/css/emeds.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>static/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/index/images/favicon.png">

    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>static/admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>static/admin/js/bootstrap.min.js"></script>
    
<script type="text/javascript">
function numbersonly(e){
    var unicode=e.charCode? e.charCode : e.keyCode
    if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
        if (unicode<48||unicode>57) //if not a number
            return false //disable key press
    }
}
</script>

</head>

<body>

<div class="alert alert-success" id="alert_box">
    <div id="loading"><img src="<?php echo base_url(); ?>static/index/images/loading.gif" /></div>
    <div id="alert_content"></div>
</div>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>admin/dashboard">
                <img alt="image" style="width:75%" class="img-responsive" src="<?php echo base_url(); ?>static/admin/images/logo.png"/>
				</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i></a>
                    </li>
                	<li>
                        <a href="#"><i class="fa fa-fw fa-bell"></i></a>
                    </li>
                <li class="dropdown"> 
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span>
                            <img alt="image" class=" img-thumbnail img-xs" src="<?php echo base_url(); ?>static/admin/images/profile.jpg" />
                    </span> 
                     Emeds <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url(); ?>admin/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                
                    <li <?php if($this->uri->segment(2)=='dashboard'){echo 'class="active"';}; ?>>
                        <a href="<?php echo base_url(); ?>admin/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li <?php if($this->uri->segment(2)=='category' || $this->uri->segment(2)=='pages'){echo 'class="active"';}; ?>>
                        <a href="<?php echo base_url(); ?>admin/category"><i class="fa fa-fw  fa-sign-out"></i> Category</a>
                    </li>
                    <li <?php if($this->uri->segment(2)=='customers' || $this->uri->segment(2)=='pages'){echo 'class="active"';}; ?>>
                        <a href="<?php echo base_url(); ?>admin/customers"><i class="fa fa-fw  fa-sign-out"></i> Customers</a>
                    </li>
                     
                                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <?php echo $contents; ?>
        <!-- /#page-wrapper -->


 </div>
</body>

</html>
