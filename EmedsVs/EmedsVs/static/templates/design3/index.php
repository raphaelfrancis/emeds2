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
?>
<!doctype html>
<html>
	<meta charset="utf-8">
	<title>Emeds Theme</title>
	<meta name="keywords" content="Emeds">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
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

	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.css">

    <link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>

<body>
<div class="theme-container">	
	
    <header id="masthead" class="transparent-header">
	<?php include('header.php'); ?>
    </header>

	<div class="content-wrap">

		<div class="slider-wrap">
			<div class="tp-banner-container fullscreen-container">
			    <div class="tp-banner">    
			        <ul>	
					<?php                 
                    if(isset($_REQUEST['page_id']))
                    {
                        $i=0;
                        $banner_result = mysqli_query($conn,"SELECT * FROM emeds_cus_banner WHERE cus_page_id = '".$_REQUEST['page_id']."'");
                        while($banner_array = mysql_fetch_array($banner_result)){ $i++;
                        ?>
                            <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off">
                                <img src="<?php echo $_SESSION['base_url']; ?>uploads/banner/<?php echo $banner_array['image_path']; ?>"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            </li>
                        <?php 
                        }
                    }
                    else
                    {
                    ?>
			            <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off">
			                <img src="images/slider1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
			            </li>
			            <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off">
			                <img src="images/slider2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
			            </li>
			            <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off">
			                <img src="images/slider3.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
			            </li>
                        
					<?php
                    }
                    ?>
			        </ul>
			    </div>
			</div>

		</div>
		<?php    
        if(isset($_REQUEST['page_id']))
        {
            $result = mysqli_query($conn,"SELECT * FROM emeds_cus_pages WHERE site_id = '".$site_id."' and def_page_id='2'");
            $array = mysqli_fetch_row($result);
            $about_id=$array[0];
        
            $about_result = mysqli_query($conn,"SELECT * FROM emeds_cus_page_content WHERE cus_page_id = '".$about_id."'");
            $about_array = mysqli_fetch_array($about_result);
        
        }
        ?>        
        <div class="row-fw fw-padding-top-80 fw-btm-border-colored">
			<div class="container">
				<div class="row">

                <div class="col-6">
                    
				<?php if(isset($about_array)){ 
					if($about_array['page_photo']){
					?>
					<img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/<?php echo $about_array['page_photo']; ?>" title="<?php if(isset($about_array)){ echo $about_array['page_heading']; } else {?>Welcome<?php }; ?>" class="img-thumbnail" />
					<?php }
						else
						{
						?>
                        <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content1.jpg" />
                        <?php	
						} 
					}
				else { ?>
                <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content1.jpg" />
                <?php } ?>                 
					</div>

					<div class="col-6">
						<h2><span> <?php if(isset($about_array)){ echo $about_array['page_heading']; } else {?>Welcome<?php }; ?> </span></h2>
						<p> <?php if(isset($about_array)){ echo nl2br(substr($about_array['page_description'],0,500)); } else {?>At the Norris Dental Science Center, we provide a wide range of oral health care services to patients, from routine checkups and cleanings to fitting braces and treating oral disease.Under the supervision of our expert faculty, dental students and residents (dentists in training) provide high-quality care at reduced rates. Some clinics require a referral from your dentist before you can make an appointment; others are by self-referral. See the clinic descriptions below and visit the clinics individual web pages to learn more.<?php }; ?> </p>	
                        <div class="alignright">
                        <?php if(isset($_REQUEST['username'])){ ?>
                        <a href="about.php?username=<?php echo $_REQUEST['username']; ?>&page_id=<?php echo $about_array['cus_page_id']; ?>" class="button stroke-style hvr-shutter-out-horizontal"> Read More >> </a>
                        <?php } else { ?>
                        <a href="about.php" class="button stroke-style hvr-shutter-out-horizontal"> Read More >> </a>
                        <?php } ?>
                        
                        </div>					
					</div>

				</div>
			</div>
            <br/>
		</div>

		<div class="topmargin-60"> </div>
        <div class="heading center">
			<h4> Services </h4>
		</div>
		<div class="row-fw fw-btm-border">
			<div class="container">
				<div class="row">
                
	<?php                 
    if(isset($_REQUEST['page_id']))
    {
        $result = mysqli_query($conn,"SELECT * FROM emeds_cus_pages WHERE site_id = '".$site_id."' and def_page_id='3'");
        $array = mysqli_fetch_row($result);
        $service_id=$array[0];
    
        $service_result = mysqli_query($conn,"SELECT * FROM emeds_cus_page_content WHERE cus_page_id = '".$service_id."' LIMIT 4");
    		$i=0;
			while($service_array = mysqli_fetch_array($service_result)){ $i++;
            ?>
            
                            
            <div class="col-3 hvr-float">
                <div class="icon-with-title circle center style1">
                    <div class="icon-holder">
                        <?php if($service_array['page_photo']){ ?>
                        <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/<?php echo $service_array['page_photo']; ?>" >
                        <?php  } else { ?>
                        <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content1.jpg" class="img-responsive">
                        <?php } ?>
                    </div>							
                    <h6> <a href="service.php?username=<?php echo $_REQUEST['username']; ?>&page_id=<?php echo $service_array['cus_page_id']; ?>"><?php echo $service_array['page_heading']; ?></a> </h6>
                </div>
            </div>
                    

            <?php 
            }
        }
        else
        {
		?>                
                
                    
                    

					<div class="col-3 hvr-float">
						<div class="icon-with-title circle center style1">
							<div class="icon-holder">
								<img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content2.jpg">
							</div>							
							<h6><a href="service.php">Sealants</a></h6>
						</div>
					</div>
                    
                    <div class="col-3 hvr-float">
						<div class="icon-with-title circle center style1">
							<div class="icon-holder">
								<img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content3.jpg">
							</div>							
							<h6><a href="service.php">Periodontal Therapy</a></h6>
						</div>
					</div>

					<div class="col-3 hvr-float">
						<div class="icon-with-title circle center style1">
							<div class="icon-holder">
								<img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content2.jpg">
							</div>
							<h6><a href="service.php">Dental Fillings</a></h6>
						</div>
					</div>

					<div class="col-3 hvr-float">
						<div class="icon-with-title circle center style1">
							<div class="icon-holder">
								<img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content3.jpg">
							</div>
							<h6><a href="service.php">Root Canal Therapy</a></h6>
						</div>
					</div>
                    
			<?php 
            }
            ?>
				</div>
			</div>
		</div>

		
        <div class="topmargin-60"> </div>

		<div class="heading center">
			<h4> Gallery </h4>
		</div>

		<div class="row-fw">
			<div class="container">
				<div class="row">

					<div class="topmargin-20"> </div>

					<div class="col-12">
						<div class="owl-carousel simple-owl-carousel" data-pagination="false" data-autoplay="true" data-navigation="false" data-items="5" data-custom-navigation="owl1">
                        
                    
				<?php                 
				if(isset($_REQUEST['page_id']))
				{
					$result = mysqli_query($conn,"SELECT * FROM emeds_cus_pages WHERE site_id = '".$site_id."' and def_page_id='4'");
					$array = mysqli_fetch_row($result);
					$gallery_id=$array[0];
					
					$gallery_result = mysqli_query($conn,"SELECT * FROM emeds_cus_gallery WHERE cus_page_id = '".$gallery_id."'");
					while($gallery_array = mysqli_fetch_array($gallery_result)){ 
					?>
                        	
							<article class="portfolio-item">
								<figure>
									<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/<?php echo $gallery_array['image_path']; ?>" />
								</figure>              
							</article>
                            
						 <?php 
                        }
                        
                    }
                    else
                    {
                    ?>       
                    		<article class="portfolio-item">
								<figure>
									<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s1.jpg" alt="" title="">
								</figure>              
							</article>
							<article class="portfolio-item">
								<figure>
									<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s2.jpg" alt="" title="">
								</figure>              
							</article>						
							<article class="portfolio-item">
								<figure>
									<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s3.jpg" alt="" title="">
								</figure>              
							</article>
							<article class="portfolio-item">
								<figure>
									<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s4.jpg" alt="" title="">
								</figure>              
							</article>
							<article class="portfolio-item">
								<figure>
									<img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s5.jpg" alt="" title="">
                                </figure>              
                            </article>
                        <?php 
                        }
                        ?>
						</div>
					</div>
					<div class="topmargin-20"> </div>
				</div>
			</div>
		</div>


	</div>
	<?php include('footer.php'); ?>
	
