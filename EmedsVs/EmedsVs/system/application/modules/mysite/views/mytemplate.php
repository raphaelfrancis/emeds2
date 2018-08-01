<?php 
session_start();
$_SESSION['username']=$username; 
?>

<html>
<head>
<title><?php echo ($content->site_name)?$content->site_name:'Title'; ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>static/mysite/css/font-awesome.min.css" />

<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>static/mysite/css/edit_preview_navbox.css" />

<script type="text/javascript" src="<?php echo base_url(); ?>static/mysite/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/mysite/js/script.js"></script>

</head>
<body style="margin:0px;padding:0px;overflow:hidden">

<?php if($userid==$content->site_cus_id){ ?>    
<div class="alert alert-info" style="margin-bottom: 0; border: none; text-align:center">
<!--Registered on <?php echo date('d-m-Y',$content->site_created_date); ?>. Your website will expire in <?php echo (int)(15-(time() - $content->site_created_date) / 86400); ?> days --><a href="<?php echo base_url(); ?>index/upgrade/default/<?php echo $username; ?>" style="text-decoration:none; color:#F00">Upgrade</a> | 
  <a href="<?php echo base_url(); ?>index/sites" style="text-decoration:none;">View Mysite</a>      
</div>
<?php } ?>


<div id="ifrmWrapper" class="loading">
	<?php
	$query=mysql_query("select id from emeds_cus_pages where site_id=".$content->site_id." and def_page_id=1");
	$fetch=mysql_fetch_array($query);
	?>
    <iframe src="<?php echo base_url().$content->folder_path; ?>/index.php?username=<?php echo $username; ?>&page_id=<?php echo $fetch['id']; ?>" id="ifrmPreview" frameborder="0"></iframe>
    <div><i class="icon-spinner icon-spin"></i></div>
</div>

<?php if($userid==$content->site_cus_id){ ?>    
<div class="floater preview-floater">
    <div class="buttonLinks save_and_view_bar">
        <a href="<?php echo base_url(); ?>index/edit_site/<?php echo $content->site_id; ?>" class="btn btn-green">Change Site Content</a>
   </div>
</div>
<?php } ?>

</body>
</html>
<style>
.alert-info {
  color: #31708f;
  color: #000000;
  font-size: 13px;
  background-color: #d9edf7;
  border-color: #bce8f1;
  /* height: 15px; */
  box-shadow: 0 0 24px rgba(0,0,0,.35);
  position: relative;
  padding: 10px;
}
</style>
