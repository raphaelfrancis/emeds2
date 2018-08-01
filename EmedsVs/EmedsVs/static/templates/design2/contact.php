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
	
	$address=$row['address'];
	$site_phone=$row['site_phone'];
	$site_mobile=$row['site_mobile'];

	$index_page_result = mysql_query("SELECT * FROM emeds_cus_pages WHERE site_id = '".$site_id."' and def_page_id='1'");
	$index_page_row=mysql_fetch_row($index_page_result);
	$index_page='index.php?username='.$_REQUEST['username'].'&page_id='.$index_page_row[0];
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Emeds Theme</title>
        <!-- Style -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/layout-semiboxed.css" rel="stylesheet">
        <?php include('css/colour.php'); ?>
        <link rel="shortcut icon" href="img/favicon.ico">
    </head>
<body class="off">
<div class="wrapbox">

	<?php include('nav.php'); ?>

	<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition">Contact</h1>
	</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="img/shp.png" class="img-responsive" alt="">
		</div>
		<section class="container">
		<div class="row">
			<div class="col-md-8 animated fadeInLeft notransition">
				<h1 class="smalltitle">
				<span>Get in Touch</span>
				</h1>
					<div class="done">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							Your message has been sent. Thank you!
						</div>
					</div>
					<form method="post" action="contact_action.php">
						<div class="form">
                            <input type="hidden" value="<?php echo $email; ?>" name="to_mail"/>
                            <input type="hidden" value="<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; ?>" name="url"/>
							<input class="col-md-6" type="text" name="name" placeholder="Name">
							<input class="col-md-6" type="text" name="email" placeholder="E-mail">
							<input class="col-md-12" type="text" name="subject" placeholder="Subject">
							<textarea class="col-md-12" name="message" rows="7" placeholder="Message"></textarea>
							<input type="submit" id="submit" class="btn" value="Send">
						</div>
					</form>
			</div>
			<div class="col-md-4 animated fadeInRight notransition">
				<h1 class="smalltitle">
				<span>Contact Us</span>
				</h1>
				
				<h4 class="font100">The Office</h4>
				<ul class="unstyled">
					<li><span style="margin-right:5px;"><i class="icon-map-marker"></i></span> Address: <?php echo (isset($address))?$address:'1234 Disney Paris, France'; ?></li>
					<li><span style="margin-right:3px;"><i class="icon-phone"></i></span> Phone: <?php echo (isset($site_phone))?$site_phone:'(123) 456-7890'; ?></li>
					<li><span style="margin-right:3px;"><i class="icon-phone"></i></span> Mobile: <?php echo (isset($site_mobile))?$site_mobile:'(123) 456-7890'; ?></li>
					<li><span style="margin-right:2px;"><i class="icon-envelope"></i></span> Email: <a href="mailto:<?php echo (isset($email))?$site_mobile:'support@emeds.co'; ?>"><?php echo (isset($email))?$site_mobile:'support@emeds.co'; ?></a></li>
				</ul>
			</div>
		</div>
		</section>
	</div>
	<?php include('footer.php'); ?>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins.js"></script>
<script src="js/common.js"></script>
</body>
</html>