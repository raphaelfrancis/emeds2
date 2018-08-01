<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Emeds | Edit Site</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="<?php echo base_url(); ?>static/index/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>static/index/css/editsite.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/index/images/fevicon.png">
</head>

<body>
    	
    <div class="wrapper" style="max-width:600px !important">
        <div id="main">
	
        <!-- Form -->
        <form method="post" id="update-form" action="<?php echo base_url(); ?>index/edit_site/<?php echo $content->site_username; ?>/update" enctype="multipart/form-data">
            <h3>Edit Your Site : <a href="<?php echo base_url(); ?>mysite/<?php echo $content->site_username; ?>" target="_blank">
            emeds.co/<?php echo $content->site_username; ?></a></h3>
            <div id="alert_box" class="error"><span id="alert_content"></span></div>
			<div>
				<label>
					<span>Sitename :</span>
					<input name="site_name" id="site_name" type="text" value="<?php echo $content->site_name; ?>">
                    <input name="site_username" id="site_username" type="hidden" value="<?php echo $content->site_username; ?>">
				</label>
			</div>
			
			<div>
				<label>
					<span>Email :</span>
					<input name="site_email" id="site_email" type="email" required placeholder="Email ID" value="<?php echo $content->site_email; ?>">
				</label>
			</div>
            
            <div>
				<label>
					<span>Phone No :</span>
					<input name="site_phone" id="site_phone" type="text" required placeholder="Phone No" value="<?php echo $content->site_phone; ?>">
				</label>
			</div>
			
			
			
			<div>
				<label>
					<span>Select Your Logo ( 180 px *50 px ) :</span>
					<div class="left_content"><input name="userfile" id="userfile" type="file" tabindex="2" ></div>
					<div class="right_content">
                    <?php if($content->site_logo){ ?>
                    <img src="<?php echo base_url(); ?>uploads/<?php echo $content->site_logo; ?>"/>
                    <?php } else { ?>
                    <img src="<?php echo base_url(); ?>static/templates/design1/images/logo.png"/>
                    <?php } ?>
                    </div>
                    <div style="clear:both"></div>
				</label>
			</div>
            
            <?php foreach($pages as $page){ ?>
            <div class="box_main">
                <div class="left_content"><?php echo $page->page_name; ?></div>
                <div class="right_content">
                	<?php if($page->def_page_id!=1){ ?>
                    <div class="button_div"><a href="<?php echo base_url(); ?>index/edit_site/<?php echo $content->site_username; ?>/delete/<?php echo $page->id; ?>"  onclick="return confirm('Are you sure you want to Remove?');">
                  Delete</a></div>  
                    <?php } ?>    
                                  
                    <div class="button_div">
                    
					

                    
                    <?php 
					if($page->def_page_id==1){ $val='edit_home'; } 
					if($page->def_page_id==2){ $val='edit_about'; } 
					if($page->def_page_id==3){ $val='edit_service'; } 
					if($page->def_page_id==4){ $val='edit_gallery'; } 
					if($page->def_page_id==5){ $val='edit_contact'; } 
					?> 
                    
                    <a href="<?php echo base_url(); ?>index/<?php echo $val; ?>/<?php echo $page->id; ?>" >&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a>
                    </div>
                </div>
                <div style="clear:both"></div>
            </div>
            
            <?php } ?>
            
			<div style="text-align:right; width:45%; float: left">
				<button name="add_new" id="add_new" type="button">Add New Page</button>
			</div>
			
			<div style="text-align:right; width:45%; float:right">
				<button name="submit" type="submit" id="contact-submit">Update</button>
			</div>
            <!-- /Form -->
            <div style="clear:both"></div>
            
        </form>
        
		<form method="post" id="add-form" action="<?php echo base_url(); ?>index/edit_site/<?php echo $content->site_username; ?>/add_page">	
            <div style="width:100%; display:none; margin-top:10px" id="add_new_content"> 
                <label>
                    <span>Page Category :</span>
                </label>
            	<?php foreach($def_pages as $def_page){ ?>
                <?php if($def_page->def_page_id!=1){ ?>
                <div style="width:25%; float:left">
                <label><input type="radio" name="def_page_id" value="<?php echo $def_page->def_page_id; ?>"> <?php echo $def_page->def_page_name; ?></label>
                </div>
                <?php } } ?>
                <div style="clear:both"></div>
				<label>
					<span>Page Name :</span>
					<input placeholder="Page Name" name="page_name" id="page_name" type="text" >
				</label>
                <div style="text-align:right; width:45%; float:right">
                    <input name="site_username" id="site_username" type="hidden" value="<?php echo $content->site_username; ?>">
                    <button name="submit" type="submit" id="contact-submit">Create</button>
                </div>

			</div>              
            <div style="clear:both"></div>
		</form>
		
        </div>
	</div>

	
</body>
</html>
<script src="<?php echo base_url(); ?>static/index/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>static/index/js/jquery.form.js"></script> 


<script>
$(document).ready(function()
{
	<!--ajax form posting for Add new Contact starts-->
	$('#update-form').ajaxForm(function(e) {
		if(e=='site_name'){status_alert('Enter Site Name');$("#"+e).focus();  }
		if(e=='site_email'){status_alert('Enter Site Email');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('Updated Sucessful');
			window.location.href = "<?php echo base_url(); ?>index/edit_site/<?php echo $content->site_username; ?>";
		}
		
	});
	<!--ajax form posting for Add new Contact Ends-->
	<!--ajax form posting for Add new Contact starts-->
	$('#add-form').ajaxForm(function(e) {
		if(e=='page'){status_alert('Select Page Type');$("#"+e).focus();  }
		if(e=='page_name'){status_alert('Enter Page Name');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('Added Sucessful');
			window.location.href = "<?php echo base_url(); ?>index/edit_site/<?php echo $content->site_username; ?>";
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
	
	$('#add_new').click(function(){
		
		$('#add_new_content').fadeIn('slow');
		})	
});
</script>
<style type="text/css">
	#alert_box {
		color:#555;
		border-radius:5px;
		font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px;
		padding:10px 10px;
		margin:10px 0;
		display:none
	}
	#alert_box span {
		font-weight:bold;
		text-transform:uppercase;
	}
	.error {
		background:#ffecec ;
		border:1px solid #f5aca6;
	}
</style>