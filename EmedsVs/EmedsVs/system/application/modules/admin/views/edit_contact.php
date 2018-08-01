	<!-- Text Editor -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/index/css/jquery-te-1.4.0.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>static/index/js/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>static/index/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>
	<!-- Text Editor -->


<div id="page-wrapper">
    <div class="page-header">
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo base_url(); ?>admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                   <a href="<?php echo base_url(); ?>admin/category"><i class="fa fa-cube"></i> category</a>
                </li>
                <li class="active">
                    <i class="fa fa-fw fa-plus"></i> Edit Single Page 
                </li>
            </ol>
        </div>
        <div class="" style="margin-left: 45px;margin-right: 10%;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2> Edit Single Page</h2>
                </div>
    <!-- /.panel-heading -->
                <form method="post" id="update-form" action="<?php echo base_url(); ?>index/edit_contact/<?php echo $content->site_id; ?>/update" enctype="multipart/form-data">

        <div class="panel-body">
            
            
            <div class="login-content">
                <div class="alert alert-danger" style="display:none" id="alert_box">
                    <div id="alert_content"></div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input name="site_email" id="site_email" class="form-control" type="email" required placeholder="Email ID" value="<?php echo $content->site_email; ?>">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Phone No</label>
                            <input name="site_phone" id="site_phone" class="form-control" type="text" required placeholder="Phone No" value="<?php echo $content->site_phone; ?>">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label">Mobile No</label>
                            <input name="site_mobile" id="site_mobile" class="form-control" type="text" required placeholder="Mobile No" value="<?php echo $content->site_mobile; ?>">
                        </div>
                    </div>
            	</div>
                
            </div>
            
            
        </div>
        <div class="panel-footer text-right">
            <a href="<?php echo base_url(); ?>admin/category" class="btn btn-default">Back</a>
            <button type="reset" class="btn btn-default"><i class="fa fa-close"></i> Clear</button>
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
        </div>
    </form>      
    </div>
    </div>
        
</div>


<script src="<?php echo base_url(); ?>static/admin/js/jquery.form.js"></script> 


<script>
$(document).ready(function()
{
	<!--ajax form posting for Add new Contact starts-->
	$('#update-form').ajaxForm(function(e) {
		$('#loading').fadeIn('fast');
		if(e=='title'){status_alert('Enter Title Name');$("#"+e).focus();  }
		if(e=='mytextarea'){status_alert('Enter Content');$("#"+e).focus();  }


		if(e=='success')
		{
			status_alert('Updated Sucessfully');
			window.location.reload();
		}
		else
		{
			status_alert(e);
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

