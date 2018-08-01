<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Emeds">

    <title>Sign in | Emeds</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>static/index/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>static/index/css/emeds.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>static/index/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/index/images/fevicon.png">
</head>
<body>
	<?php if($this->session->flashdata('error')){ ?>
    <script>alert(<?php echo $this->session->flashdata('error'); ?>); </script>
    <?php } ?>
	
    <div class="container">               
        <div class="main">
			<div class="row">
            	<div class="col-md-6">
            		<h2>Sign in</h2>
                </div>
                <div class="col-md-6">	
                	<div class="pull-right" style="margin-top:12px">
                	<img src="<?php echo base_url(); ?>static/index/images/loading.gif" id="loading" style="display:none"/>
                    </div>
                </div>
           	</div>
            <hr/>
            <div class="login-content">
                <div class="row">    
                    <form method="post" id="contact-form" action="<?php echo base_url(); ?>index/signin/login">
                    	<div class="col-md-12">
                        <div class="alert" style="display:none" id="alert_box">
                            <div id="alert_content"></div>
                        </div>
                        <div class="form-group">
                        	<label class="control-label">Email :</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off"/>
                            <div id="msgbx_err" class="alert-box error"></div>
                            <div id="msgbx_success" class="alert-box success"></div>
                
                        </div>
                        <div class="form-group">
                        	<label class="control-label">Password :</label>
                            <input type="password" class="form-control" name="pword" id="pword" placeholder="Password" autocomplete="off"/>
                        </div>
                        </div>
						<div class="col-md-6" style="margin:5px 0">
                        <a href="<?php echo base_url(); ?>index/forgot" data-toggle="modal"  ><small>Forgot password?</small></a>
                        </div>
						<div class="col-md-6">
                        <button type="submit" id="submit" class="btn btn-success pull-right">Login</button>
                        </div>
                    </form>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-12 text-center">
                        <a class="btn btn-success btn-facebook" href="<?= $login_url ?>">
                            <i class="fa fa-facebook"> </i> Sign in with Facebook
                        </a>
                        </div>
                        
                    </div>
                    <hr/>
                    <div class="row">
                    <div class="col-md-6">
                        <a data-toggle="modal" href="<?php echo base_url(); ?>index/signup" class="btn btn-w-m btn-default" style="width:100%">Create an account</a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo base_url(); ?>index" class="btn btn-w-m btn-default" style="width:100%">Back to home</a>
                    </div>
                </div>
                
            </div>
            
            
        </div>
        
        
        
        </div>
    
    
<style type="text/css">
            ::selection{ background-color: #1C84C6; color: white; } ::moz-selection{ background-color: #1C84C6; color: white; } ::webkit-selection{ background-color: #1C84C6; color: white; } 
            a { color: #003399; background-color: transparent; font-weight: normal; } 
            h1 { color: #444; background-color: transparent; border-bottom: 1px solid #D0D0D0; font-size: 19px; font-weight: normal; margin: 0 0 14px 0; padding: 14px 15px 10px 15px; } 
            .alert-box { color:#555; border-radius:5px; font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px; padding:5px 5px; margin:10px 0; text-align:center } 
            .alert-box span { font-weight:bold; text-transform:uppercase; } 
            .error { background:#ffecec; border:1px solid #f5aca6; } 
            .success { background:#e9ffd9; border:1px solid #a6ca8a; } 
            #msgbx_err{ display: none; } 
            #msgbx_success{ display: none; } 
 
</style>    
<script src="<?php echo base_url(); ?>static/index/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>static/index/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>static/index/js/jquery.form.js"></script> 
<script>


$(document).ready(function()
{
	$('#submit').click(function(){
		$('#loading').fadeIn('fast');
		jQuery("html, body").animate({ scrollTop: jQuery("#loading").offset().top }, 1000);
	});

	<!--ajax form posting for Add new Contact starts-->
	$('#contact-form').ajaxForm(function(e) {
		if(e=='email'){status_alert('Enter Email Address');$("#"+e).focus();  }
		if(e=='pword'){status_alert('Enter Password');$("#"+e).focus();  }
		if(e=='error'){status_alert('Username or Password Incorrect');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('Login Sucessful');
			$( "#alert_box" ).last().removeClass( "alert-danger" );
			$( "#alert_box" ).last().addClass( "alert-success" );
			window.location.href = "<?php echo base_url(); ?>index/sites";
		}
		else if(e.indexOf('http') > -1)
		{
			window.location.href = e;
		}
		
	});
	<!--ajax form posting for Add new Contact Ends-->
		
	<!-- alert box-->
	function status_alert(e)
	{
		$( "#alert_box" ).last().addClass( "alert-danger" );
		$('#loading').fadeOut('fast');
		$('#alert_box').fadeIn('slow');
		$('#alert_content').html(e);
		$("#alert_box").css({left:($(window).width()/2)- ($("#alert_box").width()/2) });
		jQuery("html, body").animate({ scrollTop: jQuery("#alert_box").offset().top }, 1000);
	}
	<!-- alert box-->
	
});

$(function() {
	$('#email').change(function() {
		var name = $('#email').val();
		if(name){
			$.post('<?php echo base_url(); ?>index/chk_usr', {usr_name: name}, function(d) {
				if (d == 1)
				{
					$('#msgbx_err').css('display', 'none');
					$('#msgbx_success').css('display', 'none');
				}
				else if (d == 2)
				{
					$('#msgbx_success').css('display', 'none');
					$('#msgbx_err').css('display', 'block');
					$('#msgbx_err').html('Not a valid email address');
				}
				else
				{
					$('#msgbx_success').css('display', 'none');
					$('#msgbx_err').css('display', 'block');
					$('#msgbx_err').html("Sorry, emeds doesn't recognize that email");
				}
			});
		}
		else
		{
			$('#msgbx_success').css('display', 'none');
			$('#msgbx_err').css('display', 'none');
		}
	});
});


</script>
    </body>
</html>
