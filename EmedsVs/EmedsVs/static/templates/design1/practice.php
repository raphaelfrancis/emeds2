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
<!DOCTYPE HTML>
<html>
<head>
<title>EMEDS Theme</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<?php include('css/colour.php'); ?>


<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
		
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
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
        
        <script	>
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
            <li><a href="<?php echo (isset($_REQUEST['username']))?$index_page:'index.php'; ?>">Home</a> <span>::</span></li>
            <li class="active-page"><?php echo (isset($_REQUEST['username']))?$page_name:'Practice'; ?></li>
            <div class="clearfix"> </div>
        </ul>
    </div>
            
    <div class="container">
        <div class="blog-artical">
            <div class="blog-artical-info-img col-md-6 pull-right">
                <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content2.jpg" title="Welcome" class="img-thumbnail" />
            </div>
            <span class="blog-artical-info-text">
                <p>We are committed as a team to deliver the highest quality preventive, restorative, and esthetic services possible for patients. A standard of excellence in personalized dental care enables us to provide the quality dental services our patients deserve. We provide comprehensive treatment planning and use restorative and cosmetic dentistry to achieve your optimal dental health. Should a dental emergency occur, we make every effort to see and care for you as soon as possible. In our warm and friendly environment, you always come first while we provide exemplary dental care in a spirit of tenderness and gentle kindness.</p>
            	<h4>Our Team</h4>
                <p>Our dental team is dedicated to providing you with an exceptional dental experience. We strive to ensure that each visit to our office is pleasant, comfortable, and relaxing. As your dental health professionals, we want you to be confident knowing that we are a team of highly trained and skilled clinicians. We have extensive experience in taking care of patients in the private practice setting, with focus on restorative, implant, and cosmetic dentistry.
We closely with our patients and believes that active communication with the patient is a key component of the treatment plan in order to optimize end results. Our team presents various treatment options and takes the time to explain in detail the advantages and disadvantages so the patient has complete understanding of their choice. We truly believe in an individualized treatment plan for every patient based on their own needs and goals. Each member of our team is skilled and knowledgeable, as well as friendly and helpful.</p>
				<h4>Why Choose Us</h4>
                <p>We invite you to contact our dental office today to learn more about us and our talented dentists. Building a foundation of trust by treating our patients as special individuals is vital to our success. Our entire team is dedicated to providing you with excellent, personalized care and service to make your visits as comfortable and pleasant as possible. We are eager to care for you and your family!</p>
            </span> 
            
        </div>
        <div class="clearfix"></div>
    </div>



<?php include('footer.php'); ?>
</body>
</html>				