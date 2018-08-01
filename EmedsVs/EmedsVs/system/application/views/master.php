<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Emeds">

    <title>Emeds2</title>
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
    
    <link href="<?php echo base_url(); ?>static/index/css/jquery-ui-1.10.3.custom.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>static/index/css/animate.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>static/index/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/index/css/blue.css" id="style-switch" />
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/index/rs-plugin/css/settings.min.css" media="screen" />
    <!--[if IE 9]>
    	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
    <![endif]-->    
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/index/images/favicon.png">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/index/css/slides.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/index/css/inline.min.css" />

	<script>var base_url='<?php echo base_url(); ?>';</script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/index/js/jquery.min.js"></script>

</head>
<body> 
<div id="loader-overlay"><img src="<?php echo base_url(); ?>static/index/images/loader.gif" alt="Loading" /></div>
<header>
<div class="header-bg">
<?php
if($this->session->userdata('userid')){

if($this->session->userdata('status')==0){ ?>
<div class="bs-example">
    <div class="alert alert-danger alert-error text-center">
         <a href="#" class="close" data-dismiss="alert">×</a>
         <i class="fa fa-exclamation-triangle icons pull-left"></i> Email not verified. Please <a href="<?php echo base_url(); ?>index/verify_now_email">Verify Now</a>
    </div>
</div>
<?php } } ?>

    <div class="topbar-info no-pad">                    
        <div class="container">                     
            <div class="social-wrap-head col-md-2 no-pad">
                <ul>
                <li><a href="https://www.facebook.com/Emeds-1669245976648533/" target="_blank"><i class="icon-facebook head-social-icon" id="face-head" data-original-title="" title=""></i></a></li>
                <li><a href="https://twitter.com/emedstemplate" target="_blank"><i class="icon-social-twitter head-social-icon" id="tweet-head" data-original-title="" title=""></i></a></li>
                <li><a href="https://plus.google.com/u/0/107012660179638475864/posts" target="_blank" ><i class="icon-google-plus head-social-icon" id="gplus-head" data-original-title="" title=""></i></a></li>
   
                </ul>
            </div>                            
            <div class="top-info-contact pull-right col-md-6">
            Call Us Today! +91 9809 254252 | admin@emeds.co 
            <?php if(!$this->session->userdata('userid')){?><a href="<?php echo base_url(); ?>index/signin" class="myButton">Sign in</a><?php } ?>

            </div>                      
        </div>
    </div><!--Topbar-info-close-->
        
    <div id="headerstic">
    
    <div class=" top-bar container">
        <div class="row">
            <nav class="navbar navbar-default" role="navigation">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
          
                    <button type="button" class="navbar-toggle icon-list-ul" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    </button>
                    <button type="button" class="navbar-toggle icon-rocket" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    </button>

                    <a href="<?php echo base_url(); ?>index"><div class="logo"></div></a>
                    
                </div>
            

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url(); ?>index"><i class="icon-home"></i>Home</a></li>
                        <li><a href="<?php echo base_url(); ?>index/sites">My Sites</a></li>
                        <li><a href="<?php echo base_url(); ?>index/templates">Templates</a></li>
                        <li><a href="<?php echo base_url(); ?>index/services">Services</a></li>
                       
                        <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i>Subscriptions<b class="icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>index/pricing">Pricing Plans</a></li>
                                <li><a href="<?php echo base_url(); ?>index/support">Support</a></li>
                            </ul>
                        </li>-->
                        
                        <li><a href="<?php echo base_url(); ?>index/contact">Contact Us</a></li>
                        <?php if($this->session->userdata('userid')){?> 
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        	Hi, <?php echo $this->session->userdata('name'); ?><b class="icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>index/account_settings">Update Profile</a></li>
                                <li><a href="<?php echo base_url(); ?>index/reminders">Reminders</a></li>
                                <li><a href="<?php echo base_url(); ?>index/change_password">Change Password</a></li>
                                <li><a href="<?php echo base_url(); ?>index/logout">Logout</a></li>
                             </ul>
                        </li>
                        <?php } ?>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
                
                
                <div class="hide-mid collapse navbar-collapse option-drop" id="bs-example-navbar-collapse-2">
                  
                  
                  <ul class="nav navbar-nav navbar-right other-op">
                    <li><i class="icon-phone2"></i>+91 9809 254252</li>
                    <li><i class="icon-mail"></i><a href="#" class="mail-menu">admin@emeds.co</a></li>
                    
                    <li><i class="icon-globe"></i>
                        <a href="#" class="mail-menu"><i class="icon-facebook"></i></a>
                        <a href="#" class="mail-menu"><i class="icon-google-plus"></i></a>
                        <a href="#" class="mail-menu"><i class="icon-linkedin"></i></a>
                        <a href="#" class="mail-menu"><i class="icon-social-twitter"></i></a>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
                
                <!-- /.navbar-collapse -->
                
                
                
              </div><!-- /.container-fluid -->
            </nav>
        </div>    
    </div><!--Topbar End-->
    </div>
        
