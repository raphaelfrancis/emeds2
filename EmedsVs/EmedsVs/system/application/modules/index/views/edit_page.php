<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Emeds | Edit Site</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="<?php echo base_url(); ?>static/index/css/editpage.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/index/images/fevicon.png">
    <script type="text/javascript" src="<?php echo base_url(); ?>static/index/tinymce/tinymce.min.js"></script>
    <script>
tinymce.init({
    selector: "textarea#page_content",
    theme: "modern",
    width: 845,
    height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
 }); 
</script>

</head>

<body>
    	
    <div class="wrapper" style="max-width:900px !important">
        <div id="main">
	
        <!-- Form -->
    <form method="post" id="update-form" action="<?php echo base_url(); ?>index/edit_page/<?php echo $content->id; ?>/update" enctype="multipart/form-data">
            <h3>Edit Your Page</h3>
            <div id="alert_box" class="error"><span id="alert_content"></span></div>
            
			<div>
				<label>
					<span>Page Name :</span>
					<input name="page_name" id="page_name" type="text" value="<?php echo $content->site_username; ?>">
				</label>
			</div>
			
			<div>
				<label>
					<span>Content :</span>
                    <textarea id="page_content" name="page_content"  style="width:100%"><?php echo $content->page_content; ?></textarea>
				</label>
			</div>
			
			
			
			
            
            <div style="text-align:right; width:45%; float:right">
				<button name="submit" type="submit" id="contact-submit">Update</button>
			</div>
            <!-- /Form -->
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
		if(e=='page_name'){status_alert('Enter Page Name');$("#"+e).focus();  }
		if(e=='page_content'){status_alert('Enter Content');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('Updated Sucessful');
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