
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Emeds | Sign in</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="<?php echo base_url(); ?>static/index/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/index/images/fevicon.png">
</head>

<body>
    <?php if($this->session->flashdata('error')){ ?>
    <script>alert(<?php echo $this->session->flashdata('error'); ?>); </script>
    <?php } ?>
	
    <div class="wrapper">
        <div id="main" style="margin:50px 0 0 0;">
	
        <!-- Form -->
        <form method="post" id="contact-form" action="<?php echo base_url(); ?>index/signin/login">
			<div>
				<label>
					<span>Title of your Website : (required)</span>
					<input placeholder="Website title" name="name" id="title" type="text" tabindex="1" required>
				</label>
			</div>
			
			<div>
				<label>
					<span>Username : (required)</span>
					<input placeholder="Username" name="username" id="username" type="text" tabindex="2" required>
				</label>
			</div>
			
			
			
			<div style="text-align:right; margin-top:8px">
				<button name="submit" type="submit" id="contact-submit">Sign in</button>
			</div>
		<!-- /Form -->
        </form>
			
		
		
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
		if(e=='email'){status_alert('Enter Email Address');$("#"+e).focus();  }
		if(e=='pword'){status_alert('Enter Password');$("#"+e).focus();  }
		if(e=='error'){status_alert('Username or Password Incorrect');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('Login Sucessful');
			window.location.href = "<?php echo base_url(); ?>index/sites";
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