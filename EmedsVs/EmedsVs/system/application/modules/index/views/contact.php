<section class="complete-content content-footer-space">
     <div class="about-intro-wrap pull-left">
     
     <div class="bread-crumb-wrap ibc-wrap-5">
    	<div class="container">
    <!--Title / Beadcrumb-->
         	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
            	<div class="bread-heading"><h1>Contact Us</h1></div>
                <div class="bread-crumb pull-right">
                <ul>
                <li><a href="<?php echo base_url(); ?>index">Home</a></li>
                <li><a href="javascript:void(0)">Contact Us</a></li>
                </ul>
                </div>
            </div>
         </div>
     </div>
     
    <!--map-->
    <div class="pull-left map-full no-pad">
        <div id="map-canvas-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d188823.4789569755!2d-71.05715705!3d42.31337345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3652d0d3d311b%3A0x787cbf240162e8a0!2sBoston%2C+MA%2C+USA!5e0!3m2!1sen!2sin!4v1430379046291" width="100%" height="390" frameborder="0" style="border:0"></iframe>
        </div>
        <div class="map-shadow"></div>
    </div>
     
    <div class="container">
    
    
    
    <!--About-us top-content-->
    
    <div class="row">
    
    
    <div class="col-xs-12 col-lg-12  col-sm-12 col-md-12">
        
            <!--Contact form-->
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" data-wow-delay="0.5s" data-wow-offset="100">
    
                <form class="contact2-page-form col-lg-8 col-sm-12 col-md-8 col-xs-12 no-pad contact-v2" method="post" id="contactForm" action="contact/mail">
                
                	<div class="form-title-text no-pad">Send us a message</div>
                    
                    <div class="alert col-lg-12 col-sm-12 col-md-12 col-xs-12" id="alert_box" style="display:none">
                        <div id="alert_content"></div>
                    </div>
                                    
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <input type="text" class="contact2-textbox" placeholder="Name*" name="name" id="name" />
                    </div>
                    
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <input type="email" class="contact2-textbox" placeholder="Email*" name="email" id="email"/>
                    </div>
                    
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <input type="text" placeholder="Subject*" class="contact2-textbox" name="subject" id="subject">
                    </div>
                    
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                   	<textarea class="contact2-textarea" placeholder="Message" name="message" id="message"></textarea>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12 text-right" style="margin-top:5px">
                    <?php echo $image; ?>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                    <input type="text" placeholder="Captcha*" class="contact2-textbox" name="captcha" id="captcha">
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <section class="color-7" id="btn-click">
                    <button class="icon-mail btn2-st2 btn-7 btn-7b" data-loading-text="Loading..." type="submit">Submit</button>
                    
                    </section>
                    </div>
                    
                </form>
                
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                	<div class="side-bar-contact">
                    <div class="form-title-text">Contact Information</div>
                    <ul class="contact-page-list">
                    <li>
                        <i class="icon-globe contact-side-icon iside-icon-contact"></i>
                    <span class="contact-side-txt" style="margin-bottom:20px">Emeds<br/>One Boston place<br />Ma, USA 02108</span>
                    </li>
                    <li>
                        <i class="icon-phone2 contact-side-icon"></i>
                    <span class="contact-side-txt">Phone: <span class="iside-bar-cfont">+91 9809 254252
                    </span></span>
                    </li>
                    
                    <li>
                        <i class="icon-mail contact-side-icon"></i>
                        <span class="contact-side-txt">Email: <a href="mailto:contact@imedica.com">admin@emeds.co</a></span>
                    </li>
                    </ul>
                    
                    <div class="form-title-text">Social Media</div>
    
                    <ul class="contact-page-social-list-bottom contact-page-social-list">
                    
                    <li><a href="https://www.facebook.com/Emeds-1669245976648533/" target="_blank">
                    <div class="contact-side-social-wrap"> 
                    <i class="icon-facebook contact-side-social-icon"></i></div></a>
                    </li>
    
                   <li> <a href="https://plus.google.com/u/0/110204291488474632424" target="_blank">
                    <div class="contact-side-social-wrap"> <i class="icon-google-plus contact-side-social-icon"></i></div>
                    </a></li>
    
                    <li><a href="https://twitter.com/emedstemplate" target="_blank">
                    <div class="contact-side-social-wrap"> <i class="icon-social-twitter contact-side-social-icon"></i></div>
                    </a></li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
	</div>
</section>
<script src="<?php echo base_url(); ?>static/index/js/jquery.form.js"></script> 
<script>

$(document).ready(function()
{
	$('#submit').click(function(){
		$('#loading').fadeIn('fast');
		jQuery("html, body").animate({ scrollTop: jQuery("#loading").offset().top }, 1000);
	});

	<!--ajax form posting for Add new Contact starts-->
	$('#contactForm').ajaxForm(function(e) { 
		if(e=='name'){status_alert('Enter Name');$("#"+e).focus();  }
		if(e=='email'){status_alert('Enter Email Address');$("#"+e).focus();  }
		if(e=='captcha'){status_alert('Enter Captcha');$("#"+e).focus();  }
		if(e=='captcha_error'){status_alert('Captcha error');$("#"+e).focus();  }
		if(e=='error'){status_alert('Error');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('Login Sucessful');
			$( "#alert_box" ).last().removeClass( "alert-danger" );
			$( "#alert_box" ).last().addClass( "alert-success" );
			window.location.href = "<?php echo base_url(); ?>index/contact";
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
		jQuery("html, body").animate({ scrollTop: jQuery("#alert_box").offset().top }, 1000);
	}
	<!-- alert box-->
	
});

</script>
