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

	$pages = mysql_query("SELECT * FROM emeds_cus_pages WHERE id = '".$_REQUEST['page_id']."'");
	$pagename = mysql_fetch_row($pages);
	$page_name=$pagename[3];
	
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
    <!--/header-->

    <div class="container">
        <ul class="product-head">
            <li><a href="<?php echo (isset($_REQUEST['username']))?$index_page:'index.php'; ?>">Home</a> <span>::</span></li>
            <li class="active-page"><?php echo (isset($_REQUEST['username']))?$page_name:'services'; ?></li>
            <div class="clearfix"> </div>
        </ul>
    </div>
    <div class="container">
	<?php                 
    if(isset($_REQUEST['page_id']))
    {
        $i=0;
        $service_result = mysql_query("SELECT * FROM emeds_cus_page_content WHERE cus_page_id = '".$_REQUEST['page_id']."'");
        while($service_array = mysql_fetch_array($service_result)){ $i++;
        ?>
            <div class="blog-artical row">
                <div class="blog-artical-info-img col-md-6 pull-right">
                    <?php if($service_array['page_photo']){ ?>
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/<?php echo $service_array['page_photo']; ?>">
                    <?php  } else { ?>
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content1.jpg">
                    <?php } ?>
                    
                </div>
                <span class="blog-artical-info-text">
                    <h4><?php echo $service_array['page_heading']; ?></h4>
                    <p><?php echo $service_array['page_description']; ?></p>
                </span> 
            </div>
            <hr/>
        <?php 
        }
    }
    else
    {
    ?>    
        <div class="blog-artical row">
            <div class="blog-artical-info-img col-md-6">
                <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content2.jpg" title="post-name">
            </div>
            <div class="blog-artical-info-text col-md-6">
                <h4>Cleaning</h4>
                <p>Dental cleaning is especially beneficial in prevention of oral health problems. Dental cleanings are recommended every six months. Regular dental cleaning keeps teeth free from plaque build-up and stops oral problems before they become a real problem. A cleaning is generally accompanied by a complete oral examination, including X-rays to get an understandable visual view of overall oral health.</p>
            </div> 
        </div>
        <div class="blog-artical row">
            <div class="blog-artical-info-img col-md-6">
                <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content3.jpg" title="post-name">
            </div>
            <div class="blog-artical-info-text col-md-6">
            	<h4>Dentures and Bridgework</h4>
                <p>When too many teeth are missing from the mouth, dentures are a logical option in oral health care. We can provide dentures to restore smile, biting and chewing ability. Full dentures slide over the gum and are held in place by cheek, lips and tongue muscles and denture affixation creams. A partial denture replaces a group of missing teeth. Partial dentures fill in the gaps. Bridges are for single or multiple missing teeth. A bridge links the missing tooth or teeth to a bridge in an effort to cover over gaps of a missing tooth or teeth. Bridges may be fixed or removable. They are strong and resemble natural teeth.</p>
            </div> 
        </div>
        
	<?php 
    }
    ?>
    
        
        <div class="clearfix"></div>
    </div>


	
<?php include('footer.php'); ?>

</body>
</html>				