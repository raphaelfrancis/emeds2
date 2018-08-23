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
<!DOCTYPE HTML>
<html>
<head>
<title>EMEDS Theme</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<?php include('css/colour.php'); ?>

<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/modernizr.custom.js"></script>
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
<link href='http://fonts.googleapis.com/css?family=Abril+Fatface|Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
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
            <li class="active-page"><?php echo (isset($_REQUEST['username']))?$page_name:'About Us'; ?></li>
            <div class="clearfix"> </div>
        </ul>
    </div>
            
    <div class="container">
        <div class="blog-artical">
            <div class="blog-artical-info-img col-md-6 pull-right">
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
            <span class="blog-artical-info-text">
            	<h4>
				<?php if(isset($about_array)){ echo $about_array['page_heading']; } else {?>Who We Are<?php }; ?>
                </h4>
                <p><?php if(isset($about_array)){ echo nl2br($about_array['page_description']); } else {?>At the Norris Dental Science Center, we provide a wide range of oral health care services to patients, from routine checkups and cleanings to fitting braces and treating oral disease.Under the supervision of our expert faculty, dental students and residents (dentists in training) provide high-quality care at reduced rates. Some clinics require a referral from your dentist before you can make an appointment; others are by self-referral. See the clinic descriptions below and visit the clinics individual web pages to learn more.<?php }; ?></p>
            </span> 
            
        </div>
        <div class="clearfix"></div>
    </div>



<?php include('footer.php'); ?>
</body>
</html>				