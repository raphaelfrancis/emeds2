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

	<!-- Text Editor -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>static/index/css/jquery-te-1.4.0.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>static/index/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>
	<!-- Text Editor -->
    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>static/index/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/index/images/favicon.png">
</head>

<body>
    <div class="container">               
        <div class="main">
        
            <div class="row">
            	<div class="col-md-7">
            		<h2>Edit <?php echo $page[0]->page_name; ?>
                    </h2>
                </div>
                <div class="col-md-5">
                	<a class="btn btn-w-m btn-default pull-right" onClick="javascript:history.back(-1);" style="margin-left:20px">&lt;&lt; Back</a>
                	<a data-toggle="modal" data-target="#add_page" class="btn btn-w-m btn-success pull-right">New Section</a>
            	</div>
           	</div>
            <hr/>
            <div class="row">
                <div class="col-md-12">
                    
                    <ul class="todo-list m-t ui-sortable">
                    	<?php $i=0; foreach($multiple_content as $content){ $i++; ?>
                        <li>
                            <div class="row">
                            <div class="col-md-6" style="margin-top:6px">
                                <?php echo $content->page_heading; ?>
                            </div>
                            <div class="col-md-3">
                            <a class="btn btn-w-m btn-default" style="width:100%" href="<?php echo base_url(); ?>index/edit_single_data/<?php echo $content->id; ?>">Edit</a>
                           </div>
                           <?php if($i>1){ ?>
                           <div class="col-md-3">
                           <button type="button" data-toggle="modal" data-target="#Delete" value="<?php echo $content->id; ?>"  style="width:100%" class="btn btn-w-m btn-default delete">Delete</button>
                           </div>
                           <?php } ?>
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
<form class="form-horizontal" id="delete-form" method="post" action="<?php echo base_url(); ?>index/edit_multiple/<?php echo $content->id; ?>/delete">
<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<img src="<?php echo base_url(); ?>static/index/images/loading.gif" id="loading2" style="display:none"/>
                <input type="hidden" name="delete_id" id="delete_id"/>
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
<form method="post" id="add-form" action="<?php echo base_url(); ?>index/edit_multiple/<?php echo $cus_page_id; ?>/add_page">
<div class="modal fade" id="add_page" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="min-width:680px !important">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Create new Section</h4>
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
                            <label class="control-label">Section Name</label>
                            <input placeholder="e,g Periodontal Therapy" name="title_name" id="title_name" type="text" class="form-control">
                        </div>
                    </div><!-- col-sm-6 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                           <label class="control-label">Description :</label>
                           <textarea name="mytextarea" id="mytextarea" rows="40" class="jqte-test"></textarea>
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
                    </div><!-- col-sm-6 -->
                </div>
                </div>
            </div>
    
            
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" id="submit1" class="btn btn-primary">Save</button>
            </div>
            
        </div><!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div>
</form>
 <!-- Modal  Create END-->

    
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
		if(e=='title_name'){status_alert1('Enter Title');$("#"+e).focus();  }
		if(e=='mytextarea'){status_alert1('Enter Description');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert1('Added Sucessful');
			window.location.href = "<?php echo base_url(); ?>index/edit_multiple/<?php echo $cus_page_id; ?>";
		}
		
	});
	<!--ajax form posting for Add new Contact Ends-->
	
	<!-- alert box-->
	function status_alert(e)
	{
		$('#alert_box').fadeIn('slow');
		$('#loading').fadeOut('fast');
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
	
	$('#add_new').click(function(){
		$('#add_new_content').fadeIn('slow');
	});	
	
	<!--ajax form posting for Delete starts-->
	$('#delete-form').ajaxForm(function(e) {
		if(e=='success'){ location.reload();}
	});
	$('.delete').click(function(){
		$('#delete_id').val($(this).val());
	});
	<!--ajax form posting for Delete Ends-->

});

</script>

    </body>
</html>
