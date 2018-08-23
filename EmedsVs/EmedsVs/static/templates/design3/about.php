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
	$result = mysqli_query($conn,"SELECT * FROM emeds_cus_sites WHERE site_username = '".$_REQUEST['username']."'");
	$row = mysqli_fetch_array($result);
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
	
	$index_page_result = mysqli_query($conn,"SELECT * FROM emeds_cus_pages WHERE site_id = '".$site_id."' and def_page_id='1'");
	$index_page_row=mysqli_fetch_row($index_page_result);
	$index_page='index.php?username='.$_REQUEST['username'].'&page_id='.$index_page_row[0];
}

if(isset($_REQUEST['page_id']))
{

	$about_result = mysqli_query($conn,"SELECT * FROM emeds_cus_page_content WHERE cus_page_id = '".$_REQUEST['page_id']."'");
	$about_array = mysqli_fetch_array($about_result);
	
	$pages = mysqli_query($conn,"SELECT * FROM emeds_cus_pages WHERE id = '".$_REQUEST['page_id']."'");
	$pagename = mysqli_fetch_row($pages);
	$page_name=$pagename[3];
}
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>About Us | Emeds Theme</title>
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
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->

	

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
			<h1> <?php echo (isset($_REQUEST['username']))?$page_name:'About Us'; ?> </h1>
		</div>
  </div>
	<!-- *** BREADCRUMB END *** -->
	
	<!-- *** CONTENT WRAP STARTS *** -->
	<div class="content-wrap">
		
		<div class="row-fw fw-padding-top-90">
			<div class="container">					
				<div class="heading no-border center">
					<h2><span> <?php if(isset($about_array)){ echo $about_array['page_heading']; } else {?>Who We Are<?php }; ?> </span> </h2>
                    
                  <div class="col-6 pull-right">
                    
					<?php if(isset($about_array)){ 
                        if($about_array['page_photo']){
                        ?>
                        <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/<?php echo $about_array['page_photo']; ?>" title="<?php if(isset($about_array)){ echo $about_array['page_heading']; } else {?>Welcome<?php }; ?>" class="img-thumbnail" />
                        <?php } 
							else
							{
							?>
                            <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content1.jpg" title="Welcome"/>
                            <?php
							}
                        }
                    else { ?>
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content1.jpg" title="Welcome"/>
                    <?php } ?>
					</div>
                    <div>
                    
				      <p><?php if(isset($about_array)){ echo nl2br($about_array['page_description']); } else {?>At the Norris Dental Science Center, we provide a wide range of oral health care services to patients, from routine checkups and cleanings to fitting braces and treating oral disease.Under the supervision of our expert faculty, dental students and residents (dentists in training) provide high-quality care at reduced rates. Some clinics require a referral from your dentist before you can make an appointment; others are by self-referral. See the clinic descriptions below and visit the clinics individual web pages to learn more.<?php }; ?></p>
					</div>
				</div>
				<div class="topmargin-60"></div>
			</div>
		</div>
	</div>
<!-- *** CONTENT WRAP END *** -->

	<?php include('footer.php'); ?>
	
</div>
<div id="goto-top" class="top"></div>

<script src="js/jquery.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/functions.js"></script>

</body>
</html>