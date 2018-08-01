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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<body class="off">
<!-- /.wrapbox start-->
<div class="wrapbox">

	<?php include('nav.php'); ?>

	<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInDown">Gallery</h1>
	</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="img/shp.png" class="img-responsive" alt="">
		</div>
		<section class="container">
		<div id="content">
        
		<?php                 
        if(isset($_REQUEST['page_id']))
        {
            $i=0;
            $gallery_result = mysql_query("SELECT * FROM emeds_cus_gallery WHERE cus_page_id = '".$_REQUEST['page_id']."'");
            while($gallery_array = mysql_fetch_array($gallery_result)){ $i++;
            ?>
            <div class="boxportfolio3">
                <div class="boxcontainer">
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/<?php echo $gallery_array['image_path']; ?>" alt="">
                    <div class="roll">
                        <div class="wrapcaption">
                            <a data-gal="prettyPhoto[gallery1]" href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/<?php echo $gallery_array['image_path']; ?>">
                            <i class="icon-zoom-in captionicons"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            }
            
        }
        else
        {
        ?>
            
            <div class="boxportfolio3">
                <div class="boxcontainer">
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s1.jpg" alt="">
                    <div class="roll">
                        <div class="wrapcaption">
                            <a data-gal="prettyPhoto[gallery1]" href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s1.jpg">
                            <i class="icon-zoom-in captionicons"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

			<div class="boxportfolio3">
                <div class="boxcontainer">
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s2.jpg">
                    <div class="roll">
                        <div class="wrapcaption">
                            <a data-gal="prettyPhoto[gallery1]" href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s2.jpg">
                            <i class="icon-zoom-in captionicons"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

			<div class="boxportfolio3">
                <div class="boxcontainer">
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s3.jpg">
                    <div class="roll">
                        <div class="wrapcaption">
                            <a data-gal="prettyPhoto[gallery1]" href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s3.jpg">
                            <i class="icon-zoom-in captionicons"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

			<div class="boxportfolio3">
                <div class="boxcontainer">
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s4.jpg">
                    <div class="roll">
                        <div class="wrapcaption">
                            <a data-gal="prettyPhoto[gallery1]" href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s4.jpg">
                            <i class="icon-zoom-in captionicons"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

			<div class="boxportfolio3">
                <div class="boxcontainer">
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s5.jpg">
                    <div class="roll">
                        <div class="wrapcaption">
                            <a data-gal="prettyPhoto[gallery1]" href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s5.jpg">
                            <i class="icon-zoom-in captionicons"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

			<div class="boxportfolio3">
                <div class="boxcontainer">
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s6.jpg">
                    <div class="roll">
                        <div class="wrapcaption">
                            <a data-gal="prettyPhoto[gallery1]" href="<?php echo $_SESSION['base_url']; ?>uploads/gallery/default/s6.jpg">
                            <i class="icon-zoom-in captionicons"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
		<?php 
        }
        ?>
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
$(window).load(function(){
var $container = $('#content')
// initialize Isotope
$container.isotope({
  // options...
  resizable: false, // disable normal resizing
  // set columnWidth to a percentage of container width
  masonry: { columnWidth: $container.width() / 3 }
});
// update columnWidth on window resize
$(window).smartresize(function(){
  $container.isotope({
    // update columnWidth to a percentage of container width
    masonry: { columnWidth: $container.width() / 3 }
  });
});
});
</script>
<script>
//MASONRY
$(document).ready(function(){
var $container = $('#content');
  $container.imagesLoaded( function(){
	$container.isotope({
	filter: '*',	
	animationOptions: {
	 duration: 750,
	 easing: 'linear',
	 queue: false,	 
   }
});
});
//FILTER
$('#filter a').click(function(){
  var selector = $(this).attr('data-filter');
	$container.isotope({ 
	filter: selector,
	animationOptions: {
	 duration: 750,
	 easing: 'linear',
	 queue: false,
   }
  });
  return false;
});
$('#filter a').click(function (event) {
	$('a.selected').removeClass('selected');
	var $this = $(this);
	$this.addClass('selected');
	var selector = $this.attr('data-filter');
	$container.isotope({
		 filter: selector
	});
	return false;
});
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
//CALL PRETTY PHOTO
	$(document).ready(function(){
		$("a[data-gal^='prettyPhoto']").prettyPhoto({social_tools:'', animation_speed: 'normal' , theme: 'dark_rounded'});
	});
</script>
</body>
</html>