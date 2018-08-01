<div id="page-wrapper">
        <div class="page-header">
                <ol class="breadcrumb">
                    <li>
                    	<a href="<?php echo base_url(); ?>admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                       <a href="<?php echo base_url(); ?>admin/customers"><i class="fa fa-cube"></i> Customer</a>
                    </li>
                    <li class="active">
                    	<i class="fa fa-fw fa-edit"></i> Edit Customer 
                    </li>
                </ol>
            </div>
            <div class="" style="margin-left: 45px;margin-right: 10%;">
                <div class="panel panel-default">
                	<div class="panel-heading">
                    	<h2> Edit Customer</h2>
                  	</div>
        <!-- /.panel-heading -->
            <form class="form-horizontal" id="customer_edit" method="post" action="<?php echo base_url(); ?>admin/customer_edit/<?php echo $customer->cus_id; ?>/update" enctype="multipart/form-data">
        <div class="panel-body">
            <div class="col-md-9">
                  
                  <div class="form-group">
                    <label class=" col-sm-4">Email :</label>
                    <div class="col-sm-8">
                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $customer->cus_email; ?>" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class=" col-sm-4">Name :</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $customer->cus_name; ?>" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class=" col-sm-4">Password :</label>
                    <div class="col-sm-8">
                    	<button type="button" data-toggle="modal" data-target="#Reset" value="<?php echo $customer->cus_id; ?>" class="btn btn-default reset">Reset password</button>
                    </div>
                  </div>
                  
                  
                  
            </div>
            
        </div>
        <div class="panel-footer text-right">
            <a href="<?php echo base_url(); ?>admin/customers" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
        </div>
        </form>
        
    	</div>
        </div>
            
    </div>
<!-- Modal  Reset password -->
<form class="form-horizontal" id="password_reset" method="post" action="<?php echo base_url(); ?>admin/customer_edit/<?php echo $customer->cus_id; ?>/reset">
<div class="modal fade" id="Reset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
               <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Enter New Password"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <button type="submit" id="reset_submit" class="btn btn-danger">Yes</button>
            </div>
        </div><!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div>

</form>
<!-- Modal Reset password END-->
<script src="<?php echo base_url(); ?>static/admin/js/jquery.form.js"></script> 

<script>

$(document).ready(function()
{
	$('#reset_submit').click(function(){
		$('#alert_box').fadeIn('slow');
		$('#loading').fadeIn('fast');
	});

	<!--ajax form posting for Add new Contact starts-->
	$('#customer_edit').ajaxForm(function(e) {
	
		if(e=='email'){status_alert('Enter Email Address');$("#"+e).focus();  }
		if(e=='email_not_valid'){status_alert('Email format not valid');$("#"+e).focus();  }
		if(e=='name'){status_alert('Enter Name');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('Customer Added Sucessful');
			window.location.href = "<?php echo base_url(); ?>admin/customer_edit/<?php echo $customer->cus_id; ?>/default";
		}
		
	});
	<!--ajax form posting for Add new Contact Ends-->
	<!--ajax form posting for Add new Contact starts-->
	$('#password_reset').ajaxForm(function(e) {
		if(e=='new_password'){status_alert('Enter Customer Name');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('Updated Sucessful');
			window.location.href = "<?php echo base_url(); ?>admin/customer_edit/<?php echo $customer->cus_id; ?>/default";
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

