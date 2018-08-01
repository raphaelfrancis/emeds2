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
                    <form class="form-horizontal" id="service_add" method="post" action="<?php echo base_url(); ?>admin/services_add/add" enctype="multipart/form-data">
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">choose Image</label>
                            <div class="col-sm-9"><input type="file" name="userfile" /></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">service Name</label>
                            <div class="col-sm-9"><input class="form-control" name="name" placeholder="service Name"></div>
                        </div>
                        <div class="form-group">
                         <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-9"><textarea class="form-control" name="desc" rows="3"></textarea></div>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
	$('#service_add').ajaxForm(function(e) {
		if(e=='name'){status_alert('Enter service Name');$("#"+e).focus();  }
		if(e=='desc'){status_alert('Enter service Description');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('service Added Sucessful');
			window.location.href = "<?php echo base_url(); ?>admin/services";
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
