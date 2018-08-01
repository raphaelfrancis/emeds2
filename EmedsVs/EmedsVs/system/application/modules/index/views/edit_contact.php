<!DOCTYPE html>
<html>
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Emeds">

    <title>Edit Contact</title>

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
                <form method="post" id="update-form" action="<?php echo base_url(); ?>index/edit_contact/<?php echo $content->site_id; ?>/update" enctype="multipart/form-data">

			<div class="row">
            	<div class="col-md-6">
            		<h2>Edit Contact</h2>
                </div>
                <div class="col-md-4">	
                	<div class="pull-right" style="margin-top:8px">
                	<img src="<?php echo base_url(); ?>static/index/images/loading.gif" id="loading" style="display:none"/>
                    </div>
                </div>
                <div class="col-md-2">
                	<a href="javascript:history.back(-1)" class="btn btn-w-m btn-default pull-right"> < < Back </a>
            	</div>
           	</div>
            <hr/>    
            <?php if($this->session->flashdata('success')){
			?>	
            <div class="alert alert-success" id="alert_box">
                <div id="alert_content"><?php echo $this->session->flashdata('success'); ?></div>
            </div>
			<?php } ?> 
            <div class="alert" id="alert_box" style="display:none">
                <div id="alert_content"></div>
            </div>
            <div class="login-content">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Email *</label>
                            <input name="site_email" id="site_email" class="form-control" type="text" placeholder="Email ID" value="<?php echo $content->site_email; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Phone No</label>
                            <input name="site_phone" id="site_phone" class="form-control" type="text" placeholder="Phone No" value="<?php echo $content->site_phone; ?>">
                        </div>
                    </div><!-- col-sm-6 -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Mobile No *</label>
                            <input name="site_mobile" id="site_mobile" class="form-control" type="text" placeholder="Mobile No" value="<?php echo $content->site_mobile; ?>">
                        </div>
                    </div>
            	</div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Address *</label>
                            <textarea name="site_address" id="site_address" class="form-control" placeholder="Address" rows="6"><?php echo $content->address; ?></textarea>
                        </div>
                    </div><!-- col-sm-6 -->
                </div>  
                
                <div class="row">
                    <!-- col-sm-6 -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Hours of operation</label>
                            <textarea name="operation_hours" id="operation_hours" class="form-control" rows="6"><?php echo $content->operation_hours; ?></textarea>
                        </div>
                    </div>
            	</div>
                    
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-w-m btn-default" style="width:100%" onClick="javascript:history.back(-1);">Back to Edit Site</button>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" id="submit" class="btn btn-success pull-right" style="width:100%">Update</button>
                    </div>
					<div class="clearfix"></div>
                </div>
                </form>
            </div>
        </div>
        </div>


<script src="<?php echo base_url(); ?>static/index/js/jquery.min.js"></script>
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
	$('#update-form').ajaxForm(function(e) {
		
		if(e=='site_email'){status_alert('Enter Email address');$("#"+e).focus();  }
		if(e=='invalid'){status_alert('Invalid Email address');$("#site_email").focus();  }
		if(e=='site_mobile'){status_alert('Enter mobile number');$("#"+e).focus();  }
		if(e=='site_address'){status_alert('Enter address');$("#"+e).focus();  }

		if(e=='success')
		{
			window.location.href = "<?php echo base_url(); ?>index/edit_contact/<?php echo $content->site_id; ?>";
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
	function status_alert1(e)
	{
		$( "#alert_box1" ).last().addClass( "alert-danger" );
		$('#loading').fadeOut('fast');
		$('#alert_box').fadeOut('slow');
		$('#alert_box1').fadeIn('slow');
		$('#alert_content1').html(e);
		$("#alert_box1").css({left:($(window).width()/2)- ($("#alert_box").width()/2) });
		jQuery("html, body").animate({ scrollTop: jQuery("#alert_box1").offset().top }, 1000);
	}
	<!-- alert box-->
		
});
</script>

    </body>
</html>
