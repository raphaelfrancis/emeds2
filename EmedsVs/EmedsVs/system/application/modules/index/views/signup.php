<!DOCTYPE html>
<html>
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Emeds">

    <title>Sign up | Emeds</title>

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
        <div class="main">
           	<div class="row">
            	<div class="col-md-6">
            		<h2>Sign up</h2>
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
                    <form method="post" id="contact-form" action="<?php echo base_url(); ?>index/signup/add">
                    	<div class="col-md-12">
                        <div class="alert alert-danger" style="display:none" id="alert_box">
                            <div id="alert_content"></div>
                        </div>
                        <div class="form-group">
                        	<label class="control-label">Email *</label>
                            <input type="email" class="form-control" placeholder="Please enter your email" name="email" id="email"/>
                            <div id="msgbx_err" class="alert-box error"></div>
                            <div id="msgbx_success" class="alert-box success"></div>
                        </div>
                        <div class="form-group">
                        	<label class="control-label">Name *</label>
                            <input type="text" class="form-control" placeholder="Please enter your name" name="name" id="name"/>
                        </div>
                        <div class="form-group">
                        	<label class="control-label">Password *</label>
                            <input type="password" class="form-control" placeholder="Please enter your password,password should be minium 6 characters" name="password" id="password"/>
                        </div>
                        <div class="form-group">
                        	<label class="control-label">Reenter newPassword *</label>
                            <input type="password" class="form-control" placeholder="Please confirm the password entered above" name="re-password" id="re-password"/>
                        </div>
                        <div class="form-group">
                        	<label class="control-label">Speciality *</label>
                            <select  class="form-control" name="site_def_cat_id" id="site_def_cat_id">
                                <?php foreach($categories as $category){ ?>
                        		<option value="<?php echo $category->id; ?>"><?php echo $category->category_name; ?></option>  
                                <?php } ?>
                            </select>                        
                       	</div>
                        <div class="form-group">
                        	<label class="control-label">Website Title *</label>
                            <input placeholder="Website title" name="website_name" id="website_title" class="form-control" type="text" tabindex="1" >
                        </div>
                        <div class="form-group">
                        	<label class="control-label">Website url *</label>
                            <div class="row">
                            	<div class="col-md-2 text-right" style="margin-top:6px" placeholder = "eg appollodental">
                            	www.emeds.co/
                            	</div>
                            	<div class="col-md-9">
                            <input placeholder="Website url" name="username" id="username" type="text" tabindex="1" class="form-control" >
                            	</div>
                            </div>
                        </div>
                        
                        </div>
						<hr/>
                        <br>
                        <div class="col-md-6">
                        <a href="<?php echo base_url(); ?>index/signin" class="btn btn-w-m btn-default" style="width:100%">Back to sign in</a>
                        </div>
						<div class="col-md-6">
                        <button type="submit" class="btn btn-success pull-right" style="width:100%">Create</button>
                        </div>
                        <br>
                        <br>
                        <br>
                    </form>
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
$(function() {
	$('#email').change(function() {
		var name = $('#email').val();
		$.post('<?php echo base_url(); ?>index/chk_usr', {usr_name: name}, function(d) {
			if (d == 1)
			{
				$('#msgbx_success').css('display', 'none');
				$('#msgbx_err').css('display', 'block');
				$('#msgbx_err').html('Someone already has that email. Try another?');
			}
			else if (d == 2)
			{
				$('#msgbx_success').css('display', 'none');
				$('#msgbx_err').css('display', 'block');
				$('#msgbx_err').html('Not a valid email address');
			}
			else
			{
				$('#msgbx_err').css('display', 'none');
				$('#msgbx_success').css('display', 'none');
			}
		});
	});
});

	
    $(document).ready(function()
    {
        <!--ajax form posting for Add new Contact starts-->
        $('#contact-form').ajaxForm(function(e) {
            if(e=='email'){status_alert('Enter Email Address');$("#"+e).focus();  }
            if(e=='email_not_valid'){status_alert('Email format not valid');$("#"+e).focus();  }
            if(e=='email_exist'){status_alert('Email exist <a href="<?php echo base_url(); ?>index/signin">login</a>');$("#email").focus();  }
            if(e=='name'){status_alert('Enter Name');$("#"+e).focus();  }
            if(e=='password'){status_alert('Enter Password');$("#"+e).focus();  }
            if(e=='strong'){status_alert('Password Strength Week');$("#"+e).focus();  }
            if(e=='re-password'){status_alert('Enter Retype Password');$("#"+e).focus();  }
            if(e=='mismatch'){status_alert('Password Mismatch');$("#"+e).focus();  }

			if(e=='site_def_cat_id'){status_alert('Select Category Name');$("#"+e).focus();  }
			if(e=='website_name'){status_alert('Enter Website Name');$("#"+e).focus();  }
			if(e=='username'){status_alert('Enter Website url');$("#"+e).focus();  }
			if(e=='username_exist'){status_alert('Website url Exist');$("#"+e).focus();  }
    
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
        }
        <!-- alert box-->
        
    });
    </script>

    </body>
</html>
