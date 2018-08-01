<!DOCTYPE html>
<html>
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Emeds">

    <title>Administrator | Emeds</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>static/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>static/admin/css/emeds.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>static/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link rel="icon" href="<?php echo base_url(); ?>static/index/images/favicon.png" type="image/x-icon" />
    </head>
    
    <body style="background-color:#E0E0E0">
    
    <div class="alert alert-success" id="alert_box">
        <div id="loading"><img src="<?php echo base_url(); ?>static/index/images/loading.gif" /></div>
        <div id="alert_content"></div>
    </div>
    
    <div class="container">
    			<div class=" col-lg-12 col-md-12 col-sm-12" style="text-align:center; margin-top:2%">
                    <img src="<?php echo base_url(); ?>static/admin/images/logo.png" />
                </div>
                <div style="clear:both"></div>
        <div class="row login">

            <div class=" col-lg-12 col-md-12 col-sm-12">
                
                <div class="ibox-content" style="margin-top: 20px;">
                    <form class="m-t" id="login-form" method="post" action="<?php echo base_url(); ?>admin/login">
                        <div class="form-group">
                            <input type="text" class="form-control" name="uname" id="uname" placeholder="Username" >
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pword" id="pword" placeholder="Password" >
                        </div>
                        <div class="pull-right"><button type="submit" id="submit" class="btn btn-primary block full-width">Login</button></div>

                        
                    </form>
                </div>
                
            </div>
            
            
        </div>
        <div class="col-lg-12 text-center" >
                <small>Design by @ <a href="http://uniox.in/" target="_blank">Uniox Websolutions. </a></small>
            </div>
        </div>
    
    
    
    
    
<script src="<?php echo base_url(); ?>static/admin/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>static/admin/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>static/admin/js/jquery.form.js"></script> 

<script>
$(document).ready(function()
{
	$('#submit').click(function(){
		$('#loading').fadeIn('fast');
		$('#alert_box').fadeIn('slow');
	});

	<!--ajax form posting for Add new Contact starts-->
	$('#login-form').ajaxForm(function(e) {
		if(e=='email'){status_alert('Enter Username');$("#"+e).focus();  }
		if(e=='pword'){status_alert('Enter Password');$("#"+e).focus();  }
		if(e=='error'){status_alert('Username or Password Incorrect');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('Login Sucessful');
			window.location.href = "<?php echo base_url(); ?>admin/dashboard";
		}
		
	});
	<!--ajax form posting for Add new Contact Ends-->
	
	<!-- alert box-->
	function status_alert(e)
	{
		$('#loading').fadeOut('fast');
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
