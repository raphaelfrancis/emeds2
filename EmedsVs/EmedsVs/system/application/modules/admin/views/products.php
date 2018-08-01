<div id="page-wrapper">
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Products
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Products
            </li>
        </ol>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                    <div class="pull-right form-group">
                        <a href="<?php echo base_url(); ?>admin/products_add" class="btn btn-primary ">Add new Products</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Modal  Delete-->
	<form class="form-horizontal" id="product_delete" method="post" action="<?php echo base_url(); ?>admin/products/delete">
    <div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <input type="text" name="delete_id" id="delete_id"/>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <button type="button" class="btn btn-danger"><i class="fa fa-3x fa-warning" style="color: #FF0;"></i></button>
                    Are you sure you want to delete this iteam permanently ?
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
    <div class="row">
        <div class="col-lg-12 animated fadeInRight">
            <?php foreach($products as $product){ ?>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div  class=" panel panel-primary">
                    <div class="panel-heading">
                        <?php echo $product->prod_name; ?>
                        <span class="pull-right panel-tool">
                        <a href="<?php echo base_url(); ?>admin/products_edit/<?php echo $product->prod_id; ?>/default" style="text-decoration:none">
                            <button type="button" data-toggle="modal" class="btn btn-xs btn-default edit" >
                                <i class="fa fa-pencil" title="Edit Image Details"></i>
                            </button>
                        </a>
                        <button type="button" data-toggle="modal" data-target="#Delete" value="<?php echo $product->prod_id; ?>" class="btn btn-xs btn-default delete">
                        <i class="fa fa-trash" title="Delete This Image"></i>
                        </button>
                        </span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12" style="padding:10px">
                    <?php if($product->prod_image){ ?>
                    <img alt="image" class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>uploads/<?php echo $product->prod_image; ?>">
                    <?php } else { ?>
                    <img alt="image" class="img-responsive" src="<?php echo base_url(); ?>static/admin/images/default/image_icon.jpg">
                    <?php } ?>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="panel-body">
                        <?php echo $product->prod_desc; ?>
                    </div>
                    </div>
                    <div style="clear:both"></div>
                </div> 
            </div>
            <br />
            <?php } ?>
        </div>
    </div>
</div>
</div>
</div>
    <!-- /.row -->

</div>	
<script>
$(document).ready(function()
{
	$('.delete').click(function(){
		$('#delete_id').val($(this).val());
	});
});

</script>