<section class="complete-content content-footer-space">
    <!--Mid Content Start-->
    <div class="about-intro-wrap pull-left">
     
        <div class="bread-crumb-wrap ibc-wrap-3">
            <div class="container">
                <div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
                    <div class="bread-heading"><h1>Update Profile</h1></div>
                    <div class="bread-crumb pull-right">
                    <ul>
                    <li><a href="<?php echo base_url(); ?>index">Home</a></li>
                    <li><a href="javascipt:void(0)">Update Profile</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div> 
        
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12  col-sm-12 col-md-12">
                        <!--Contact form-->
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        
                
                        <form class="contact2-page-form col-lg-12 col-sm-12 col-md-6 col-xs-12 no-pad contact-v2"  action="<?php echo base_url(); ?>index/account_settings/update" method="post" id="update-form">
      
                                <div class="form-title-text no-pad">Update Profile</div>
                                
                                <!-- alerts -->
                                <div class="alert col-lg-12 col-sm-12 col-md-12 col-xs-12" style="display:none" id="loading">
                                    <img src="<?php echo base_url(); ?>static/index/images/loading.gif"/>
                                </div>
                                <div class="alert col-lg-12 col-sm-12 col-md-12 col-xs-12" style="display:none" id="alert_box">
                                    <div id="alert_content"></div>
                                </div>
                                <!-- alerts -->

                        
                                <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                                <h5 class="pull-right">* Name : </h5>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                <input type="text" class="contact2-textbox" placeholder="First Name" name="name" id="name" value="<?php echo $name; ?>">
                                </div>
                                <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                                <h5 class="pull-right">Phone : </h5>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                <input type="text" class="contact2-textbox" placeholder="Phone" name="phone" id="phone" value="<?php echo $phone; ?>">
                                </div>
                                <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                                <h5 class="pull-right">Mobile : </h5>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                <input type="text" class="contact2-textbox" placeholder="Mobile" name="mobile" id="mobile" value="<?php echo $mobile; ?>">
                                </div>
                                <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                                <h5 class="pull-right">Speciality : </h5>
                                </div>
                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                <!--<input type="text" class="contact2-textbox" placeholder="Speciality" name="speciality" id="speciality" value="<?php echo $speciality; ?>">-->
                                <select  class="contact2-textbox" name="speciality" id="speciality">
									<?php foreach($categories as $category){ ?>
                                    <option <?php echo ($speciality==$category->category_name)?'selected="selected"':''; ?>><?php echo $category->category_name; ?></option>  
                                    <?php } ?>
                                </select>
                                </div>
                                
                                
                                <?php if($status==0){ ?>
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <h5 class="pull-right">Verified Status : </h5>
                                </div>
                                
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <h5>Not Verified <a href="<?php echo base_url(); ?>index/verify_now_email">Verify Now</a></h5>
                                </div>
                                
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <section class="color-7" id="btn-click">
                                <button class="icon-mail btn2-st2 btn-7 btn-7b" id="submit" type="submit">Save Changes</button>
                                </section>
                                </div>
                                <?php } else { ?>
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <section class="color-7" id="btn-click">
                                <button class="icon-mail btn2-st2 btn-7 btn-7b" id="submit" type="submit">Save Changes</button>
                                </section>
                                </div>
                                <?php } ?>

                            </form>
                            
                            
                        
                        </div><!--Contact Form end-->
                        
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
		
		if(e=='name'){ status_alert('Enter your Name');$("#"+e).focus();  }

		if(e=='success')
		{
			status_alert('Updated Sucessfully');
			$("#alert_box").last().removeClass( "alert-danger" );
			$("#alert_box").last().addClass( "alert-success" );
			//window.location.href = "<?php echo base_url(); ?>index/account_settings";
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

