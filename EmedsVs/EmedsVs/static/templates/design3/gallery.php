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
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Gallery | Emeds Theme</title>
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
			<h1> Gallery </h1>
		</div>
  </div>
	<div class="content-wrap">
		<div class="container">
					
				<div class="portfolio-holder row"  data-lightbox="gallery">	
				<?php                 
                if(isset($_REQUEST['page_id']))
                {
                    $i=0;
                    $gallery_result = mysql_query("SELECT * FROM emeds_cus_gallery WHERE cus_page_id = '".$_REQUEST['page_id']."'");
                    while($gallery_array = mysql_fetch_array($gallery_result)){ $i++;
                    ?>					
                    <article class="col-3 portfolio-item">
						<figure>
							<a href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/<?php echo $gallery_array['image_path']; ?>" data-lightbox="gallery-item"><img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/<?php echo $gallery_array['image_path']; ?>"></a>						</figure>              
					</article>
                    <?php 
                    }
                    
                }
                else
                {
                ?>
                	
                    <article class="col-3 portfolio-item">
						<figure>
							<a href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s1.jpg" data-lightbox="gallery-item"><img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s1.jpg"></a>						</figure>              
					</article>                    
					<article class="col-3 portfolio-item">
						<figure>
							<a href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s2.jpg" data-lightbox="gallery-item"><img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s2.jpg"></a>						</figure>              
					</article>
					<article class="col-3 portfolio-item">
						<figure>
							<a href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s3.jpg" data-lightbox="gallery-item"><img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s3.jpg"></a>						</figure>              
					</article>
					<article class="col-3 portfolio-item">
						<figure>
							<a href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s4.jpg" data-lightbox="gallery-item"><img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s4.jpg"></a>						</figure>              
					</article>
					<article class="col-3 portfolio-item">
						<figure>
							<a href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s5.jpg" data-lightbox="gallery-item"><img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s5.jpg"></a>						</figure>              
					</article>
					<article class="col-3 portfolio-item">
						<figure>
							<a href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s6.jpg" data-lightbox="gallery-item"><img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s6.jpg"></a>						</figure>              
					</article>
					<article class="col-3 portfolio-item">
						<figure>
							<a href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s7.jpg" data-lightbox="gallery-item"><img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s7.jpg"></a>						</figure>              
					</article>
					<article class="col-3 portfolio-item">
						<figure>
							<a href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s8.jpg" data-lightbox="gallery-item"><img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s8.jpg"></a>						</figure>              
					</article>
                    <?php 
                }
                ?>
				</div>
		</div>
	</div>

  <?php include('footer.php'); ?>
	
</div>

<div id="goto-top" class="top"></div>

</body>
<script src="js/jquery.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/jquery.infinitescroll.min.js"></script>
<script src="js/functions.js"></script>
</html>