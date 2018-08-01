
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Add New service
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-plus"></i> Add new service
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="col-md-12">
            <div class="ibox-content profile-content">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">service Details</h3>
                    </div>
                    <form class="form-horizontal" id="service_edit" method="post" action="<?php echo base_url(); ?>admin/services_edit/<?php echo $service->ser_id; ?>/update" enctype="multipart/form-data">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">choose Image</label>
                            <div class="col-sm-5">
                            <input type="file" name="userfile" />
                            </div>
                            <div class="col-sm-4">
                            <?php if($service->ser_image){ ?>
                            <img alt="image" class="img-responsive img-thumbnail" 
                            src="<?php echo base_url(); ?>uploads/<?php echo $service->ser_image; ?>">
                            <?php } else { ?>
                            <img alt="image" class="img-responsive img-thumbnail" 
                            src="<?php echo base_url(); ?>static/admin/images/default/image_icon.jpg">
                            <?php } ?>
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">service Name</label>
                            <div class="col-sm-9"><input class="form-control" name="name" value="<?php echo $service->ser_name; ?>" placeholder="service Name"></div>
                        </div>
                        <div class="form-group">
                         <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-9"><textarea class="form-control" name="desc" rows="3"><?php echo $service->ser_desc; ?></textarea></div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <a href="<?php echo base_url(); ?>admin/services" style="text-decoration:none"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>          
                    </form>                           
                </div>                    
            </div>
        </div>    
    </div>
</div>
<script src="<?php echo base_url(); ?>static/admin/js/jquery.form.js"></script> 


<script>
$(document).ready(function()
{
	<!--ajax form posting for Add new Contact starts-->
	$('#service_edit').ajaxForm(function(e) {
		if(e=='name'){status_alert('Enter service Name');$("#"+e).focus();  }
		if(e=='desc'){status_alert('Enter service Description');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('service Updated Sucessful');
			location.reload();
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
