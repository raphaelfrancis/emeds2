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
                    	<i class="fa fa-fw fa-edit"></i> Edit Category 
                    </li>
                </ol>
            </div>
            <div class="" style="margin-left: 45px;margin-right: 10%;">
                <div class="panel panel-default">
                	<div class="panel-heading">
                    	<h3> Edit Category</h3>
                  	</div>
        <!-- /.panel-heading -->
            <form class="form-horizontal" id="category_edit" method="post" action="<?php echo base_url(); ?>admin/category_edit/<?php echo $category->id; ?>/update" enctype="multipart/form-data">
        <div class="panel-body">
            <div class="col-md-9">
                  <div class="form-group">
                    <label class=" col-sm-4">Category Name</label>
                    <div class="col-sm-8">
                    <input type="text" name="category_name" id="category_name" value="<?php echo $category->category_name; ?>" class="form-control">
                    </div>
                  </div>
                  
                  
            </div>
            
        </div>
        <div class="panel-footer text-right">
            <a href="<?php echo base_url(); ?>admin/category" type="reset" class="btn btn-default"><i class="fa fa-close"></i> Back</a>
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
	$('#category_edit').ajaxForm(function(e) {
		if(e=='category_name'){status_alert('Enter category Name');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('Category Added Sucessful');
			window.location.href = "<?php echo base_url(); ?>admin/category";
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

