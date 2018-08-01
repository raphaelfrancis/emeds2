<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Reset Your Password | Emeds</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="author" content="Uniox Web Solutions">
	<link href="<?php echo base_url(); ?>static/index/css/style.css" rel="stylesheet">
</head>

<body>
	
	<div class="wrapper">
		<div id="main" style="margin:50px 0 0 0;">
		
		<!-- Form -->
		<form id="contact-form" action="<?php echo base_url(); ?>index/res_password/change" method="post">
			<h3>Forgot Password?</h3>
            <div id="alert_box" class="error"><span id="alert_content"></span></div>
			<h4>Enter your Email address and we'll send you a link to reset your password</h4>
			
			<div>
				<label>
					<span>New Password : (required)</span>
					<input placeholder="Please enter your Password" type="password" tabindex="2" name="password" id="password">
					<input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
				</label>
			</div>
            <div>
				<label>
					<span>Retype Password : (required)</span>
					<input placeholder="Please enter your New Password" type="password" tabindex="3" name="re-password" id="re-password">
				</label>
			</div>
			
			<div>
				<button name="submit" type="submit" id="contact-submit">Continue</button>
			</div>
		</form>
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
	$('#contact-form').ajaxForm(function(e) {alert(e);
		if(e=='password'){status_alert('Enter Password');$("#"+e).focus();  }
		if(e=='re-password'){status_alert('Enter Retype Password');$("#"+e).focus();  }
		if(e=='mismatch'){status_alert('Password Mismatch');$("#"+e).focus();  }

		if(e=='changed')
		{
			status_alert('Sucessfully Changed');
			window.location.href = "<?php echo base_url(); ?>index/signin";
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
	}
	<!-- alert box-->
	
});
</script>
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