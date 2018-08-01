<!DOCTYPE html>
<html>
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Uniox Websolution">

    <title>Edit Site</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>static/index/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>static/index/css/emeds.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>static/index/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>static/index/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">

	<!-- Text Editor -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/index/css/jquery-te-1.4.0.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>static/index/js/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>static/index/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>
	<!-- Text Editor -->
    <link href="<?php echo base_url(); ?>static/index/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/index/images/favicon.png">
</head>

<body>

    <div class="container">               
        <div class="main">
            <div class="row">
            	<div class="col-md-6">
            		<h2>Edit <?php echo $page[0]->page_name; ?></h2>
                </div>
                <div class="col-md-3">
                	<div class="pull-right" style="margin-top:8px">
                	<img src="<?php echo base_url(); ?>static/index/images/loading.gif" id="loading" style="display:none"/>
                    </div>
                </div>
                <div class="col-md-3">
                	<a href="javascript:history.back(-1)" class="btn btn-w-m btn-default pull-right"><< Back</a>
            	</div>
           	</div>
            <hr/>
			<form method="post" id="update-form" action="<?php echo base_url(); ?>index/edit_single/<?php echo $single_content->id; ?>/update" enctype="multipart/form-data">
            <div class="login-content">
                <div class="alert" style="display:none" id="alert_box">
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
                            <p  style="text-align:right; color:#999999">(Please Change Image 800 px width * 350 px height )</p>
                            <img src="<?php echo base_url(); ?>uploads/pages/default/content1.jpg" class="img-thumbnail">
                            <?php } ?>
                        </div>
                    </div>
            	</div>
                
                <hr/>
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-w-m btn-default" style="width:100%" onClick="javascript:history.back(-1);">Back to edit site</button>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success pull-right" id="submit" style="width:100%">Update</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

</body>
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
	$('#update-form').ajaxForm(function(e) {
		if(e=='title'){status_alert('Enter Title Name');$("#"+e).focus();  }
		if(e=='mytextarea'){status_alert('Enter Content');$("#"+e).focus();  }


		if(e=='success')
		{
			status_alert('Login Sucessful');
			$( "#alert_box" ).last().removeClass( "alert-danger" );
			$( "#alert_box" ).last().addClass( "alert-success" );
			window.location.reload();
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
	
	
    </script>
    
    
</html>
