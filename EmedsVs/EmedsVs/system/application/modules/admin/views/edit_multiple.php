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
                	<div class="col-md-6">
                    <h3>Create / Modify Page</h3>
                    </div>
                	<div class="col-md-6 text-right" >
                        <a data-toggle="modal" data-target="#add_page" class="btn btn-success" style="margin-top:8px"><i class="fa fa-plus"></i> Create New Heading</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                
    <!-- /.panel-heading -->
        <div class="panel-body">
            
            
            <div class="login-content">
                
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
                            <a class="btn btn-w-m btn-default" style="width:100%" href="<?php echo base_url(); ?>admin/edit_single_data/<?php echo $content->id; ?>">Edit</a>
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
                </div>
                
            </div>
            
            
        </div>
        <div class="panel-footer text-right">
            <a href="<?php echo base_url(); ?>admin/category" class="btn btn-default">Back</a>
            <button type="reset" class="btn btn-default"><i class="fa fa-close"></i> Clear</button>
        </div>
    </div>
    </div>
        
</div>

<!-- Modal  Delete-->
<form class="form-horizontal" id="delete-form" method="post" action="<?php echo base_url(); ?>admin/edit_multiple/<?php echo $content->id; ?>/delete">
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
<form method="post" id="add-form" action="<?php echo base_url(); ?>admin/edit_multiple/<?php echo $cus_page_id; ?>/add_page">
<div class="modal fade" id="add_page" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="min-width:680px !important">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Create A New Heading</h4>
            </div>
            <div class="modal-body">
            <div class="alert alert-danger" style="display:none" id="alert_box1">
                <div id="alert_content"></div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                	<div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Page Title :</label>
                            <input placeholder="Title Heading" name="title_name" id="title_name" type="text" class="form-control">
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
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            
        </div><!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div>
</form>
 <!-- Modal  Create END-->


<script src="<?php echo base_url(); ?>static/admin/js/jquery.form.js"></script> 


<script>
$(document).ready(function()
{

	<!--ajax form posting for Add new Contact starts-->
	$('#add-form').ajaxForm(function(e) {
		if(e=='title_name'){status_alert1('Enter Title');$("#"+e).focus();  }
		if(e=='mytextarea'){status_alert1('Enter Description');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert1('Added Sucessful');
			window.location.href = "<?php echo base_url(); ?>admin/edit_multiple/<?php echo $cus_page_id; ?>";
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

