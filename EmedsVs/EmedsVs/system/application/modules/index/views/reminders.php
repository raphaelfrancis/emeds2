<section class="complete-content">
    <div id="price-plan-section">
    <div class="about-intro-wrap pull-left">
    
    <div class="bread-crumb-wrap ibc-wrap-4">
    	<div class="container">
    <!--Title / Beadcrumb-->
         	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
            	<div class="bread-heading"><h1>Reminders</h1></div>
                <div class="bread-crumb pull-right">
                <ul>
                <li><a href="<?php echo base_url(); ?>index">Home</a></li>
                <li><a href="javascript:void(0)">Reminders</a></li>
                </ul>
                </div>
            </div>
         </div>
     </div>       
            
		
        <div class="container">
        
        	<div class="row">
            
         
            
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                	<?php if($contents) 
					{
					?>
                    <div class="intro-content-wrap elemnts-wrap col-xs-12 col-sm-12 col-md-12 no-pad ">
                        <ul style="width:100%">
                        	<?php foreach($contents as $content){ ?>
                            <li><i class="fa fa-angle-right about-list-arrows"></i><?php echo $content->rem_content; ?>
                            <span style="float:right"><a href="<?php echo base_url(); ?>index/reminders/delete/<?php echo $content->rem_id; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></span></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php 
					}
					else
					{
					?>
                    <div class="alert alert-info col-lg-12 col-sm-12 col-md-12 col-xs-12" id="contactSuccess" style="margin-top:100px">
                         There was no reminders.
                    </div>
                    <?php 
					}
					?>
                </div>
            	<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 price-table-wrap pull-left">    
                     
          
                </div>
            
            </div>
			 </div><!--container-->

        </div><!--about intro wrap-->

	 </div><!--price-plan-section-->
	   <!--Footer Start-->

</section>