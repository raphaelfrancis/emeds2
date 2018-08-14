<!DOCTYPE html>
<html>
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Uniox Websolution">

    <title>Edit Site | Emeds</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>static/index/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>static/index/css/emeds.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>static/index/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/index/images/favicon.png">
</head>

<body>
<div class="floater preview-floater">
    <div class="buttonLinks save_and_view_bar">
        <a href="<?php echo base_url(); ?>mysite/<?php echo $content->site_username; ?>" class="btn btn-green">View Site</a>
   </div>
</div>    
<div class="container">               
        <div class="main">
        <form method="post" id="update-form" action="<?php echo base_url(); ?>index/edit_site/<?php echo $content->site_id; ?>/update" enctype="multipart/form-data">

			<div class="row">
            	<div class="col-md-6">
            		<h2>Edit <?php echo $content->site_name; ?></h2>
                </div>
                <div class="col-md-3">
                	<div class="pull-right" style="margin-top:8px">
                	<img src="<?php echo base_url(); ?>static/index/images/loading.gif" id="loading" style="display:none"/>
                    </div>
                </div>
                <div class="col-md-3">
                	<a href="<?php echo base_url(); ?>index/sites" class="btn btn-w-m btn-default pull-right">Back to home</a>
            	</div>
           	</div>
            <hr/>     
            <div class="alert" id="alert_box" style="display:none">
                <div id="alert_content"></div>
            </div>

            <div class="login-content">
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Website Title</label>
                            <input name="site_name" id="site_name" type="text" placeholder="e.g Appolo Dental" value="<?php echo $content->site_name; ?>" required class="form-control">
                            <input name="site_id" id="site_id" type="hidden" value="<?php echo $content->site_id; ?>">
                        </div>
                    </div><!-- col-sm-6 -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Colour</label>
                            <input name="colour_code" id="colour_code" type="text" value="<?php echo $content->site_colour_code; ?>" required class="form-control color">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                        	<label class="control-label">Website Url</label>
                            <div class="row">
                            	<div class="col-md-2" style="margin-top:6px;">
                            		www.emeds.co/
                            	</div>
                            	<div class="col-md-10">
                            <input placeholder="e.g appollodental" name="site_username" id="site_username" type="text" value="<?php echo $content->site_username; ?>" required class="form-control">
                            	<input name="username_original" id="username_original" type="hidden" value="<?php echo $content->site_username; ?>">
                            	</div>
                            </div>
                        </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input name="site_email" id="site_email" class="form-control" type="email" placeholder="<?php echo $content->site_email; ?>" value="<?php echo $content->site_email; ?>">
                        </div>
                    </div><!-- col-sm-6 -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Mobile no</label>
                            <input name="site_mobile" id="site_mobile" class="form-control" type="text" placeholder="Mobile No" value="<?php echo $content->site_mobile; ?>">
                        </div>
                    </div>
            	</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Facebook URL</label>
                            <input name="facebook" id="facebook" type="url" value="<?php echo $content->facebook; ?>" class="form-control" placeholder="e.g https://www.facebook.com/conpamy-name/">
                        </div>
                    </div><!-- col-sm-6 -->
                
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Twitter URL</label>
                            <input name="twitter" id="twitter" type="url" value="<?php echo $content->twitter; ?>" class="form-control" placeholder="e.g https://www.twitter.com/conpamy-name/">
                        </div>
                    </div><!-- col-sm-6 -->
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Google plus URL</label>
                            <input name="google_plus" id="google_plus" type="url" value="<?php echo $content->google_plus; ?>" class="form-control" placeholder="e.g https://www.plus.google.com/u/0/conpamy-name/">
                        </div>
                    </div><!-- col-sm-6 -->
              
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Youtube URL</label>
                            <input name="youtube" id="youtube" type="url" value="<?php echo $content->youtube; ?>" class="form-control" placeholder="e.g https://www.youtube.com/conpamy-name/">
                        </div>
                    </div><!-- col-sm-6 -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Select Your Logo ( 180 px * 50 px )</label>
                            
                        </div>
                    </div>
                    <div class="col-sm-6" style="margin-top:12px">
                        <div class="form-group">
                            <input name="userfile" id="userfile" type="file" tabindex="2">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group no-margin-hr" style="text-align:right">
                            <?php if($content->site_logo){ 
                                ?>
                            <img src="<?php echo base_url(); ?>uploads/<?php echo $content->site_logo; ?>" class="img-thumbnail"/>
                            <?php } ?>
                        </div>
                    </div>
            	</div>  
                    
                </div>
                <hr/>
                
                <div class="row">
                    <div class="col-md-6">
                        <a data-toggle="modal" data-target="#add_page" class="btn btn-w-m btn-default" style="width:100%">Create New Page</a>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success pull-right" style="width:100%">Update</button>
                    </div>
					<div class="clearfix"></div>
                </div>
                </form>
                
                <hr/>
                
                <div class="row">
                    <div class="col-md-12">
                        
                        <ul class="todo-list m-t ui-sortable">
                        
                        	<?php foreach($pages as $page){ 
                                ?>
                            <li>
                               	<div class="row">
                               	<div class="col-md-6" style="margin-top:6px">
                               		<?php echo $page->page_name; ?>
                               	</div>
                               	<div class="col-md-3">
								<?php 
                                if($page->def_page_id==1){ $val='edit_home'; } 
                                if($page->def_page_id==2){ $val='edit_single'; } 
                                if($page->def_page_id==3){ $val='edit_multiple'; } 
                                if($page->def_page_id==4){ $val='edit_gallery'; } 
                                if($page->def_page_id==5){ $val='edit_contact';  
                                ?>
        <a class="btn btn-w-m btn-default" style="width:100%" href="<?php echo base_url(); ?>index/<?php echo $val; ?>/<?php echo $content->site_id; ?>">Edit</a>
        						<?php
								}
								else
								{
								?>
<a class="btn btn-w-m btn-default" style="width:100%" href="<?php echo base_url(); ?>index/<?php echo $val; ?>/<?php echo $page->id; ?>">Edit</a>
                                <?php 
								}
								?>
                               </div>
                               <div class="col-md-3">
                               <?php if($page->def_page_id==2 || $page->def_page_id==3){ ?>
                               <button type="button" data-toggle="modal" data-target="#Delete" value="<?php echo $page->id; ?>"  style="width:100%" class="btn btn-w-m btn-default delete">Delete</button>
                                <?php }  ?>
                                
                               
                               </div>
                               </div>
                               
                            </li>
                            <?php } ?>
                            
                        </ul>
                    </div>
                    
					<div class="clearfix"></div>
                </div>
            </div>
            
            
        </div>
        
        
        
        </div>
        
