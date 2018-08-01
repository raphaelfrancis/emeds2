<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Emeds">

    <title>Emeds</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>static/index/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>static/index/css/emeds.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>static/index/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/index/images/favicon.png">
</head>

<body>
    <div class="container">               
        <div class="main" style="width:600px">
            <h2>Forgot password</h2>
            <hr/>
            <div class="login-content">
                <div class="row">    
                    <form method="post" id="contact-form" action="<?php echo base_url(); ?>index/forgot/email">
                    	<div class="col-md-12">
                        <div class="alert alert-success" style="display:none" id="alert_box">
                            <div id="alert_content"></div>
                        </div>
                        <div class="form-group">
                        	<label class="control-label">Email :</label>
                            <input type="email" class="form-control" required placeholder="Please enter your Email" name="email" id="email"/>
                        </div>

                        </div>
						<hr/>
                        <div class="col-md-6">
                        <a href="<?php echo base_url(); ?>index/signin" class="btn btn-w-m btn-default" style="width:100%">Back to Sign in</a>
                        </div>
						<div class="col-md-6">
                        <button type="submit" class="btn btn-success pull-right" style="width:100%">Continue</button>
                        </div>
                    </form>
                    </div>
                
            </div>
            
            
        </div>
        
        
        
        </div>

    
    
    
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
			setTimeout(function(){window.location.href = "<?php echo base_url(); ?>index/signin";},1000);
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

    </body>
</html>
