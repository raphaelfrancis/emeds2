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
	<?php if($this->session->flashdata('error')){ ?>
    <script>alert(<?php echo $this->session->flashdata('error'); ?>); </script>
    <?php } ?>

    <div class="container">               
        <div class="main">
            <h2>Create Website</h2>
			<hr/>
            <div class="login-content">
                <div class="row">    
                    <form method="post" id="contact-form" action="<?php echo base_url(); ?>index/sitename/create">
                    	<div class="col-md-12">
                    	<div class="alert alert-danger" style="display:none" id="alert_box">
                            <div id="alert_content"></div>
                        </div>
                        </div>
                    	
                    	<div class="col-md-12">
                        <div class="alert alert-danger" style="display:none" id="alert_box">
                            <div id="alert_content"></div>
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
                            <input placeholder="Appollo Dental Care" name="website_name" id="website_name" class="form-control" type="text" tabindex="1" >
                        </div>
                        <div class="form-group">
                        	<label class="control-label">Website url *</label>
                            <div class="row">
                            	<div class="col-md-3 text-right" style="margin-top:6px; padding-right:0px !important">
                            		www.emeds.co/
                            	</div>
                            	<div class="col-md-9">
                            <input onkeyup="this.value=this.value.replace(/[\W]/g,'-');" placeholder="apollodental" name="username" id="username" type="text" tabindex="1" class="form-control" >
                            	</div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-12">
                        <hr/>
                        </div>
						<div class="col-md-6">
                            <a href="<?php echo base_url(); ?>index" class="btn btn-w-m btn-default" style="width:100%">Back to Home</a>
                        </div>
						<div class="col-md-6">
                            <input type="hidden" name="temp_id" value="<?php echo $temp_id; ?>"/>
                            <button type="submit" class="btn btn-success pull-right" style="width:100%">Create Site</button>
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
		if(e=='site_def_cat_id'){status_alert('Select Category Name');$("#"+e).focus();  }
		if(e=='website_name'){status_alert('Enter Website Name');$("#"+e).focus();  }
		if(e=='username'){status_alert('Enter Website url');$("#"+e).focus();  }
		if(e=='username_exist'){status_alert('Username Exist');$("#"+e).focus();  }

		if(e=='success')
		{
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
