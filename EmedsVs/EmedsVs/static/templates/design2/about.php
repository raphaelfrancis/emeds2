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
        
        <!-- Responsive -->
        <link href="css/responsive.css" rel="stylesheet">
        <!-- Choose Layout -->
        <link href="css/layout-semiboxed.css" rel="stylesheet">
        <!-- Choose Skin -->
        
        <?php include('css/colour.php'); ?>
        
    </head>
<body>
<div class="wrapbox">

	<?php include('nav.php'); ?>

	<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition"><?php echo (isset($_REQUEST['username']))?$page_name:'about Us'; ?></h1>
		
	</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="img/shp.png" class="img-responsive" alt="">
		</div>

		<section class="container">
		<div class="row">
			<div class="col-md-12 animated anim-slide notransition">
            	<div class="about-article col-md-6 pull-right">
                	<?php if(isset($about_array)){ 
						
					?>
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/<?php echo ($about_array['page_photo'])?$about_array['page_photo']:'default/content1.jpg'; ?>" title="<?php echo ($about_array['page_heading'])?$about_array['page_heading']:'Welcome';?>" class="img-responsive" />
                    <?php } else { ?>
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content1.jpg" title="Welcome" class="img-responsive" />
                    <?php } ?>
				</div>
                <span>
                    <h4><?php if(isset($about_array)){ echo $about_array['page_heading']; } else {?>Who We Are<?php }; ?></h4>
                    <p>
                        <?php if(isset($about_array)){ echo nl2br($about_array['page_description']); } else {?>At the Norris Dental Science Center, we provide a wide range of oral health care services to patients, from routine checkups and cleanings to fitting braces and treating oral disease.Under the supervision of our expert faculty, dental students and residents (dentists in training) provide high-quality care at reduced rates. Some clinics require a referral from your dentist before you can make an appointment; others are by self-referral. See the clinic descriptions below and visit the clinics individual web pages to learn more.<?php }; ?>
                    </p>
                </span>

				
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