<!DOCTYPE html>
<html>
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Emeds">

    <title>Edit Site</title>

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

			<div class="row">
            	<div class="col-md-7">
            		<h2>Edit Your Page</h2>
                </div>
                <div class="col-md-3">
                	<a data-toggle="modal" data-target="#add_page" class="btn btn-w-m btn-success" style="width:100%">Add Photos</a>
            	</div>
                <div class="col-md-2">
                	<a class="btn btn-w-m btn-default pull-right" onClick="javascript:history.back(-1);">&lt;&lt; Back</a>
            	</div>
           	</div>
            <hr/>   
            
            <?php if($this->session->flashdata('success')){
			?>	
            <div class="alert alert-success" id="alert_box">
                <div id="alert_content"><?php echo $this->session->flashdata('success'); ?></div>
            </div>
			<?php } ?>  

            <div class="login-content">
                <div class="row">
                	
                	<?php if($gallery_content){ $i=0; foreach($gallery_content as $content){ $i++; ?>
                    <div class="col-sm-4 padding">
                        <img src="<?php echo base_url(); ?>uploads/gallery/<?php echo $content->image_path; ?>" class="img-responsive img-thumbnail"/>
                        <div style="text-align:center; margin-top:4px">
                        <?php if($i!=1){ ?>
                        <a href="<?php echo base_url(); ?>index/move_gallery_position/<?php echo $content->position; ?>/<?php echo $content->position-1; ?>/<?php echo $content->id; ?>/<?php echo $content->cus_page_id; ?>" class="btn btn-w-m btn-default pull-left"> < < </a>
                        <?php } else { ?>
                        <a href="<?php echo base_url(); ?>index/move_gallery_position/<?php echo $content->position; ?>/<?php echo $content->position+1; ?>/<?php echo $content->id; ?>/<?php echo $content->cus_page_id; ?>" class="btn btn-w-m btn-default pull-left"> > > </a>
                        <?php } ?>
                        
                        <button type="button" data-toggle="modal" data-target="#Delete" value="<?php echo $content->id; ?>"  class="btn btn-danger delete">Delete</button>
                        
						<?php if($i!=$count){ ?>
                        <a href="<?php echo base_url(); ?>index/move_gallery_position/<?php echo $content->position; ?>/<?php echo $content->position+1; ?>/<?php echo $content->id; ?>/<?php echo $content->cus_page_id; ?>" class="btn btn-w-m btn-default pull-right"> > > </a>
                        <?php } else { ?>
                        <a href="<?php echo base_url(); ?>index/move_gallery_position/<?php echo $content->position; ?>/<?php echo $content->position-1; ?>/<?php echo $content->id; ?>/<?php echo $content->cus_page_id; ?>" class="btn btn-w-m btn-default pull-right"> < < </a>
                        <?php } ?>

                        </div>
                    </div>
                    <?php } } else { ?>
					<div class="col-sm-12"><br/>
                    <div class="alert alert-danger" role="alert">
					      <strong>Oh snap!</strong> no photos here...!!!
					    </div>
                    </div>
					<?php } ?>
                    
                    
            	</div>  
            </div>
        </div>
    </div>
    
<!-- Modal  Delete-->
<form class="form-horizontal" id="delete-form" method="post" action="<?php echo base_url(); ?>index/edit_gallery/<?php echo $page_id; ?>/delete">
<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <input type="hidden" name="delete_id" id="delete_id"/>
            	<img src="<?php echo base_url(); ?>static/index/images/loading.gif" id="loading2" style="display:none"/>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <button type="button" class="btn btn-danger"><i class="fa fa-3x fa-warning" style="color: #FF0;"></i></button>
                Are you sure you want to delete this item permanently ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <button type="submit" id="submit2" class="btn btn-danger">Yes</button>
            </div>
        </div><!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div>
</form>
<!-- Modal  Delete END-->

<!-- Modal  Create-->
<form method="post" id="add-form" action="<?php echo base_url(); ?>index/edit_gallery/<?php echo $page_id; ?>/add_page" enctype="multipart/form-data">

<div class="modal fade" id="add_page" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Upload New Photo ( 1000 * 700 )</h4>
                <img src="<?php echo base_url(); ?>static/index/images/loading.gif" id="loading1" style="display:none"/>
            </div>
            <div class="modal-body">
            <div class="alert alert-danger" style="display:none" id="alert_box1">
                <div id="alert_content1"></div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                	<div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input name="userfile" id="userfile" type="file">
                        </div>
                    </div><!-- col-sm-6 -->
                </div>
                </div>
            </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="submit1" class="btn btn-primary">Save</button>
            </div>
            
        </div><!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div>
</form>
 <!-- Modal  Create END-->
    

<style>
.padding{padding-bottom:1.4em}
</style>    
<script src="<?php echo base_url(); ?>static/index/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>static/index/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>static/index/js/jquery.form.js"></script> 

<script>
$(document).ready(function()
{
	$('#submit1').click(function(){
		$('#loading1').fadeIn('slow');
	});
	$('#submit2').click(function(){
		$('#loading2').fadeIn('slow');
	});

	<!--ajax form posting for Add new Contact starts-->
	$('#add-form').ajaxForm(function(e) {
		if(e=='success')
		{
			status_alert1('Added Sucessful');
			window.location.href = "<?php echo base_url(); ?>index/edit_gallery/<?php echo $page_id; ?>";
		}
		else
		{
			status_alert1(e);
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
	function status_alert1(e)
	{
		$('#loading1').fadeOut('fast');
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
