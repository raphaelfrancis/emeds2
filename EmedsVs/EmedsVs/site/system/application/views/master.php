<!-- <!-- Copyright (C) Xpanzza Web Solutions - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Software Developement Team Expanza Web Solutions <info@xpanzza.com>, Oct 2014 -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Emeds</title>
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
    
    <link href="<?php echo base_url(); ?>static/css/jquery-ui-1.10.3.custom.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>static/css/animate.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>static/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/blue.css" id="style-switch" />
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/rs-plugin/css/settings.min.css" media="screen" />
    <!--[if IE 9]>
    	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
    <![endif]-->    
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/images/fevicon.png">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/slides.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/inline.min.css" />

	<script>var base_url='<?php echo base_url(); ?>';</script>

</head>
<body>
<header>
<div class="header-bg">

    <div class="topbar-info no-pad">                    
        <div class="container">                     
            <div class="social-wrap-head col-md-2 no-pad">
                <ul>
                <li><a href="#"><i class="icon-facebook head-social-icon" id="face-head" data-original-title="" title=""></i></a></li>
                <li><a href="#"><i class="icon-social-twitter head-social-icon" id="tweet-head" data-original-title="" title=""></i></a></li>
                <li><a href="#"><i class="icon-google-plus head-social-icon" id="gplus-head" data-original-title="" title=""></i></a></li>
                <li><a href="#"><i class="icon-linkedin head-social-icon" id="link-head" data-original-title="" title=""></i></a></li>
                <li><a href="#"><i class="icon-rss head-social-icon" id="rss-head" data-original-title="" title=""></i></a></li>
                </ul>
            </div>                            
            <div class="top-info-contact pull-right col-md-6">
            Call Us Today! +123 455 755  | contact@imedica.com  
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

                    <a href="index.html"><div class="logo"></div></a>
                    
                </div>
            

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url(); ?>index"><i class="icon-home"></i>Home</a></li>
                        <li><a href="<?php echo base_url(); ?>index/sites">My Sites</a></li>
                        <li><a href="<?php echo base_url(); ?>index/templates">Templates</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i>Explore<b class="icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="typography.html">Get Inspired</a></li>
                                <li><a href="columns.html">Features</a></li>
                                <li><a href="<?php echo base_url(); ?>index/pricing">Pricing</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file"></i>Subscriptions<b class="icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="testimonials.html">Premium plan</a></li>
                                <li><a href="faq.html">Domains</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="<?php echo base_url(); ?>index/contact">Contact Us</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file"></i>Hi, Nithin<b class="icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="testimonials.html">Account Settings</a></li>
                                <li><a href="faq.html">Billing & Payments</a></li>
                                <li><a href="faq.html">Logout</a></li>
                             </ul>
                        </li>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
                
                
                <div class="hide-mid collapse navbar-collapse option-drop" id="bs-example-navbar-collapse-2">
                  
                  
                  <ul class="nav navbar-nav navbar-right other-op">
                    <li><i class="icon-phone2"></i>+91 9028556688</li>
                    <li><i class="icon-mail"></i><a href="#" class="mail-menu">demo@companyname.com</a></li>
                    
                    <li><i class="icon-globe"></i>
                        <a href="#" class="mail-menu"><i class="icon-facebook"></i></a>
                        <a href="#" class="mail-menu"><i class="icon-google-plus"></i></a>
                        <a href="#" class="mail-menu"><i class="icon-linkedin"></i></a>
                        <a href="#" class="mail-menu"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li><i class="icon-search"></i>
                    <div class="search-wrap"><input type="text" id="search-text" class="search-txt" name="search-text">
                    <button id="searchbt" name="searchbt" class="icon-search search-bt"></button></div>
                    </li>
                    
                  </ul>
                </div><!-- /.navbar-collapse -->
                
                <div class="hide-mid collapse navbar-collapse cart-drop" id="bs-example-navbar-collapse-3">
                
                
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><i class="icon-cart"></i>0 item(s) - $0.00</a></li>
                        <li><a href="#"><i class="icon-user"></i>My Account</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                
                
                
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
                <div class="col-xs-12 col-sm-6 col-md-3 foot-widget">
                <a href="#"><div class="foot-logo col-xs-12 no-pad"></div></a>
                
                <address class="foot-address">
                    <div class="col-xs-12 no-pad"><i class="icon-globe address-icons"></i>iMedica Clinic <br />123 Fifth Avenue <br />New York, NY 10160</div>
                    <div class="col-xs-12 no-pad"><i class="icon-phone2 address-icons"></i>+123 455 755</div>
                    <div class="col-xs-12 no-pad"><i class="icon-file address-icons"></i>+123 555 755</div>
                    <div class="col-xs-12 no-pad"><i class="icon-mail address-icons"></i>contact@imedica.com</div>
                </address>
                </div>
                
                <!--Foot widget-->
                <div class="col-xs-12 col-sm-6 col-md-3 recent-post-foot foot-widget">
                    <div class="foot-widget-title">Recent Posts</div>
                    <ul>
                        <li><a href="#">Consecte tur adipiscing elit ut eunt<br /><span class="event-date">3 days ago</span></a></li>
                        <li><a href="#">Fusce vel tempus augue nunc<br /><span class="event-date">5 days ago</span></a></li>
                        <li><a href="#">Lorem nulla, vitae eleifend leo tincidunt<br /><span class="event-date">7 days ago</span></a></li>
                    </ul>
                </div>
                
                 <!--Foot widget-->
                <div class="col-xs-12 col-sm-6 col-md-3 recent-tweet-foot foot-widget">
                    <div class="foot-widget-title">Recent News</div>
                    <ul>
                        <li>Integer iaculis egestas odio. eget: <b>t.co/RTSoououIdg</b><br /><span class="event-date">7 days ago</span></li>
                        <li>Integer iaculis egestas odio. eget: <b>t.co/RTSoououIdg</b><br /><span class="event-date">7 days ago</span></li>
                    </ul>
                </div>
                
                <!--Foot widget-->
                <div class="col-xs-12 col-sm-6 col-md-3 foot-widget">
                    <div class="foot-widget-title">newsletter</div>
                    <p>Ipsum dolor sit amet, teft consecte tur.</p>
                    <div class="news-subscribe"><input type="text" class="news-tb" placeholder="Email Address" /><button class="news-button">Subscribe</button></div>
                    <div class="foot-widget-title">social media</div>
                    <div class="social-wrap">
                        <ul>
                        <li><a href="#"><i class="icon-facebook foot-social-icon" id="face-foot" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a></li>
                        <li><a href="#"><i class="icon-social-twitter foot-social-icon" id="tweet-foot" data-toggle="tooltip" data-placement="bottom" title="Twitter"></i></a></li>
                        <li><a href="#"><i class="icon-google-plus foot-social-icon" id="gplus-foot" data-toggle="tooltip" data-placement="bottom" title="Google+"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin foot-social-icon" id="link-foot" data-toggle="tooltip" data-placement="bottom" title="Linked in"></i></a></li>
                        <li><a href="#"><i class="icon-rss foot-social-icon" id="rss-foot" data-toggle="tooltip" data-placement="bottom" title="RSS"></i></a></li>
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
            <p class="col-xs-12 col-md-5 no-pad">Copyright 2014 iMedica | All Rights Reserved | Designed by RTistic</p>
            <ul class="foot-menu col-xs-12 col-md-7 no-pad">
            <li><a href="about-us-1.html">Pages</a></li>    
            <li><a href="gallery-3-columns.html">Gallery</a></li>
            <li><a href="blog-masonry-full-width.html">Blog</a></li>    
            <li><a href="#">Features</a></li>    
            <li><a href="contact-2.html">Contact</a></li>    
            <li><a href="index.html">home</a></li>                           
            
            </ul>
            </div>
        </div>
    </div> 
    </div>
    
</div>
    

</body>
</html>
<!--JS Inclution-->
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery-ui-1.10.3.custom.min.js"></script>  
<script type="text/javascript" src="<?php echo base_url(); ?>static/bootstrap-new/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.scrollUp.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.sticky.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.flexisel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.imedica.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/custom-imedicajs.min.js"></script>
<script type='text/javascript'>
    $(window).load(function(){
        $('#loader-overlay').fadeOut(900);
        $("html").css("overflow","visible");
    });
</script>
