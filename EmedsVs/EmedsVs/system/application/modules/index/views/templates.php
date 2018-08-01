<section class="complete-content content-footer-space">
<!--Mid Content Start-->
<div class="about-intro-wrap pull-left">
 
    <div class="bread-crumb-wrap ibc-wrap-2">
    <div class="container">
    <!--Title / Beadcrumb-->
    <div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
        <div class="bread-heading"><h1>Templates</h1></div>
        <div class="bread-crumb pull-right">
        <ul>
        <li><a href="<?php echo base_url(); ?>index">Home</a></li>
        <li><a href="javascript:void(0)">Templates</a></li>
        </ul>
        </div>
    </div>
    </div>
    </div>
 
    <div class="container">
    
    <div class="row"> 

     <div class="col-xs-12 col-sm-12 col-md-12 pull-left doctors-3col-tabs gallery-3col-tabs">

        <div class="content-tabs col-xs-12 col-sm-12">

              <!-- Tab panes -->
              <div class="tab-content">
              
                <div class="active">
                
                <?php foreach($templates as $template){ ?>
                <a href="<?php echo base_url(); ?>index/desktop/<?php echo $template->temp_id; ?>">
                
                <div class="doctor-box col-md-4 col-sm-6 col-xs-12">
                    <div class="zoom-wrap">
                        <div class="zoom-icon"></div>
                        <img alt="" class="img-responsive" src="<?php echo base_url().'/'.$template->temp_img; ?>" />
                    </div>
                    <div class="doc-name">
                        <div class="doc-name-class"><?php echo $template->temp_name; ?></div>
                        <hr />
                        <div style="margin:15px"><a href="<?php echo base_url(); ?>index/desktop/<?php echo $template->temp_id; ?>" class="inner-page-butt-blue medium-but">Select</a></div>
                    </div>
                </div>
                </a>
                <?php } ?>
                
                </div>
                
              </div>
    
       </div> <!--Mid Services End-->
    
    </div>
    </div>
    </div>

<!--Mid Content End-->

</div>


      <!--Footer Start-->

</section>