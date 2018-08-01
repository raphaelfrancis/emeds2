<?php session_start(); $_SESSION["colour"]=$this->session->userdata('colour'); ?>  
<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <title>Emeds Theme</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/index/css/blue.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/index/css/template_viewer.css"/>

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>static/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/index/images/favicon.png">

    
</head>

<body class="full-screen-preview">
  <div id="container" class="template_viewer preview__header">
    <div id="header">
        <div class="navigation">
            <div id="emedsLogo">
                <a href="<?php echo base_url(); ?>index">emeds Press</a>
            </div>
            <div id="template-mode-toggle">
                <div class="view-mode-toggle-button view-mode-toggle-button-desktop selected" data="desktop" title="Desktop view"></div>
                <a href="<?php echo base_url(); ?>index/mobile/<?php echo $template->temp_id; ?>">
                <div class="view-mode-toggle-button view-mode-toggle-button-mobile" data="mobile" title="Mobile view"></div>
                </a>
            </div>
                        
            <!-- End of .templateDetails-->
            <div class="templatesButtons">
                <span id="templatesColour">
                    <form id="preview" action="<?php echo base_url(); ?>index/desktop/<?php echo $template->temp_id; ?>" method="post"> 
                    Change Color : <input class="color" value="<?php echo ($this->session->userdata('colour'))?$this->session->userdata('colour'):'107FC9'; ?>" name="colour_code">
                    </form>
                </span>
                <span  id="preview-button" style="margin-right:10px">
                <a href="#" class="inner-page-butt-blue medium-but">
                    <i class="fa fa-cogs inner-page-butt-blue-icon"></i>Preview Changes
                </a>
                </span>
                
                <span id="editButton">
                <?php if(!$this->session->userdata('userid')){ ?>
                	<a  href="<?php echo base_url(); ?>index/signin" class="inner-page-butt-blue medium-but">
                    	<i class="fa fa-cogs inner-page-butt-blue-icon"></i>Use this Design
                    </a>
                	<?php $url=base_url().'index/sitename/default/'.$template->temp_id; $this->session->set_userdata('url', $url ); ?>
				<?php } else { ?>
                	<a href="<?php echo base_url(); ?>index/sitename/default/<?php echo $template->temp_id; ?>" class="inner-page-butt-blue medium-but">
                    	<i class="fa fa-cogs inner-page-butt-blue-icon"></i>Use this Design
                	</a>
                <?php } ?>
                </span>
                <span class="priceTypeWrapper"> Price: <span id="priceType">Free</span></span>
                <a href="<?php echo base_url(); ?>index" style="float:left; margin: 10px; width: 34px;"><img src="<?php echo base_url(); ?>static/index/images/html.png" style="width:100%"/></a>

                <!-- end of .socialButtons -->
            </div>
        </div>
        <!-- End of .navigation-->
    </div>
    <!-- End of #Header-->
    <div id="headerShadows">
        <div class="rightShadow"></div>
        <div class="leftShadow"></div>
    </div>
    <!-- End of #HeaderShadows-->
    <div class="contentWrapper">
        <div class="preview-tab preview-tab-desktop">
        <iframe src="<?php echo base_url().$template->folder_path; ?>" width="100%"></iframe>
        </div>
        <!--</div>--><!-- End of .content-->
    </div>
</div>

</body>

</html>


<script src="<?php echo base_url(); ?>static/index/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>static/index/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>static/index/js/jquery.form.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/index/jscolor/jscolor.js"></script>

<script>
      //function to fix height of iframe!
      var calcHeight = function() {
        var headerDimensions = $('.preview__header').height();
        $('.full-screen-preview__frame').height($(window).height() - headerDimensions);
      }

      $(document).ready(function() {
        calcHeight();
      });

      $(window).resize(function() {
        calcHeight();
      }).load(function() {
        calcHeight();
      });
</script>
<script>

var form = document.getElementById("preview");

document.getElementById("preview-button").addEventListener("click", function () {
  form.submit();
});

</script>

