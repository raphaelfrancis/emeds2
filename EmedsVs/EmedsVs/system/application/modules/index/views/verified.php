<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Email Verification | Emeds</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="author" content="Uniox Web Solutions">
	<link href="<?php echo base_url(); ?>static/index/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/index/images/fevicon.png">

</head>

<body>
	
	<div class="wrapper">
		<div id="main" style="margin:50px 0 0 0;">
		
		<!-- Form -->
        <form method="post" id="contact-form" action="<?php echo base_url(); ?>index/signup/add">
			<h3 style="text-align:center">Email Verified Sucessfully</h3>
			
            <br>
			
			<div>
                <a href="<?php echo base_url(); ?>index/sites" style="padding:0px !important"><button name="button" type="button" id="contact-submit">Go to Home</button></a>			
           	</div>

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
		if(e=='email_not_valid'){status_alert('Email format not valid');$("#"+e).focus();  }
		if(e=='email_exist'){status_alert('Email ID exist <a href="<?php echo base_url(); ?>index/signin">login</a>');$("#email").focus();  }
		if(e=='name'){status_alert('Enter Name');$("#"+e).focus();  }
		if(e=='password'){status_alert('Enter Password');$("#"+e).focus();  }
		if(e=='strong'){status_alert('Password Strength Week');$("#"+e).focus();  }
		if(e=='re-password'){status_alert('Enter Retype Password');$("#"+e).focus();  }
		if(e=='mismatch'){status_alert('Password Mismatch');$("#"+e).focus();  }

		if(e=='add')
		{
			status_alert('Sucessfully Created');
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