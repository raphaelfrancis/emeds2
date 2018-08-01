<div id="page-wrapper">
    <div class="page-header">
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo base_url(); ?>admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li class="active">
                   <i class="fa fa-cube"></i> Category
                </li>
            </ol>
        </div>
        <div class="" style="margin-left: 45px;margin-right: 10%;">
            
            <div class="panel panel-default">
        <div class="panel-heading text-right">
        <a href="<?php echo base_url(); ?>admin/category_add" type="button" class="btn btn-success" tabindex="4"><i class="fa fa-plus"></i> Add New Category</a>
        </div>
    <!-- /.panel-heading -->
<?php if($categories){ ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th width="8%"><div align="center">Sl.No</div></th>
            <th width="44%">Product </th>
            <th width="15%"><div align="center">Action</div></th>
        </tr>
    </thead>
    <tbody>
    	<?php $no=0; foreach($categories as $category){ $no++; ?>
        <tr>
            <th><div align="center"><?php echo $no; ?></div></th>
            
            <td>
                <a href="<?php echo base_url(); ?>admin/category_edit/<?php echo $category->id; ?>/default">
                	<?php echo $category->category_name; ?>
                </a>
            </td>
            <td>
                <div align="center">
                    <a data-toggle="tooltip" href="<?php echo base_url(); ?>admin/category_edit/<?php echo $category->id; ?>/default" class="btn btn-default" title="Edit Category"><i class="fa fa-edit"></i></a>
                    <a data-toggle="tooltip" href="<?php echo base_url(); ?>admin/pages/<?php echo $category->id; ?>/default" class="btn btn-default" title="Edit Pages"><i class="fa fa-book"></i></a>
                      <button data-toggle="tooltip" title="Delete" type="button" data-toggle="modal" data-target="#Delete" value="<?php echo $category->id; ?>" class="btn btn-default delete"><i class=" fa fa-trash-o"></i></button>
                </div>
            </td>
        </tr>
        <?php } ?>
      </tbody>
</table>
<?php } else { ?>
<div style="text-align:center; color:#F00; padding:30px">No data found</div>
<?php } ?>

</div>

</div>

</div>
<!-- Modal  Delete-->
<form class="form-horizontal" id="category_delete" method="post" action="<?php echo base_url(); ?>admin/category/delete">
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

<script>
$(document).ready(function()
{
	$('.delete').click(function(){
		$('#delete_id').val($(this).val());
	});
	$('[data-toggle="tooltip"]').tooltip();  
});

</script>