<!-- Modal  Delete-->
<form class="form-horizontal" id="delete-form" method="post" action="<?php echo base_url(); ?>index/edit_site/<?php echo $content->site_username; ?>/delete">
<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <input type="hidden" name="delete_id" id="delete_id"/>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <button type="button" class="btn btn-danger"><i class="fa fa-3x fa-warning" style="color: #FF0;"></i></button>
                Are you sure you want to delete this item permanently ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger">Yes</button>
            </div>
        </div><!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div>

</form>
<!-- Modal  Delete END-->

    
<!-- Modal  Create-->
<form method="post" id="add-form" action="<?php echo base_url(); ?>index/edit_site/<?php echo $content->site_id; ?>/add_page">
<div class="modal fade" id="add_page" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Create A New Page</h4>
            </div>
            <div class="modal-body">
            <div class="alert alert-danger" style="display:none" id="alert_box1">
                <div id="alert_content1"></div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                	<div class="row">
                        <div class="col-md-6">
                        	<label><input type="radio" name="def_page_id" value="2"> Single Section </label>
                        </div>
                        <div class="col-md-6">
                        	<label><input type="radio" name="def_page_id" value="3"> Multiple Sections </label>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Page Name</label>
                            <input placeholder="Our Team" name="page_name" id="page_name" type="text" class="form-control">
                        </div>
                    </div><!-- col-sm-6 -->
                </div>
                </div>
            </div>
    
            
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" id="submit" class="btn btn-primary">Save</button>
            </div>
            
        </div><!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div>
</form>
 <!-- Modal  Create END-->

    
<script src="<?php echo base_url(); ?>static/index/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>static/index/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>static/index/js/jquery.form.js"></script> 
<script src="<?php echo base_url(); ?>static/index/jscolor/jscolor.js"></script>
<script>


$(document).ready(function()
{
	$('#submit').click(function(){
		$('#loading').fadeIn('fast');
	});

	<!--ajax form posting for Add new Contact starts-->
	$('#update-form').ajaxForm(function(e) {
		
		if(e=='site_name'){status_alert('Enter Site Name');$("#"+e).focus();  }
		if(e=='site_username'){status_alert('Enter Username');$("#"+e).focus();  }
		if(e=='site_username_exist'){status_alert('Username Exist');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('Updated Sucessfully');
			$("#alert_box").last().removeClass( "alert-danger" );
			$("#alert_box").last().addClass( "alert-success" );
			window.location.href = "<?php echo base_url(); ?>index/edit_site/<?php echo $content->site_id; ?>";
		}
		
	});
	<!--ajax form posting for Add new Contact Ends-->
	<!--ajax form posting for Add new Contact starts-->
	$('#add-form').ajaxForm(function(e) {
		if(e=='def_page_id'){status_alert1('Select Page Type');$("#"+e).focus();  }
		if(e=='page_name'){status_alert1('Enter Page Name');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert1('Added Sucessful');
			window.location.href = "<?php echo base_url(); ?>index/edit_site/<?php echo $content->site_id; ?>";
		}
		
	});
	<!--ajax form posting for Add new Contact Ends-->
	
	<!-- alert box-->
	function status_alert(e)
	{
		$("#alert_box").last().addClass("alert-danger");
		$('#loading').fadeOut('fast');
		$('#alert_box').fadeIn('slow');
		$('#alert_content').html(e);
	}
	<!-- alert box-->
	function status_alert1(e)
	{
		$('#alert_box1').fadeIn('slow');
		$('#alert_content1').html(e);
		$("#alert_box1").css({left:($(window).width()/2)- ($("#alert_box").width()/2) });
		jQuery("html, body").animate({ scrollTop: jQuery("#alert_box1").offset().top }, 1000);
	}
	
	<!-- alert box-->
	
	$('#add_new').click(function(){
		$('#add_new_content').fadeIn('slow');
	});
		
	<!--ajax form posting for Delete starts-->
	$('#delete-form').ajaxForm(function(e) {
		if(e=='success'){location.reload();}
	});
	$('.delete').click(function(){
		$('#delete_id').val($(this).val());
	});
	<!--ajax form posting for Delete Ends-->
	
});
</script>
    </body>
</html>
