<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Emeds | Signup</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="author" content="@toddmotto">
	<link href="<?php echo base_url(); ?>static/index/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/index/images/fevicon.png">
</head>

<body>
	
	<div class="wrapper" style="max-width:375px">
		<div id="main">
		
		<!-- Form -->
            <div id="alert_box" class="error"><span id="alert_content"></span></div>
            <span class="forgot-done-img"></span>
            <h4>Email verification link has been sent to you. Please check your Mailbox. <?php echo $email; ?></h4>
			
			<div style="width:100%; margin:auto; margin-top:8px">
				<a href="<?php echo base_url(); ?>index/sites" style="padding:0px !important"><button name="button" type="button" id="contact-submit">DONE</button></a>
			</div>
			
		<!-- /Form -->
		
		</div>
	</div>

	
</body>
</html>
<script src="<?php echo base_url(); ?>static/index/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>static/index/js/jquery.form.js"></script> 

<script>
$(document).ready(function()
{
	<!--ajax form posting for Add new Contact starts-->
	$('#contact-form').ajaxForm(function(e) {
		if(e=='email'){status_alert('Enter email ID');$("#"+e).focus();  }
		if(e=='not_exist'){status_alert('Email ID not exist');$("#"+e).focus();  }
		if(e=='sent')
		{
			status_alert('Password sent.Please check your inbox');
			setTimeout(function(){window.location.href = "<?php echo base_url(); ?>index/signin";},5000);
		}
		
	});
	<!--ajax form posting for Add new Contact Ends-->
	
	<!-- alert box-->
	function status_alert(e)
	{
		$('#alert_box').fadeIn('slow');
		$('#alert_content').html(e);
		$("#alert_box").css({left:($(window).width()/2)- ($("#alert_box").width()/2) });
		jQuery("html, body").animate({ scrollTop: jQuery("#alert_box").offset().top }, 1000);
		setTimeout(function(){$('#alert_box').fadeOut('slow');},5000);
		
	}
	<!-- alert box-->
	
});
</script>
<style type="text/css">
	#alert_box {
		color:#555;
		border-radius:5px;
		font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px;
		padding:10px 10px;
		margin:10px 0;
		display:none
	}
	#alert_box span {
		font-weight:bold;
		text-transform:uppercase;
	}
	.error {
		background:#ffecec ;
		border:1px solid #f5aca6;
	}
</style>