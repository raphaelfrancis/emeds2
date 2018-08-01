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
<html><head>
<title>EMEDS Theme</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!--jQuery (necessary for Bootstrap's JavaScript plugins)-->
<!-- Custom Theme files -->
<?php include('css/colour.php'); ?>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
		
<link href='http://fonts.googleapis.com/css?family=Abril+Fatface|Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header-->
<div class="header-section">
    <?php include('header.php'); ?>
    <div  id="top" class="callbacks_container">
        <ul class="rslides" id="slider4">
        	
		<?php                 
        if(isset($_REQUEST['page_id']))
        {
            $i=0;
            $banner_result = mysql_query("SELECT * FROM emeds_cus_banner WHERE cus_page_id = '".$_REQUEST['page_id']."'");
            while($banner_array = mysql_fetch_array($banner_result)){ $i++;
            ?>
            <li>
                <img src="<?php echo $_SESSION['base_url']; ?>uploads/banner/<?php echo $banner_array['image_path']; ?>" class="img-responsive" alt="" />
            </li>
			<?php 
            }
        }
        else
        {
        ?>
            
            <li>
                <img src="images/slider/slider1.jpg" class="img-responsive" alt="" />
            </li>
            <li>
                <img src="images/slider/slider2.jpg" class="img-responsive" alt="" />
            </li>
            <li>
                <img src="images/slider/slider3.jpg" class="img-responsive" alt="" />
            </li>
		<?php
        }
        ?>
        </ul>
    </div>
    <div class="clearfix"></div>
    <script src="js/responsiveslides.min.js"></script>
    <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: true,
        pager: true,
        nav:false,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });
    
    });
    </script>

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

<div class="welcome-section">
    <div class="container">
  
<?php    
if(isset($_REQUEST['page_id']))
{
	$result = mysql_query("SELECT * FROM emeds_cus_pages WHERE site_id = '".$site_id."' and def_page_id='2'");
	$array = mysql_fetch_row($result);
	$about_id=$array[0];

	$about_result = mysql_query("SELECT * FROM emeds_cus_page_content WHERE cus_page_id = '".$about_id."'");
	$about_array = mysql_fetch_array($about_result);

}
?>
        <div class="welcom-grids">
            <div class="col-md-5 welcom-grid-img">
            	<?php if(isset($about_array)){ 
					if($about_array['page_photo']){
					?>
					<img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/<?php echo $about_array['page_photo']; ?>" title="<?php if(isset($about_array)){ echo $about_array['page_heading']; } else {?>Welcome<?php }; ?>" class="img-thumbnail img-responsive" />
					<?php } 
						else
						{
						?>
                        <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content1.jpg" title="Welcome" class="img-thumbnail img-responsive" />
						<?php 
						}
					}
				else { ?>
                <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content1.jpg" title="Welcome" class="img-thumbnail img-responsive" />
                <?php } ?>
            </div>
            <div class="col-md-7 welcom-grid-text">
                <h3><?php if(isset($about_array)){ echo $about_array['page_heading']; } else {?>Welcome<?php }; ?></h3>
                <p><?php if(isset($about_array)){ echo nl2br(substr($about_array['page_description'],0,500)); } else {?>At the Norris Dental Science Center, we provide a wide range of oral health care services to patients, from routine checkups and cleanings to fitting braces and treating oral disease.Under the supervision of our expert faculty, dental students and residents (dentists in training) provide high-quality care at reduced rates. Some clinics require a referral from your dentist before you can make an appointment; others are by self-referral. See the clinic descriptions below and visit the clinics individual web pages to learn more.<?php }; ?></p>
                
				<?php if(isset($_REQUEST['username'])){ ?>
                <div><a class="offer-btn" href="about.php?username=<?php echo $_REQUEST['username']; ?>&page_id=<?php echo $about_array['cus_page_id']; ?>">More<span></span></a></div>
				<?php } else { ?>
                <div class="pull-right" style="margin-top:10px"><a class="offer-btn" href="about.php">More<span></span></a></div>
                <?php } ?>
                
            </div>
            <div class="clearfix"> </div>  
        </div>
        
        
    </div>
</div>

<div class="project" id="project">
    <div class="container">
        <h3 class="phead">Services</h3>
        <ul class="project_top">

<?php                 
if(isset($_REQUEST['page_id']))
{
	$result = mysql_query("SELECT * FROM emeds_cus_pages WHERE site_id = '".$site_id."' and def_page_id='3'");
	$array = mysql_fetch_row($result);
	$service_id=$array[0];

	$service_result = mysql_query("SELECT * FROM emeds_cus_page_content WHERE cus_page_id = '".$service_id."' LIMIT 6");

            while($service_array = mysql_fetch_array($service_result)){ $i++;
            ?>
            <li class="project2">
                <div class="view view-first">
                	<div class="index_img">
						<?php if($service_array['page_photo']){ ?>
                        <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/<?php echo $service_array['page_photo']; ?>">
                        <?php  } else { ?>
                        <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content2.jpg">
                        <?php } ?>
                    </div>
                    <h3><a class="offer-btn" href="service.php?username=<?php echo $_REQUEST['username']; ?>&page_id=<?php echo $service_array['cus_page_id']; ?>"><?php echo $service_array['page_heading']; ?></a></h3>
                </div> 
            </li>
            <?php 
            }
        }
        else
        {
        ?>
            <li class="project2">
                <div class="view view-first">
                <div class="index_img"><img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content2.jpg" title="Emeds" /></div>
                <h3><a class="offer-btn" href="service.php">SEALANTS</a></h3>
                </div> 
            </li>
            <li class="project1">
                <div class="view view-first">
                <div class="index_img"><img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content3.jpg" title="Emeds" /></div>
                <h3><a class="offer-btn" href="service.php">PERIODONTAL THERAPY</a></h3>
                </div> 
            </li>
            <li class="project5">
                <div class="view view-first">
                <div class="index_img"><img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content2.jpg" title="Emeds" /></div>
                <h3><a class="offer-btn" href="service.php">DENTAL FILLINGS</a></h3>
                </div> 
            </li>
		<?php 
        }
        ?>

        <div class="clearfix"> </div>
        </ul>
    </div>
</div>	

<?php include('footer.php'); ?>

</body>
</html>				