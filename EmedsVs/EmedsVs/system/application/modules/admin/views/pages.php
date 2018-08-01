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
        <div class="panel-heading">
            <h3> Edit Pages</h3>
        </div>
    <!-- /.panel-heading -->
<?php if($pages){ ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th width="8%"><div align="center">Sl.No</div></th>
            <th width="44%">Pagename </th>
            <th width="15%"><div align="center">Action</div></th>
        </tr>
    </thead>
    <tbody>
    	<?php $i=0; foreach($pages as $page){ $i++; ?>
        <tr>
            <th><div align="center"><?php echo $i; ?></div></th>
            
            <td>
                <a href="<?php echo base_url(); ?>admin/">
                	<?php echo $page->page_name; ?>
                </a>
            </td>
            <td>
                <div align="center">
                	<?php 
					if($page->def_page_id==1){ $val='edit_home'; } 
					if($page->def_page_id==2){ $val='edit_single'; } 
					if($page->def_page_id==3){ $val='edit_multiple'; } 
					if($page->def_page_id==4){ $val='edit_gallery'; } 
					if($page->def_page_id==5){ $val='edit_contact';  
					?>
                    <a href="<?php echo base_url(); ?>admin/<?php echo $val; ?>/<?php echo $page->id; ?>" class="btn btn-default" title="Edit"><i class="fa fa-edit"></i></a>
                    <?php
					}
					else
					{
					?>
                    <a href="<?php echo base_url(); ?>admin/<?php echo $val; ?>/<?php echo $page->id; ?>/default/1" class="btn btn-default" title="Edit"><i class="fa fa-edit"></i></a>
                	<?php 
					}
					?>                                
                                
                </div>
            </td>
        </tr>
        <?php } ?>
      </tbody>
</table>
<?php } else { ?>
<div style="text-align:center; color:#F00; padding:30px">No data found</div>
<?php } ?>
<div class="panel-footer text-right">
            <a href="<?php echo base_url(); ?>admin/category" class="btn btn-default">Back</a>
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
});

</script>


