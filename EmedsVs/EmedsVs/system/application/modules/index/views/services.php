<section class="complete-content content-footer-space"> 

     <div class="about-intro-wrap pull-left">
     
     <div class="bread-crumb-wrap ibc-wrap-2">
    	<div class="container">
    <!--Title / Beadcrumb-->
         	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
            	<div class="bread-heading"><h1>Services</h1></div>
                <div class="bread-crumb pull-right">
                <ul>
                <li><a href="<?php echo base_url(); ?>index">Home</a></li>
                <li><a href="javascript:void(0)">Services</a></li>
                </ul>
                </div>
            </div>
         </div>
     </div>
     
         <div class="container">


         	
            
            <!--About-us top-content-->

          <div class="row">

            
<div class="services-bottom-wrap">
        <div class="container">

          <div class="row">
        	    
                
                <!--bottom-service-box-->
                <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4 bottom-service-box no-pad wow fadeInDown animated" data-wow-delay="1.5s" data-wow-offset="200">
                <div class="bottom-service-title">Website Design & Development</div>
                <p>Emeds's team of designers and developers work to create not only a practice website, but an online extension of your waiting room. We provide website redesign services for your existing website and help you to migrate to a better hosting provider.</p>
                </div>
                
                <!--bottom-service-box-->
                <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4 bottom-service-box no-pad wow fadeInDown animated" data-wow-delay="1.5s" data-wow-offset="200">
                <div class="bottom-service-title">Site Hosting & Management</div>
                <p>Don't want the burden of managing your own website? In addition to our standard hosting & email services, our optional Site Management service includes website content changes, technical support and customer service.</p>
                </div>
                
                <!--bottom-service-box-->
                <div class="col-xs-12 col-md-4 col-sm-6 col-lg-4 bottom-service-box no-pad wow fadeInDown animated" data-wow-delay="1.5s" data-wow-offset="200">
                <div class="bottom-service-title">Internet Marketing Services</div>
                <p>Emeds's team of Internet Marketing experts combine Search Engine Optimization (SEO), Search Engine Marketing (SEM) and Social Media Management (SMM) to increase your reach and visibility on the web.</p>
                </div>

                </div>
        </div>
    </div>              <!--Mid Services End-->

         </div>
         
         </div>
         </div>
            
            
            
		<div class="services-content-wrap pull-left">
        	<div class="container">

              <div class="row">
            
            
        <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6 accordion-element">
            <div class="bottom-service-title">What we do</div>
            <div id="accordion">
                    <h3><span class="dep-txt">Online Patient Booking</span></h3>
                    <div>
                        <div class="dept-content col-md-12 col-lg-12">
                        <p>We provide a web based appointment system to facilitate online patient booking options in your dental website. Emeds's Online Appointment System offers the most intuitive way to organize your schedule and help you to streamline patient scheduling for your practice. It's also much simpler and easier to use than other scheduling software. It also ensures fewer errors than manual scheduling systems. Online Appointment System is accessible to everyone in the office at the same time, making your patient scheduling system more efficient than ever.</p>
                                                
                        </div>
                    </div>
                    
                    <h3><span class="dep-txt">Custom Website for Dentist</span></h3>
                    <div>
                        <div class="dept-content col-md-12 col-lg-12">
                        <p>Lots of companies are great with technology. At Emeds Dental, we are proud to be the leading website development company focused exclusively on dentistry. We combine the knowledge gained from the experience with leading-edge technologies. Most importantly, we take the time to get to know your practice, and we create a website that captures your spirit. We help you to improve your online presence to attract new patients and reduce missed appointments to save practice money. Our websites are based on the popular WordPress platform which helps to integrate thousands of plugins with minimal effort.</p>
                        
                        </div>                
                    </div>
                    
                    <h3 class="last-child-ac ilast-child-acc"><span class="dep-txt">Social Engagement</span></h3>
                    <div>
                        <div class="dept-content pull-left col-md-12 col-lg-12">
                        <p>Successful dental practices take an active interest in their local communities. This is no different on the Internet, and platforms such as Facebook make this even more important. By sharing your knowledge and interests with other leaders in the community, you engender trust and confidence. In turn, this engagement makes it easier for your current patients to refer their friends while new patients feel more comfortable scheduling a visit.</p>
                        
                        </div>                
                    </div>
                    
                </div>

         </div>
            
        <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">  
        	<div class="bottom-service-title">Main Services</div>
            <div class="collapse-widget-content" style="background:#FFFFFF; padding:20px 20px 0 20px">
                <div class="dept-title pull-left">Search Engine Optimization</div> 
                <p>We strive to get your practice website listed and ranked organically by top search engines by developing your brand, establishing reputation and optimizing your content through link building and keywords analysis.</p>
                <div class="dept-title pull-left">Appointment Reminders</div> 
                <p>Most missed appointments occur because patients simply forget about their appointment! Automated email reminders from Emeds will immediately start reaching 100% of your patients to remind them about their appointment.Stop wasting time and resources on staff-dialed appointment reminders and say goodbye to no-shows!</p>
                <div class="dept-title pull-left">Ask our Experts</div> 
                <p>Our dental practice management experts will help you to achieve custom web development solutions tailored for your specific requirements. Our custom dental practice website comes with pre-filled content specific to dental practice.</p>
                </div>
        </div>

            </div>
            
        </div>
     </div>
     
 
 
 
 
  </section>

<script type="text/javascript" src="<?php echo base_url(); ?>static/index/js/jquery.form.js"></script>
<script>
$(document).ready(function()
{
	$('#submit').click(function(){
		$('#loading').fadeIn('fast');
	});
	
	<!--ajax form posting for Add new Contact starts-->
	$('#update-form').ajaxForm(function(e) {
		if(e=='curr_password'){status_alert('Enter your current password');$("#"+e).focus();  }
		if(e=='not_avalible'){status_alert('Old password not correct');$("#"+e).focus();  }
		if(e=='new_password'){status_alert('Enter your New password');$("#"+e).focus();  }
		if(e=='retype_password'){status_alert('Retype your new password');$("#"+e).focus();  }
		if(e=='mismatch'){status_alert('Password mismatch');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('Updated Sucessfully');
			$("#alert_box").last().removeClass( "alert-danger" );
			$("#alert_box").last().addClass( "alert-success" );
			//window.location.href = "<?php echo base_url(); ?>index/account_settings";
		}
		else
		{
			//status_alert(e);
		}
		
	});
	<!--ajax form posting for Add new Contact Ends-->
	
	<!-- alert box-->
	function status_alert(e)
	{
		$("#alert_box").last().addClass("alert-danger");
		$('#loading').fadeOut('fast');
		$('#alert_box').fadeIn('slow');
		$('#alert_content').html(e);
	}
	<!-- alert box-->
	
});
	
</script>