</div>
</header>

<?php echo $contents; ?>

<div class="complete-footer">
    <footer id="footer">
    
        <div class="container">
            <div class="row">
                <!--Foot widget-->
                <div class="col-xs-12 col-sm-6 col-md-4 foot-widget">
                <a href="#"><div class="foot-logo col-xs-12 no-pad"></div></a>
                <p>Promote your business, showcase your art, set up an online store or just test out new ideas. Emeds is a website builder that has
everything you need to build a fully-personalized, high-quality free website. Browse our collection of beautiful website
templates. You'll find loads of stunning designs, ready to be customized.</p>
                	
                </div>
                
                <!--Foot widget-->
                <div class="col-xs-12 col-sm-6 col-md-4 foot-widget" style="padding-left:8%">
                    <div class="foot-widget-title">Contact Us</div>
                
                <address class="foot-address">
                    <div class="col-xs-12 no-pad"><i class="icon-globe address-icons"></i>Emeds <br />One Boston place<br />Ma, USA 02108</div>
                    <div class="col-xs-12 no-pad"><i class="icon-phone2 address-icons"></i>+91 9809 254252</div>
                    <div class="col-xs-12 no-pad"><i class="icon-mail address-icons"></i>info@emeds.co</div>
                </address>
                </div>
                
                <!--Foot widget-->
                <div class="col-xs-12 col-sm-6 col-md-4 foot-widget">
                    <!--<div class="foot-widget-title">newsletter</div>
                    <div class="news-subscribe"><input type="text" class="news-tb" placeholder="Email Address" /><button class="news-button">Subscribe</button></div>-->
                    <div class="foot-widget-title">social media</div>
                    <div class="social-wrap">
                        <ul>
                        <li><a href="https://www.facebook.com/Emeds-1669245976648533" target="_blank" ><i class="icon-facebook foot-social-icon" id="face-foot" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a></li>
                        <li><a href="https://twitter.com/emedstemplate" target="_blank"><i class="icon-social-twitter foot-social-icon" id="tweet-foot" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a></li>
                        <li><a href="https://plus.google.com/u/3/107012660179638475864/posts" target="_blank"><i class="icon-google-plus foot-social-icon" id="gplus-foot" data-toggle="tooltip" data-placement="bottom" title="Google+"></i></a></li>


                        </ul>
                    </div>
                </div>
                
            </div>
         </div>       
         
    </footer>
    
    <div class="bottom-footer">
    <div class="container">
    
        <div class="row">
            <!--Foot widget-->
            <div class="col-xs-12 col-sm-12 col-md-12 foot-widget-bottom">
            <p class="col-xs-12 col-md-5 no-pad">Copyright 2015 Emeds | All Rights Reserved</p>
            <ul class="foot-menu col-xs-12 col-md-7 no-pad">
            <li><a href="<?php echo base_url(); ?>index/contact">Conatct Us</a></li>    
            <li><a href="<?php echo base_url(); ?>index/templates">Templates</a></li>    
            <li><a href="<?php echo base_url(); ?>index/sites">My Sites</a></li>    
            <li><a href="<?php echo base_url(); ?>index">home</a></li>                           
            
            </ul>
            </div>
        </div>
    </div> 
    </div>
    
</div>
    

</body>
</html>
<!--JS Inclution-->
<script type="text/javascript" src="<?php echo base_url(); ?>static/index/js/jquery-ui-1.10.3.custom.min.js"></script>  
<script type="text/javascript" src="<?php echo base_url(); ?>static/index/bootstrap-new/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/index/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/index/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/index/js/jquery.scrollUp.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/index/js/jquery.sticky.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/index/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/index/js/jquery.flexisel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/index/js/jquery.emeds.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/index/js/custom-emedsjs.min.js"></script>

<script type='text/javascript'>
    $(window).load(function(){
        $('#loader-overlay').fadeOut(900);
        $("html").css("overflow","visible");
    });
	
$(document).ready(function()
{
	$('.delete').click(function(){
		var res = $(this).val().split(",");
		$('#delete_id').val(res[0]);
		$('#delete_data').html(res[1]);
	});
	$('.temp').click(function(){
		$('#delete_id1').val($(this).val());
	});
});


</script>

<style>
.myButton{
  padding: 0px;
  width: 70px;
  height: 24px;
  font-size: 12px;
  margin-top: 11px;
  margin-left: 16px;
  border-radius: 4px;
  line-height: 23px;
  float: right;
  display: inline-block;
  text-align: center;
  border: none;
  padding: 0px;
  background-repeat: no-repeat;
  color: #FFF;
  cursor: pointer;
  border: none;
  outline: none;
  font-weight: normal;
  background: none;
  background-color: white;
  color: #252525;
  border: solid 1px #939393;
  margin-top: 6px;
  text-decoration:none
}
.myButton:hover{background-color:rgba(0, 0, 0, 0.44);
	color:#FFF;
	text-decoration:none
}
</style>
