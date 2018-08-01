<?php 
session_start(); 
if(isset($_REQUEST['colour'])){
	$_SESSION['colour']=$_REQUEST['colour'];
	$_SESSION['username']='';
}
$site_logo='';
$index_page='index.php';

if(isset($_REQUEST['username']))
{
	include('../db.php');
	$result = mysql_query("SELECT * FROM emeds_cus_sites WHERE site_username = '".$_REQUEST['username']."'");
	$row = mysql_fetch_array($result);
	$_SESSION['colour']=$row['site_colour_code'];
	$_SESSION['site_name']=$row['site_name'];
	$email=$row['site_email'];
	$mobile=$row['site_mobile'];
	$site_logo=$row['site_logo'];
	$site_id=$row['site_id'];
	$site_name=$row['site_name'];
	$facebook=$row['facebook'];
	$twitter=$row['twitter'];
	$google_plus=$row['google_plus'];
	$youtube=$row['youtube'];
	
	$address=$row['address'];
	$site_phone=$row['site_phone'];
	$site_mobile=$row['site_mobile'];
	
	$index_page_result = mysql_query("SELECT * FROM emeds_cus_pages WHERE site_id = '".$site_id."' and def_page_id='1'");
	$index_page_row=mysql_fetch_row($index_page_result);
	$index_page='index.php?username='.$_REQUEST['username'].'&page_id='.$index_page_row[0];
	
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Us | Emeds Theme</title>
	<meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700' rel='stylesheet' type='text/css'>	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	

	<?php include('css/colour.php'); ?>
    
    
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/hover.css">
	<link rel="stylesheet" href="css/animsition.min.css">
	<link rel="stylesheet" href="css/ui.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->


	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/jquery.gmap.js"></script>
</head>

<body>

<!-- *** THEME CONTAINER STARTS *** -->
<div class="theme-container">
	
	<!-- *** HEADER STARTS *** -->
	<header id="masthead" class="header-with-topbar std-header">
	<?php include('header.php'); ?>
	</header>
	<!-- *** HEADER END *** -->

	<!-- *** BREADCRUMB STARTS *** -->
	<div class="title-holder title-overlay title-bg">
		<div class="container">
			<h1> Contact Us </h1>
		</div>
  </div>
	<!-- *** BREADCRUMB END *** -->
	
	<!-- *** CONTENT WRAP STARTS *** -->
	<div class="container">

			

			<div class="topmargin-80"></div>

			<div class="row">
				<div class="col-8">
					<div class="heading no-border">
						<h3> Feedback <span> Form </span> </h3>
				  </div>
                	<label style="color:#0C0; margin-top:10px"><?php  if(isset($_SESSION["message"])){ echo $_SESSION["message"]; session_destroy();  }  ?></label>
                    <form class="con" action="contact_action.php" method="post"> 
                    	<input type="hidden" value="<?php echo $email; ?>" name="to_mail"/>
                        <input type="hidden" value="<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; ?>" name="url"/>
                        <div class="contact-form-result"></div>
                        <div class="form-process"></div>
                        <div class="row">
                            <div class="col-4">
                                <input type="text" name="name" id="name" class="form-control required" placeholder="Your Name" aria-required="true">
                            </div>
                            <div class="col-4">
                                <input type="email" size="" value="" name="email" id="email" placeholder="Your Email" class="form-control required email" aria-required="true">
                            </div>
                            <div class="col-4">
                            	<input type="text" class="form-control ignore" placeholder="Subject" name="subject" required>
                            </div>
                        </div>
                        <textarea name="message" id="message" class="form-control required" placeholder="Message" aria-required="true"></textarea>
                        <input type="submit" value="Send Now" class="submit" id="submit" name="submit">
                    </form>
				</div>
				<div class="col-4">	
					<div class="heading no-border">
						<h3> Contact <span> Details </span> </h3>
				  </div>				
					<div class="topmargin-20"></div>
	        		<div class="contact-with-large-icon">
			        	<div class="contact-icon-holder">
			        		<i class="fa fa-phone"></i>
                      	</div>
			        	<div class="contact-text-holder">
			        		<p> PH  : <?php echo (isset($site_phone))?$site_phone:'(123) 456-7890'; ?> </p>
			        		<p> MOB : <?php echo (isset($site_mobile))?$site_mobile:'(123) 456-7890'; ?> </p>
			        	</div>
			        </div> 
        		  <div class="topmargin-30"></div>
	        		<div class="contact-with-large-icon">
			        	<div class="contact-icon-holder">
			        		<i class="fa fa-envelope"></i>			        	
                      	</div>
			        	<div class="contact-text-holder">
			        		<p> <a href="<?php echo (isset($email))?$email:'support@emeds.co'; ?>"><?php echo (isset($email))?$email:'support@emeds.co'; ?></a> </p>
			        		<span> we reply within 24 hours </span>			        	
                     	</div>
			        </div> 
        		  <div class="topmargin-30"></div>
	        		<div class="contact-with-large-icon">
			        	<div class="contact-icon-holder">
			        		<i class="fa fa-map-marker"></i>			        	
                      	</div>
			        	<div class="contact-text-holder">
			        		<p> <?php echo (isset($address))?$address:'1234 Disney Paris, France'; ?> </p>
			        	</div>
			        </div>
		      </div>	
			</div>
		</div>

    <div class="topmargin-80"></div>

	<?php include('footer.php'); ?>
</div>

<div id="goto-top" class="top"></div>

<script src="js/plugins.js"></script>
<script src="js/functions.js"></script>

</body>
</html>