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
<!DOCTYPE HTML>
<html>
<head>
<title>EMEDS Theme</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<?php include('css/colour.php'); ?>

<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/modernizr.custom.js"></script>

 <!--start-smoth-scrolling-->
<script type="text/javascript" src="js/easing.js"></script>
		

<!--start-smoth-scrolling-->
<!--webfonts-->
 <link href='http://fonts.googleapis.com/css?family=Abril+Fatface|Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<!--webfonts-->
</head>
<body>
<!--header-->
	<div class="header-section">
		<?php include('header.php'); ?>
		<?php include('nav.php'); ?>

    <script>
        $(function() {
            var pull 		= $('#pull');
                menu 		= $('nav ul');
                menuHeight	= menu.height();
            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
            $(window).resize(function(){
                var w = $(window).width();
                if(w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
    </script>
    
    <script>
        $(document).ready(function(){
            $("span.menu").click(function(){
                $(".top-nav ul").slideToggle(200);
            });
        });
    </script>
        <div class="clearfix"> </div>
    </div>
    <div class="container">
        <ul class="product-head">
            <li><a href="<?php echo $index_page; ?>">Home</a> <span>::</span></li>
            <li class="active-page">Contact</li>
            <div class="clearfix"> </div>
        </ul>
    </div>
    <!--/header-->
    <div class="contact-section">
		
		<div class="contact-inner">
		  <div class="container">
          	<div class="col-md-8">
                <h4>Contact Us</h4>
                <label style="color:#0C0; margin-top:10px"><?php  if(isset($_SESSION["message"])){ echo $_SESSION["message"]; session_destroy();  }  ?></label>
                <form class="con" action="contact_action.php" method="post"> 
                    <input type="hidden" value="<?php echo $email; ?>" name="to_mail"/>
                    <input type="hidden" value="<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]; ?>" name="url"/>
                    <input type="text" class="text" name="name" placeholder="Name" required >
                    <input type="email" class="text" name="email" placeholder="Email Address" required>
                    <input type="text" class="text" placeholder="Subject" name="subject" required>
                    <textarea value="Message" placeholder="Message" name="message"></textarea>
                    <div class="clearfix"> </div>
                    <div class="sub-button">
                        <input name="submit" type="submit" value="Send">
                    </div>
                </form>
			</div>
            <div class="col-md-4">
                <h4>Contact Details</h4>
                <ul class="unstyled">
					<li> Address: <?php echo (isset($address))?$address:'1234 Disney Paris, France'; ?></li>
					<li> Phone: <?php echo (isset($site_phone))?$site_phone:'(123) 456-7890'; ?></li>
					<li> Mobile: <?php echo (isset($site_mobile))?$site_mobile:'(123) 456-7890'; ?></li>
					<li> Email: <a href="<?php echo (isset($email))?$email:'support@emeds.co'; ?>"><?php echo (isset($email))?$email:'support@emeds.co'; ?></a></li>
				</ul>
                
            </div>
		</div>
		</div>
	</div>
	<?php include('footer.php'); ?>

</body>
</html>				