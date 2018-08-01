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
?>
<!DOCTYPE HTML>
<html>
<head>
<title>EMEDS Theme</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<?php include('css/colour.php'); ?>

<!--Custom Theme files-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Interiox Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
		/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
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
		
		<!--start-top-nav-->
		<?php include('nav.php'); ?>
				<!--start-top-nav-script-->
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
	<!--//End-top-nav-script-->
			<!-- script-for-menu -->
				<script>
					$(document).ready(function(){
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(200);
						});
					});
				</script>
			<div class="clearfix"> </div>
		</div>
		<!--/header-->
            <div class="container">
        <ul class="product-head">
            <li><a href="<?php echo $index_page; ?>">Home</a> <span>::</span></li>
            <li class="active-page">Gallery</li>
            <div class="clearfix"> </div>
        </ul>
    </div>
<div class="content">
	<div class="container">
	<div class="boxes">
		<h2>Our Gallery</h2>
		     <section>
				<ul class="lb-album">
				<?php                 
                if(isset($_REQUEST['page_id']))
                {
                    $i=0;
                    $gallery_result = mysql_query("SELECT * FROM emeds_cus_gallery WHERE cus_page_id = '".$_REQUEST['page_id']."'");
                    while($gallery_array = mysql_fetch_array($gallery_result)){ $i++;
                    ?>
                    <li>
                        <a href="#image-<?php echo $i; ?>">
                            <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/<?php echo $gallery_array['image_path']; ?>">
                            <span> </span>
                        </a>
                        <div class="lb-overlay" id="image-<?php echo $i; ?>">
                            <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/<?php echo $gallery_array['image_path']; ?>" />
                            <a href="#page" class="lb-close"> </a>
                        </div>
                        
                    </li>
                    <?php 
                    }
                    
                }
                else
                {
                ?>
					<li>
						<a href="#image-1">
							<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s1.jpg" alt="">
							<span> </span>
						</a>
						<div class="lb-overlay" id="image-1">
							<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s1.jpg" alt="" />
							<a href="#page" class="lb-close"> </a>
						</div>
						
					</li>
					<li>
						<a href="#image-2">
							<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s2.jpg" alt="" />
							<span> </span>
						</a>
						<div class="lb-overlay" id="image-2">
								<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s2.jpg" alt="" /> 
							<a href="#page" class="lb-close"> </a>
						</div>
						
					</li>
					<li>
						<a href="#image-3">
							<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s3.jpg" alt="" />
							<span> </span>
						</a>
						<div class="lb-overlay" id="image-3">
							<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s3.jpg" alt="image03" />
							<a href="#page" class="lb-close"> </a>
						</div>
						
					</li>
					<li>
						<a href="#image-4">
							<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s4.jpg" alt="" />
							<span> </span>
						</a>
						<div class="lb-overlay" id="image-4">
							<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s4.jpg" alt="image04" />
							<a href="#page" class="lb-close"> </a>
						</div>
						
					</li>
				</ul>
				<ul class="lb-album">
					<li>
						<a href="#image-5">
							<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s5.jpg" alt="" />
							<span> </span>
						</a>
						<div class="lb-overlay" id="image-5">
							<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s5.jpg" alt="image05" />
							<a href="#page" class="lb-close"> </a>
						</div>
						
					</li>
					<li>
						<a href="#image-6">
							<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s6.jpg" alt="" />
							<span> </span>
						</a>
						<div class="lb-overlay" id="image-6">
							<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s6.jpg" alt="image06" />
							<a href="#page" class="lb-close"> </a>
						</div>
						
					</li>
					<li>
						<a href="#image-7">
							<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s7.jpg" alt="" />
							<span> </span>
						</a>
						<div class="lb-overlay" id="image-7">
							<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s7.jpg" alt="image07" /> 
							<a href="#page" class="lb-close"> </a>
						</div>
						
					</li>
					<li>
						<a href="#image-8">
							<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s8.jpg" alt="" />
							<span> </span>
						</a>
						<div class="lb-overlay" id="image-8">
							<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s8.jpg" alt="image08" />
							<a href="#page" class="lb-close"> </a>
						</div>
						
					</li>	
				<?php 
                }
                ?>
                <div class="clear"></div>
				</ul>
			</section>
    	</div>
	</div>
</div>

	

<?php include('footer.php'); ?>

</body>
</html>						