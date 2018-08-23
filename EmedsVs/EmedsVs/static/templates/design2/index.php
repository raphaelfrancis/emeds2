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

<!-- Favicon -->
<link rel="shortcut icon" href="img/favicon.ico">
</head>
<body class="off">
<div class="wrapbox">

	<?php include('nav.php'); ?>

	<section class="carousel carousel-fade slide home-slider" id="c-slide" data-ride="carousel" data-interval="4500" data-pause="false">
	
	<div class="carousel-inner">
		<?php                 
        if(isset($_REQUEST['page_id']))
        {
            $i=0;
            $banner_result = mysqli_query($conn,"SELECT * FROM emeds_cus_banner WHERE cus_page_id = '".$_REQUEST['page_id']."'");
            while($banner_array = mysqli_fetch_array($banner_result)){ $i++;
            ?>
            
            
            <div class="item <?php echo ($i==1)?'active':''; ?>" style="background: url(<?php echo $_SESSION['base_url']; ?>uploads/banner/<?php echo $banner_array['image_path']; ?>);"></div>

			<?php 
            }
        }
        else
        {
        ?>
		<div class="item active" style="background: url(img/slider/slider1.jpg);"></div>
		<div class="item" style="background: url(img/slider/slider2.jpg);"></div>
        <div class="item" style="background: url(img/slider/slider1.jpg);"></div>
        <?php
		}
		?>
    </div>
    <!-- /.carousel-inner -->
	<a class="left carousel-control animated fadeInLeft" href="#c-slide" data-slide="prev"><i class="icon-angle-left"></i></a>
	<a class="right carousel-control animated fadeInRight" href="#c-slide" data-slide="next"><i class="icon-angle-right"></i></a>
	</section>
	<!-- /.carousel end-->
	
	<!-- /.wrapsemibox start-->
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="img/shp.png" class="img-responsive" alt="">
		</div>
		<!-- INTRO NOTE