</div>

<div id="goto-top" class="top"></div>

<script src="js/jquery.min.js"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript">
				
	var tpj=jQuery;
	tpj.noConflict();

	tpj(document).ready(function() {

		var apiRevoSlider = tpj('.tp-banner').show().revolution(
		{
			dottedOverlay:"none",
			delay:9000,
			startwidth:1680,
			startheight:700,
			hideThumbs:200,

			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:3,
			
									
			simplifyAll:"off",

			navigationType:"bullet",
			navigationArrows:"solo",
			navigationStyle:"preview4",

			touchenabled:"on",
			onHoverStop:"on",
			nextSlideOnWindowFocus:"off",

			swipe_threshold: 75,
			swipe_min_touches: 1,
			drag_block_vertical: false,
			
									
									
			keyboardNavigation:"off",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:20,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			shadow:0,
			fullWidth:"off",
			fullScreen:"on",

			spinner:"spinner0",												
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,

			shuffle:"off",
			
			forceFullWidth:"off",
			fullScreenAlignForce:"off",
			minFullScreenHeight:"",
			
			hideTimerBar:"on",
			hideThumbsOnMobile:"off",
			hideNavDelayOnMobile:1500,
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,
			
			fullScreenOffsetContainer: "",
			fullScreenOffset: "",
			
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0					
		});
	}); //ready

</script>

<script src="js/jquery.infinitescroll.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/functions.js"></script>
</body>
</html>