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

<?php include('css/colour.php'); ?>

</head>
<body class="off">
<div class="wrapbox">

	<?php include('nav.php'); ?>

	<section class="pageheader-default text-center">
	<div class="semitransparentbg">
		<h1 class="animated fadeInLeftBig notransition">Services</h1>
	</div>
	</section>
	<div class="wrapsemibox">
		<div class="semiboxshadow text-center">
			<img src="img/shp.png" class="img-responsive">
		</div>

		<section class="container services">
		<div class="row text-center animated fadeInUp notransition">
        
        <?php                 
		if(isset($_REQUEST['page_id']))
		{
			$i=0;
			$service_result = mysql_query("SELECT * FROM emeds_cus_page_content WHERE cus_page_id = '".$_REQUEST['page_id']."'");
			while($service_array = mysql_fetch_array($service_result))
			{ 
			$i++;
			?>
            
            <div class="row">
				<?php if($service_array['page_photo']) { ?>
                <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/<?php echo $service_array['page_photo']; ?>" title="<?php echo $service_array['page_heading']; ?>" class="img-responsive col-md-6">
                <?php } else { ?>
                <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content1.jpg" title="" class="img-responsive col-md-6">
                <?php } ?>
                
                <h4><?php echo $service_array['page_heading']; ?></h4>
                <p><?php echo $service_array['page_description']; ?></p>
            </div>
            <hr/>            
			<?php 
			}
		}
		else
		{
		?>
        	
        <div class="row">
            <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content2.jpg" title="Cleaning" class="img-responsive col-md-6">
            <h4>Cleaning</h4>
            <p>Dental cleaning is especially beneficial in prevention of oral health problems. Dental cleanings are recommended every six months. Regular dental cleaning keeps teeth free from plaque build-up and stops oral problems before they become a real problem. A cleaning is generally accompanied by a complete oral examination, including X-rays to get an understandable visual view of overall oral health.</p>
        </div>
        <hr/>
		<div class="row">
            <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content3.jpg" title="Dentures and Bridgework" class="img-responsive col-md-6">
            <h4>Dentures and Bridgework</h4>
            <p>When too many teeth are missing from the mouth, dentures are a logical option in oral health care. We can provide dentures to restore smile, biting and chewing ability. Full dentures slide over the gum and are held in place by cheek, lips and tongue muscles and denture affixation creams. A partial denture replaces a group of missing teeth. Partial dentures fill in the gaps. Bridges are for single or multiple missing teeth. A bridge links the missing tooth or teeth to a bridge in an effort to cover over gaps of a missing tooth or teeth. Bridges may be fixed or removable. They are strong and resemble natural teeth.</p>
        </div>	
            
			
			
			
		<?php 
		}
		?>
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