================================================== -->
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

		<section class="intro-note topspace10">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1><span class="colortext">Welcome</span></h1><hr/>
					<p>
						 <?php if(isset($about_array)){ echo nl2br(substr($about_array['page_description'],0,500)); } else {?>At the Norris Dental Science Center, we provide a wide range of oral health care services to patients, from routine checkups and cleanings to fitting braces and treating oral disease.Under the supervision of our expert faculty, dental students and residents (dentists in training) provide high-quality care at reduced rates. Some clinics require a referral from your dentist before you can make an appointment; others are by self-referral. See the clinic descriptions below and visit the clinics individual web pages to learn more.<?php }; ?>
					</p>
                    <?php if(isset($_REQUEST['username'])){ ?>
                    <div style="margin-top:10px"><a class="offer-btn" href="about.php?username=<?php echo $_REQUEST['username']; ?>&page_id=<?php echo $about_array['cus_page_id']; ?>">READ MORE<span></span></a></div>
                    <?php } else { ?>
                    <div style="margin-top:10px"><a class="offer-btn" href="about.php">READ MORE<span></span></a></div>
                    <?php } ?>
				</div>
			</div>
		</div>
		</section>

		<section class="home-features topspace30">
		<div class="container animated fadeInUpNow notransition">
			<h1 class="small text-center">SERVICES</h1>
			<div class="br-hr type_short">
				<span class="br-hr-h">
				<i class="icon-pencil"></i>
				</span>
			</div>
			
			<div class="col-md-10 col-md-offset-1 animated slidea notransition">
				<div class="row">
	<?php                 
    if(isset($_REQUEST['page_id']))
    {
        $result = mysqli_query($conn,"SELECT * FROM emeds_cus_pages WHERE site_id = '".$site_id."' and def_page_id='3'");
        $array = mysqli_fetch_row($result);
        $service_id=$array[0];
    
        $service_result = mysqli_query($conn,"SELECT * FROM emeds_cus_page_content WHERE cus_page_id = '".$service_id."' LIMIT 6");
    		$i=0;
			while($service_array = mysqli_fetch_array($service_result)){ $i++;
            ?>
            <div class="col-md-4">
				<?php if($service_array['page_photo']){ ?>
                <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/<?php echo $service_array['page_photo']; ?>" class="img-responsive">
                <?php  } else { ?>
                <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content1.jpg" class="img-responsive">
                <?php } ?>
                <h4><a href="service.php?username=<?php echo $_REQUEST['username']; ?>&page_id=<?php echo $service_array['cus_page_id']; ?>"><?php echo $service_array['page_heading']; ?></a></h4>
            </div>
            <?php 
            }
        }
        else
        {
		?>
                <div class="col-md-4">
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content2.jpg" class="img-responsive">
                    <h4><a href="service.php">Cleaning</a></h4>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content3.jpg" class="img-responsive">
                    <h4><a href="service.php">Periodontal Therapy</a></h4>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content2.jpg" class="img-responsive">
                    <h4><a href="service.php">Dental Fillings</a></h4>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content3.jpg" class="img-responsive">
                    <h4><a href="service.php">Root Canal Therapy</a></h4>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content2.jpg" class="img-responsive">
                    <h4><a href="service.php">Dentures and Bridgework</a></h4>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content3.jpg" class="img-responsive">
                    <h4><a href="service.php">Dental Crowns</a></h4>
                </div>
            <?php 
            }
            ?> 
                
				</div>
			</div>
		</div>
		</section>
		<!-- /.home-features end-->
		<section class="grayarea recent-projects-home topspace30 animated fadeInUpNow notransition">
		<div class="container">
			<div class="row">
				<h1 class="small text-center topspace0">GALLERY</h1>
				
				<div class="text-center smalltitle">
				</div>
				<div class="col-md-12">
					<div class="list_carousel text-center">
						<div class="carousel_nav">
							<a class="prev" id="car_prev" href="#"><span>prev</span></a>
							<a class="next" id="car_next" href="#"><span>next</span></a>
						</div>
						<div class="clearfix">
						</div>
						<ul id="carousel-projects">
				<?php                 
				if(isset($_REQUEST['page_id']))
				{
					$result = mysqli_query($conn,"SELECT * FROM emeds_cus_pages WHERE site_id = '".$site_id."' and def_page_id='4'");
					$array = mysqli_fetch_row($result);
					$gallery_id=$array[0];
					
					$gallery_result = mysqli_query($conn,"SELECT * FROM emeds_cus_gallery WHERE cus_page_id = '".$gallery_id."'");
					while($gallery_array = mysqli_fetch_array($gallery_result)){ 
					?>
					<li>
                    <div class="boxcontainer">
                        <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/<?php echo $gallery_array['image_path']; ?>" alt="">
                        <div class="roll">
                            <div class="wrapcaption">
                                <a data-gal="prettyPhoto[gallery1]" href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/<?php echo $gallery_array['image_path']; ?>"><i class="icon-zoom-in captionicons"></i></a>
                            </div>
                        </div>
                    </div>
                    </li>
					<?php 
					}
					
				}
				else
				{
				?>
                            
                            
                    <li>
                    <div class="boxcontainer">
                        <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s1.jpg" alt="">
                        <div class="roll">
                            <div class="wrapcaption">
                                <a data-gal="prettyPhoto[gallery1]" href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s1.jpg"><i class="icon-zoom-in captionicons"></i></a>
                            </div>
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="boxcontainer">
                        <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s2.jpg" alt="">
                        <div class="roll">
                            <div class="wrapcaption">
                                <a data-gal="prettyPhoto[gallery1]" href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s2.jpg"><i class="icon-zoom-in captionicons"></i></a>
                            </div>
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="boxcontainer">
                        <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s3.jpg" alt="">
                        <div class="roll">
                            <div class="wrapcaption">
                                <a data-gal="prettyPhoto[gallery1]" href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s3.jpg"><i class="icon-zoom-in captionicons"></i></a>
                            </div>
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="boxcontainer">
                        <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s4.jpg" alt="">
                        <div class="roll">
                            <div class="wrapcaption">
                                <a data-gal="prettyPhoto[gallery1]" href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s4.jpg"><i class="icon-zoom-in captionicons"></i></a>
                            </div>
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="boxcontainer">
                        <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s5.jpg" alt="">
                        <div class="roll">
                            <div class="wrapcaption">
                                <a data-gal="prettyPhoto[gallery1]" href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s5.jpg" title="La Chaux De Fonds"><i class="icon-zoom-in captionicons"></i></a>
                            </div>
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="boxcontainer">
                        <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s6.jpg" alt="">
                        <div class="roll">
                            <div class="wrapcaption">
                                <a data-gal="prettyPhoto[gallery1]" href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s6.jpg"><i class="icon-zoom-in captionicons"></i></a>
                            </div>
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="boxcontainer">
                        <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s7.jpg" alt="">
                        <div class="roll">
                            <div class="wrapcaption">
                                <a data-gal="prettyPhoto[gallery1]" href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s7.jpg"><i class="icon-zoom-in captionicons"></i></a>
                            </div>
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="boxcontainer">
                        <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s8.jpg" alt="">
                        <div class="roll">
                            <div class="wrapcaption">
                                <a data-gal="prettyPhoto[gallery1]" href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s8.jpg" ><i class="icon-zoom-in captionicons"></i></a>
                            </div>
                        </div>
                    </div>
                    </li>
				<?php 
                }
                ?>
                    
						</ul>
					</div>
				</div>
			</div>
		</div>
		</section>
	</div>
	<!-- BEGIN FOOTER
================================================== -->
	<?php include('footer.php'); ?>
	<!-- /footer section end-->
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins.js"></script>
<script src="js/common.js"></script>
<script>
	/* ---------------------------------------------------------------------- */
	/*	Carousel
	/* ---------------------------------------------------------------------- */
	$(window).load(function(){			
		$('#carousel-projects').carouFredSel({
		responsive: true,
		items       : {
        width       : 200,
        height      : 200,
        visible     : {
            min         : 1,
            max         : 4
        }
    },
		width: '200px',
		height: '295px',
		auto: true,
		circular	: true,
		infinite	: false,
		prev : {
			button		: "#car_prev",
			key			: "left",
				},
		next : {
			button		: "#car_next",
			key			: "right",
					},
		swipe: {
			onMouse: true,
			onTouch: true
			},
		scroll: {
        easing: "",
        duration: 1200
    }
	});
		});
</script>


<script>
	$(document).ready(function(){
		$("a[data-gal^='prettyPhoto']").prettyPhoto({social_tools:'', animation_speed: 'normal' , theme: 'dark_rounded'});
	});
//ROLL ON HOVER
	$(function() {
	$(".roll").css("opacity","0");
	$(".roll").hover(function () {
	$(this).stop().animate({
	opacity: .8
	}, "slow");
	},
	function () {
	$(this).stop().animate({
	opacity: 0
	}, "slow");
	});
	});
</script>
</body>

</html>