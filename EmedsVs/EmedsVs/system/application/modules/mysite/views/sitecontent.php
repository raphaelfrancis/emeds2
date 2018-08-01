<?php 
session_start();
$_SESSION['colour']=$content->site_colour_code; 
$_SESSION['username']=$username; 
?>

<html>
<head>
<title><?php echo $content->site_name; ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>static/mysite/css/font-awesome.min.css" />

<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>static/mysite/css/edit_preview_navbox.css" />

<script type="text/javascript" src="<?php echo base_url(); ?>static/mysite/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/mysite/js/script.js"></script>

</head>
<body style="margin:0px;padding:0px;overflow:hidden">
    
<div class="alert alert-info" style="margin-bottom: 0; border: none; text-align:center">
	
        Registered on <?php echo date('d-m-Y',$content->site_created_date); ?>. Your website will expire in <?php echo (int)(15-(time() - $content->site_created_date) / 86400); ?> days <a href="<?php echo base_url(); ?>index/pricing" style="text-decoration:none; color:#F00">Upgrade</a>        
    
</div>


<div id="ifrmWrapper" class="loading">
    <iframe src="<?php echo base_url().$content->folder_path; ?>/index.php?id=1" id="ifrmPreview" frameborder="0"></iframe>
    <div><i class="icon-spinner icon-spin"></i></div>
</div>

<?php if($userid){?>
<div class="floater preview-floater">
    <div class="buttonLinks save_and_view_bar">
        <a class="btn btn-green">Change Site Content</a>
        <a class="btn btn-blue" href="#">Edit this page</a>
        <a class="btn btn-green">Add a page</a>
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
