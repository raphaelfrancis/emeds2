<section class="complete-content content-footer-space">
    <!--Mid Content Start-->
    <div class="about-intro-wrap pull-left">

        <div class="bread-crumb-wrap ibc-wrap-3">
            <div class="container">
                <div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
                    <div class="bread-heading"><h1>Upgrade Website</h1></div>
                    <div class="bread-crumb pull-right">
                    <ul>
                    <li><a href="<?php echo base_url(); ?>index">Home</a></li>
                    <li><a href="javascipt:void(0)">Upgrade Website</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div> 
        
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12  col-sm-12 col-md-12">
                        <!--Contact form-->
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" data-wow-delay="0.5s" data-wow-offset="100">
                
                            <!--Contact Sidebar-->
                            <form class="contact2-page-form col-lg-12 col-sm-12 col-md-12 col-xs-12 no-pad contact-v2" action="<?php echo base_url(); ?>index/change_password/update" method="post" id="update-form">
                            
                                <p>Clients who are interested in upgrading their website with new content, simply fill in our upgrade form . Please provide your current website url that needs to be upgraded . Once we receive your request, one of our team members will contact you shortly to follow up. if you are looking to have your existing website migrated to our platform or having a new website designed, feel free to add your requirements in the comments section below:</p><br />
                                
                                <!-- alerts -->
                                <div class="alert col-lg-12 col-sm-12 col-md-12 col-xs-12" style="display:none" id="loading">
                                    <img src="<?php echo base_url(); ?>static/index/images/loading.gif"/>
                                </div>
                                <div class="alert col-lg-12 col-sm-12 col-md-12 col-xs-12" style="display:none" id="alert_box">
                                    <div id="alert_content"></div>
                                </div>
                                <!-- alerts -->
                               
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <h5>Website Url </h5>
                                </div>
                                
                                <div class="form-group">
                               
                                <select id="country" name="country"  class="col-lg-5 col-sm-5 col-md-2" style = "height: 40px;margin-left:16px;">
                                    <?php
                                    foreach($cust_sites as $value)
                                    {
                                    ?>
                                    <option value="<?php echo $value["site_username"];?>"><?php echo $value["site_username"];?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                </div>
                                <br>
                                <br>
                                <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                                <h5>Domain Name</h5>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                <input type="password" class="contact2-textbox" placeholder="e.g www.abc.com" name="domain_name" id="domain_name">
                                </div>
                                <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                                <h5>Comments</h5>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                    <textarea class="contact2-textarea" placeholder="Comments" name="comments" id="comments"></textarea>                                </div>
                                <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                                <h5>Contact Email</h5>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                <input type="email" class="contact2-textbox" placeholder="Email Address" name="email" id="email">
                                </div>
                                <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                                <h5>Contact Phone</h5>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                <input type="password" class="contact2-textbox" placeholder="Contact Phone" name="phone" id="phone">
                                </div>
                                <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12 text-right" style="margin-top:5px">
                                <?php print_r($captcha["image"]);?>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                                <input type="text" placeholder="Captcha*" class="contact2-textbox" name="captcha" id="captcha">
                                </div>
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <section class="color-7" id="btn-click">
                                <button class="icon-mail btn2-st2 btn-9 btn-7b" type="submit" id="submit" style = "margin-right:110px;">Submit</button>
                                </section>
                                </div>
                            </form>
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
