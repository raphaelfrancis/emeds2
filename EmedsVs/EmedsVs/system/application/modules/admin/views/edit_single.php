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
        <form method="post" id="update-form" action="<?php echo base_url(); ?>admin/edit_single/<?php echo $single_content->id; ?>/update" enctype="multipart/form-data">
        <div class="panel-body">
            
            
            <div class="login-content">
                <div class="alert alert-danger" style="display:none" id="alert_box">
                    <div id="alert_content"></div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Title :</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="<?php echo $single_content->page_heading; ?>">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="control-label">Description :</label>
                            <textarea name="mytextarea" id="mytextarea" rows="20" class="jqte-test"><?php echo $single_content->page_description; ?></textarea>
							<script>
                                $('.jqte-test').jqte();
                                
                                // settings of status
                                var jqteStatus = true;
                                $(".status").click(function()
                                {
                                    jqteStatus = jqteStatus ? false : true;
                                    $('.jqte-test').jqte({"status" : jqteStatus})
                                });
                            </script>

                        </div>
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Select Your Image ( 800 px * 350 px )</label>
                            
                        </div>
                    </div>
                    <div class="col-sm-6" style="margin-top:12px">
                        <div class="form-group">
                            <input name="userfile" id="userfile" type="file" tabindex="2">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group no-margin-hr" style="text-align:right">
                            <?php if($single_content->page_photo){ ?>
                            <img src="<?php echo base_url(); ?>uploads/pages/<?php echo $single_content->page_photo; ?>" class="img-thumbnail">
                            <?php }else { ?>
                            <img src="<?php echo base_url(); ?>uploads/pages/default/content1.jpg" class="img-thumbnail">
                            <?php } ?>
                        </div>
                    </div>
            	</div>
                
            </div>
            
            
        </div>
        <div class="panel-footer text-right">
            <a href="<?php echo base_url(); ?>admin/category" class="btn btn-default">Back</a>
            <button type="reset" class="btn btn-default"><i class="fa fa-close"></i> Clear</button>
            <button type="submit" id="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
        </div>
    </form>      
    </div>
    </div>
        
</div>


<script src="<?php echo base_url(); ?>static/admin/js/jquery.form.js"></script> 


<script>
$(document).ready(function()
{
	$('#submit').click(function(){
		$('#alert_box').fadeIn('slow');
		$('#loading').fadeIn('fast');
	});
	<!--ajax form posting for Add new Contact starts-->
	$('#update-form').ajaxForm(function(e) {
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

