<div id="page-wrapper">
    <div class="page-header">
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo base_url(); ?>admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                   <a href="<?php echo base_url(); ?>admin/customers"><i class="fa fa-cube"></i> customer</a>
                </li>
                <li class="active">
                    <i class="fa fa-fw fa-plus"></i> Add customer 
                </li>
            </ol>
        </div>
        <div class="" style="margin-left: 45px;margin-right: 10%;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2> Add customer</h2>
                </div>
    <!-- /.panel-heading -->
    <form class="form-horizontal" id="customer_add" method="post" action="<?php echo base_url(); ?>admin/customer_add/add" enctype="multipart/form-data">
        <div class="panel-body">
            <div class="col-md-9">
                  <div class="form-group">
                    <label class=" col-sm-4">Email :</label>
                    <div class="col-sm-8">
                    <input type="email" class="form-control" placeholder="Please enter your Email" name="email" id="email"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class=" col-sm-4">Name :</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Please enter Your Name" name="name" id="name"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class=" col-sm-4">Password :</label>
                    <div class="col-sm-8">
                    <input type="password" class="form-control"  placeholder="Please enter your Password" name="password" id="password"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class=" col-sm-4">Re-Password :</label>
                    <div class="col-sm-8">
                    <input type="password" class="form-control"  placeholder="Please enter your Password" name="re-password" id="re-password"/>
                    </div>
                  </div>
                  
            </div>
        </div>
        <div class="panel-footer text-right">
            <a href="<?php echo base_url(); ?>admin/customers" class="btn btn-default">Back</a>
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
	$('#customer_add').ajaxForm(function(e) {
		$('#alert_box').fadeIn('slow');		
		$('#loading').fadeIn('fast');

		if(e=='email'){status_alert('Enter Email Address');$("#"+e).focus();  }
		if(e=='email_not_valid'){status_alert('Email format not valid');$("#"+e).focus();  }
		if(e=='email_exist'){status_alert('Email ID exist <a href="<?php echo base_url(); ?>index/signin">login</a>');$("#email").focus();  }
		if(e=='name'){status_alert('Enter Name');$("#"+e).focus();  }
		if(e=='password'){status_alert('Enter Password');$("#"+e).focus();  }
		if(e=='strong'){status_alert('Password Strength Week');$("#"+e).focus();  }
		if(e=='re-password'){status_alert('Enter Retype Password');$("#"+e).focus();  }
		if(e=='mismatch'){status_alert('Password Mismatch');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('customer Added Sucessful');
			window.location.href = "<?php echo base_url(); ?>admin/customers";
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

