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
	
	$pages = mysqli_query($conn,"SELECT * FROM emeds_cus_pages WHERE id = '".$_REQUEST['page_id']."'");
	$pagename = mysqli_fetch_row($pages);
	$page_name=$pagename[3];
	
	$index_page_result = mysqli_query($conn,"SELECT * FROM emeds_cus_pages WHERE site_id = '".$site_id."' and def_page_id='1'");
	$index_page_row=mysql_fetch_row($index_page_result);
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
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Services | Emeds Theme</title>
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

	<link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>

<body>
<div class="theme-container">
	<header id="masthead" class="header-with-topbar std-header">
	<?php include('header.php'); ?>
	</header>

	<div class="title-holder title-overlay title-bg">
		<div class="container">
			<h1> <?php echo (isset($_REQUEST['username']))?$page_name:'Services'; ?> </h1>
		</div>
	</div>
	<div class="content-wrap">
		
		<div class="row-fw">
			<div class="container">
				<div class="row">

				<?php                 
                if(isset($_REQUEST['page_id']))
                {
                    $i=0;
                    $service_result = mysqli_query($conn,"SELECT * FROM emeds_cus_page_content WHERE cus_page_id = '".$_REQUEST['page_id']."'");
                    while($service_array = mysqli_fetch_array($service_result)){ $i++;
                    ?>   
                    
                    	<div class="col-12">
                            <div class="icon-with-title circle center style1">
                                <div class="icon-holder">
                                    <?php if($service_array['page_photo']){ ?>
                                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/<?php echo $service_array['page_photo']; ?>">
                                    <?php  } else { ?>
                                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content1.jpg">
                                    <?php } ?>
                                </div>							
                                <h6> <?php echo $service_array['page_heading']; ?> </h6>
                                <p> <?php echo $service_array['page_description']; ?> </p>
                            </div>
                        </div>             
                
                        
                    
                    <?php 
					}
				}
				else
				{
				?>  
					<div class="col-12">
						<div class="icon-with-title circle center style1">
							<div class="icon-holder">
								<img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content2.jpg">
							</div>							
							<h6> Sealants</h6>
							<p> Dental sealant treatment is applied as a plastic resin material. The material is generally applied to the chewing surface of posterior teeth. This is an excellent preventive treatment to keep plaque and food from getting into the crevices and pits of teeth that are easy targets to start the decay process. </p>
						</div>
					</div>
					<div class="col-12">
						<div class="icon-with-title circle center style1">
							<div class="icon-holder">
								<img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content3.jpg">
							</div>							
							<h6> Periodontal Therapy</h6>
							<p> Periodontal disease, or gum disease, is the leading cause of tooth loss for adults. Our dental practice provides diagnostic procedures at every visit to ensure the prevention of periodontal disease, which helps maintain the health of teeth and gums. Gingivitis red, swollen and tender gums is the earliest stage of periodontal disease. </p>
						</div>
					</div>
					<div class="col-12">
						<div class="icon-with-title circle center style1">
							<div class="icon-holder">
								<img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content4.jpg">
							</div>							
							<h6> Dentures and Bridgework</h6>
							<p> When too many teeth are missing from the mouth, dentures are a logical option in oral health care. We can provide dentures to restore smile, biting and chewing ability. Full dentures slide over the gum and are held in place by cheek, lips and tongue muscles and denture affixation creams. A partial denture replaces a group of missing teeth. Partial dentures fill in the gaps. Bridges are for single or multiple missing teeth. A bridge links the missing tooth or teeth to a bridge in an effort to cover over gaps of a missing tooth or teeth. Bridges may be fixed or removable. They are strong and resemble natural teeth. </p>
						</div>
					</div>	
				<?php 
                }
                ?>
                    				
				</div>				
			</div>
		</div>
	</div>

	<?php include('footer.php'); ?>
    	
</div>
<div id="goto-top" class="top"></div>

<script src="js/jquery.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/functions.js"></script>
</body>
</html>