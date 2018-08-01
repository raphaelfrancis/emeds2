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
	
	$index_page_result = mysql_query("SELECT * FROM emeds_cus_pages WHERE site_id = '".$site_id."' and def_page_id='1'");
	$index_page_row=mysql_fetch_row($index_page_result);
	$index_page='index.php?username='.$_REQUEST['username'].'&page_id='.$index_page_row[0];
}

if(isset($_REQUEST['page_id']))
{

	$about_result = mysql_query("SELECT * FROM emeds_cus_page_content WHERE cus_page_id = '".$_REQUEST['page_id']."'");
	$about_array = mysql_fetch_array($about_result);
	
	$pages = mysql_query("SELECT * FROM emeds_cus_pages WHERE id = '".$_REQUEST['page_id']."'");
	$pagename = mysql_fetch_row($pages);
	$page_name=$pagename[3];
}
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Our Practice | Emeds Theme</title>
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

</head>

<body>

<div class="theme-container">	
	<header id="masthead" class="header-with-topbar std-header">
	<?php include('header.php'); ?>
	</header>
	<div class="title-holder title-overlay title-bg">
		<div class="container">
			<h1> Our Practice </h1>
		</div>
	</div>
	<div class="content-wrap">
		<div class="row-fw fw-padding-top-90">
			<div class="container">					
				<div class="heading no-border center">
                    
                    <div class="col-6 pull-right" style="margin-bottom:40px">
                    
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content2.jpg" title="Welcome"/>
                                 
					</div>
                    <span>
                    
                <p>We are committed as a team to deliver the highest quality preventive, restorative, and esthetic services possible for patients. A standard of excellence in personalized dental care enables us to provide the quality dental services our patients deserve. We provide comprehensive treatment planning and use restorative and cosmetic dentistry to achieve your optimal dental health. Should a dental emergency occur, we make every effort to see and care for you as soon as possible. In our warm and friendly environment, you always come first while we provide exemplary dental care in a spirit of tenderness and gentle kindness.</p>
            	<h2>Our Team</h2>
                <p>Our dental team is dedicated to providing you with an exceptional dental experience. We strive to ensure that each visit to our office is pleasant, comfortable, and relaxing. As your dental health professionals, we want you to be confident knowing that we are a team of highly trained and skilled clinicians. We have extensive experience in taking care of patients in the private practice setting, with focus on restorative, implant, and cosmetic dentistry.
We closely with our patients and believes that active communication with the patient is a key component of the treatment plan in order to optimize end results. Our team presents various treatment options and takes the time to explain in detail the advantages and disadvantages so the patient has complete understanding of their choice. We truly believe in an individualized treatment plan for every patient based on their own needs and goals. Each member of our team is skilled and knowledgeable, as well as friendly and helpful.</p>
				<h2>Why Choose Us</h2>
                <p>We invite you to contact our dental office today to learn more about us and our talented dentists. Building a foundation of trust by treating our patients as special individuals is vital to our success. Our entire team is dedicated to providing you with excellent, personalized care and service to make your visits as comfortable and pleasant as possible. We are eager to care for you and your family!</p>
                                 
					</span>
				</div>
				<div class="topmargin-60"></div>
			</div>
		</div>
	</div>

	<?php include('footer.php'); ?>
	
</div>
<div id="goto-top" class="top"></div>

</body>
<script src="js/jquery.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/functions.js"></script>
</html>