<?php 
session_start(); 
if(isset($_REQUEST['colour'])){
	$_SESSION['colour']=$_REQUEST['colour'];
	$_SESSION['username']='';
}
$site_logo='';
$index_page='index.php';

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
		<h1 class="animated fadeInLeftBig notransition">Our Practice</h1>
		
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
                    <img src="<?php echo $_SESSION['base_url']; ?>uploads/pages/default/content2.jpg" title="Welcome" class="img-responsive" />
				</div>
                <span>
                <p>We are committed as a team to deliver the highest quality preventive, restorative, and esthetic services possible for patients. A standard of excellence in personalized dental care enables us to provide the quality dental services our patients deserve. We provide comprehensive treatment planning and use restorative and cosmetic dentistry to achieve your optimal dental health. Should a dental emergency occur, we make every effort to see and care for you as soon as possible. In our warm and friendly environment, you always come first while we provide exemplary dental care in a spirit of tenderness and gentle kindness.</p>
            	<h4>Our Team</h4>
                <p>Our dental team is dedicated to providing you with an exceptional dental experience. We strive to ensure that each visit to our office is pleasant, comfortable, and relaxing. As your dental health professionals, we want you to be confident knowing that we are a team of highly trained and skilled clinicians. We have extensive experience in taking care of patients in the private practice setting, with focus on restorative, implant, and cosmetic dentistry.
We closely with our patients and believes that active communication with the patient is a key component of the treatment plan in order to optimize end results. Our team presents various treatment options and takes the time to explain in detail the advantages and disadvantages so the patient has complete understanding of their choice. We truly believe in an individualized treatment plan for every patient based on their own needs and goals. Each member of our team is skilled and knowledgeable, as well as friendly and helpful.</p>
				<h4>Why Choose Us</h4>
                <p>We invite you to contact our dental office today to learn more about us and our talented dentists. Building a foundation of trust by treating our patients as special individuals is vital to our success. Our entire team is dedicated to providing you with excellent, personalized care and service to make your visits as comfortable and pleasant as possible. We are eager to care for you and your family!</p>
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