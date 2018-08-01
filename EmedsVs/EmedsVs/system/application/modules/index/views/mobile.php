<?php session_start(); $_SESSION["colour"]=$this->session->userdata('colour'); ?>  
<!DOCTYPE HTML>
<!--[if gt IE 8]> <html class="ie9" lang="en"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <title>Emeds Theme</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/index/css/blue.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/index/css/template_viewer.css"/>

    <script type="text/javascript" src="<?php echo base_url(); ?>static/index/jscolor/jscolor.js"></script>

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>static/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/index/images/favicon.png">

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>static/admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>static/admin/js/bootstrap.min.js"></script>
    
</head>
<body style="overflow:hidden">
    
    
<div id="container" class="template_viewer">
    <div id="header">
        <div class="navigation">
            <div id="emedsLogo">
                <a href="<?php echo base_url(); ?>index">emeds Press</a>
            </div>
            <div id="template-mode-toggle">
                <a href="<?php echo base_url(); ?>index/desktop/<?php echo $template->temp_id; ?>">
                <div class="view-mode-toggle-button view-mode-toggle-button-desktop" data="desktop" title="Desktop view"></div>
                </a>
                <div class="view-mode-toggle-button view-mode-toggle-button-mobile selected" data="mobile" title="Mobile view"></div>
            </div>
                        
            <!-- End of .templateDetails-->
            <div class="templatesButtons">
            	
                <span id="templatesColour">
                    <form id="preview" action="<?php echo base_url(); ?>index/desktop/<?php echo $template->temp_id; ?>" method="post"> 
                    Click here: <input class="color" value="<?php echo ($this->session->userdata('colour'))?$this->session->userdata('colour'):'107FC9'; ?>" name="colour_code">
                    </form>
                </span>
                <span  id="preview-button" style="margin-right:10px">
                <a href="#" class="inner-page-butt-blue medium-but">
                    <i class="fa fa-cogs inner-page-butt-blue-icon"></i>Preview Changes
                </a>
                </span>
                
                <span id="editButton">
                <?php if(!$this->session->userdata('userid')){ ?>
                <a data-toggle="modal" data-target="#add_page" class="inner-page-butt-blue medium-but"><i class="fa fa-cogs inner-page-butt-blue-icon"></i>Use this Design</a>
				<?php } else { ?>
                <a href="<?php echo base_url(); ?>index/sitename/default/<?php echo $template->temp_id; ?>" class="inner-page-butt-blue medium-but">
                    <i class="fa fa-cogs inner-page-butt-blue-icon"></i>Use this Design
                </a>
                <?php } ?>
                </span>
                <span class="priceTypeWrapper"> Price: <span id="priceType">Free</span></span>
                <a href="<?php echo base_url(); ?>index" style="float:left; margin: 10px; width: 34px;"><img src="<?php echo base_url(); ?>static/index/images/html.png" style="width:100%"/></a>

            </div>
        </div>
    </div>
    
    <div class="contentWrapper">
                <div class="preview-tab preview-tab-mobile">
                <div class="mobile-view-container">
                    <iframe src="<?php echo base_url().'/'.$template->folder_path; ?>" scrolling="yes"></iframe>
                </div>
                
            </div>
        
        <!--</div>--><!-- End of .content-->
    </div>
    <!-- End of .contentWrapper-->



</div>
        
<form method="post" id="add-form" action="<?php echo base_url(); ?>index/signin/login">
<div class="modal fade" id="add_page" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Sign in</h4>
            </div>
            <div class="modal-body">
            <div class="alert" style="display:none" id="alert_box">
                <div id="alert_content"></div>
            </div>
            <div class="col-md-12">
                        <div class="form-group">
                        	<label class="control-label">Email :</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off"/>
                            <div id="msgbx_err" class="alert-box error"></div>
                            <div id="msgbx_success" class="alert-box success"></div>
                
                        </div>
                        <div class="form-group">
                        	<label class="control-label">Password :</label>
                            <input type="password" class="form-control" name="pword" id="pword" placeholder="Password" autocomplete="off"/>
                        </div>
                        </div>
    
            
            
            </div>
            <div style="clear:both"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit1" id="submit" class="btn btn-primary">Login</button>
            </div>
            
        </div><!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div>
</form>  
        
</body>
</html>
<script src="<?php echo base_url(); ?>static/index/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>static/index/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>static/index/js/jquery.form.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/index/jscolor/jscolor.js"></script>


<script>

var form = document.getElementById("preview");

document.getElementById("preview-button").addEventListener("click", function () {
  form.submit();
});

$(function() {
	$('#email').change(function() {
		var name = $('#email').val();
		$.post('<?php echo base_url(); ?>index/chk_usr', {usr_name: name}, function(d) {
			if (d == 1)
			{
				$('#msgbx_err').css('display', 'none');
				$('#msgbx_success').css('display', 'none');
			}
			else if (d == 2)
			{
				$('#msgbx_success').css('display', 'none');
				$('#msgbx_err').css('display', 'block');
				$('#msgbx_err').html('Not a valid email address');
			}
			else
			{
				$('#msgbx_success').css('display', 'none');
				$('#msgbx_err').css('display', 'block');
				$('#msgbx_err').html("Sorry, emeds doesn't recognize that email");
			}
		});
	});
});



$(document).ready(function()
{
	$('#submit1').click(function(){
		$('#loading').fadeIn('fast');
		jQuery("html, body").animate({ scrollTop: jQuery("#loading").offset().top }, 1000);
	});

	<!--ajax form posting for Add new Contact starts-->
	$('#add-form').ajaxForm(function(e) {
		if(e=='email'){status_alert('Enter Email Address');$("#"+e).focus();  }
		if(e=='pword'){status_alert('Enter Password');$("#"+e).focus();  }
		if(e=='error'){status_alert('Username or Password Incorrect');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('Login Sucessful');
			$( "#alert_box" ).last().removeClass( "alert-danger" );
			$( "#alert_box" ).last().addClass( "alert-success" );
			window.location.href = "<?php echo base_url(); ?>index/sitename/default/<?php echo $template->temp_id; ?>";
		}
		
	});
	<!--ajax form posting for Add new Contact Ends-->
	
	<!-- alert box-->
	function status_alert(e)
	{
		$( "#alert_box" ).last().addClass( "alert-danger" );
		$('#loading').fadeOut('fast');
		$('#alert_box').fadeIn('slow');
		$('#alert_content').html(e);
		$("#alert_box").css({left:($(window).width()/2)- ($("#alert_box").width()/2) });
		jQuery("html, body").animate({ scrollTop: jQuery("#alert_box").offset().top }, 1000);
	}
	<!-- alert box-->
	
});
</script>
<style type="text/css">
            ::selection{ background-color: #1C84C6; color: white; } ::moz-selection{ background-color: #1C84C6; color: white; } ::webkit-selection{ background-color: #1C84C6; color: white; } 
            a { color: #003399; background-color: transparent; font-weight: normal; } 
            h1 { color: #444; background-color: transparent; border-bottom: 1px solid #D0D0D0; font-size: 19px; font-weight: normal; margin: 0 0 14px 0; padding: 14px 15px 10px 15px; } 
            .alert-box { color:#555; border-radius:5px; font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px; padding:5px 5px; margin:10px 0; text-align:center } 
            .alert-box span { font-weight:bold; text-transform:uppercase; } 
            .error { background:#ffecec; border:1px solid #f5aca6; } 
            .success { background:#e9ffd9; border:1px solid #a6ca8a; } 
            #msgbx_err{ display: none; } 
            #msgbx_success{ display: none; } 
 
</style>


