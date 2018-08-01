<?php //print_r($mysites); ?>

<section class="complete-content content-footer-space">
    
    <!--Mid Content Start-->
    
    
     <div class="about-intro-wrap pull-left">
     
         <div class="bread-crumb-wrap ibc-wrap-3">
    	<div class="container">
    <!--Title / Beadcrumb-->
         	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
            	<div class="bread-heading"><h1>My Sites</h1></div>
                <div class="bread-crumb pull-right">
                <ul>
                <li><a href="<?php echo base_url(); ?>index">Home</a></li>
                <li><a href="javascipt:void(0)">My Sites</a></li>
                </ul>
                </div>
            </div>
         </div>
     </div> 
<?php if($this->session->flashdata('message')){ ?>     
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="bs-example">
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert">×</a>
                    <strong>Success!</strong> <?php echo $this->session->flashdata('message'); ?>.
                </div>
            </div>
        </div>   
        
<?php } ?>              
    <div class="container">
        <!--About-us top-content-->
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
             <!-- Blog column -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            
            <?php foreach($mysites as $site){ ?>
            
            <div class="row box-shadow">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <!-- Blog box -->
                    <div class="blog-box" >
                        <img alt="" src="<?php echo base_url().$site->temp_img; ?>" class="img-responsive" />
                        
                    </div>
                </div> 
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="blog-box-title"><a href="<?php echo base_url().'mysite/'.$site->site_username; ?>" target="_blank">
                    <?php echo base_url().$site->site_username; ?></a>
                    </div>
                    <div class="post-meta">By 
                    <span class="post-author ipost-author"><?php echo $site->temp_author; ?> </span> | 
                    <span class="post-date"><?php echo date("d - M - Y",$site->site_created_date); ?> </span>
                    </div>
                    <h3><?php echo $site->site_name; ?></h3>
                    <!--end-post-para-->
                    <div class="r-more">
                    <a href="<?php echo base_url().'index/upgrade/default/'.$site->site_username;?>" class="inner-page-butt-blue small-but upgrade">Upgrade Site</a>&nbsp; | &nbsp;
                    <a class="inner-page-butt-blue small-but" href="<?php echo base_url().'index/edit_site/'.$site->site_id; ?>">Edit Site</a>&nbsp; | &nbsp;
                    <a class="inner-page-butt-blue small-but" href="<?php echo base_url().'mysite/'.$site->site_username; ?>">View Site</a>&nbsp; | &nbsp;
                        <button type="button" data-toggle="modal" data-target="#template" value="<?php echo $site->site_id; ?>" class="inner-page-butt-blue small-but temp">Change template</button>&nbsp; | &nbsp;
                        
    <button type="button" data-toggle="modal" data-target="#Delete" value="<?php echo $site->site_id; ?>,<?php echo $site->site_name; ?>" class="inner-page-butt-blue small-but delete">Delete</button>
                    
                    </div>
                </div>
            </div><!--end-row-->
            <br />
            <?php } ?>
            <div class="row box-shadow">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 create-site">
                <a href="<?php echo base_url(); ?>index/templates"><h3>Create New Site</h3></a>
                </div>
            </div>
            </div> 
            </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 intro-content-wrap" style="border:solid thin #CCC; padding:0px">

                
            <div class="appointment-form-title">
            <i class="icon-hospital2 appointment-form-icon"></i>Upgrade to Premium</div>
            <div style="margin:20px 20px 0 20px">
            <ul style="width:100%">
            <li><i class="fa fa-angle-right about-list-arrows"></i>1 Year Domain</li>
            <li><i class="fa fa-angle-right about-list-arrows"></i>Remove Emeds Ads</li>
            <li><i class="fa fa-angle-right about-list-arrows"></i>Get more storage & Bandwidth</li>
            </ul>
                
                <div style="clear:both"></div>
                
            </div>
        </div>
    </div>
</div>
    
</section>
<!-- Modal  Delete-->
<form class="form-horizontal" id="delete-form" method="post" action="<?php echo base_url(); ?>index/remove_site">
<div class="modal fade" id="Delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <input type="hidden" name="delete_id" id="delete_id"/>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><br />
            </div>
            <div class="modal-body">
                <button type="button" class="btn btn-danger"><i class="fa fa-3x fa-warning" style="color: #FF0;"></i></button>
                Are you sure you want to delete <span id="delete_data"></span> ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger">Yes</button>
            </div>
        </div>
    </div> 
</div>
</form>
<!-- Modal  Delete END-->
<!-- Modal  change template-->
<form class="form-horizontal" id="template-form" method="post" action="<?php echo base_url(); ?>index/change_theme">
<div class="modal fade" id="template" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <input type="hidden" name="delete_id1" id="delete_id1"/>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><br />
            </div>
            <div class="modal-body">
				<?php foreach($templates as $template){ ?>
                <div class="doctor-box col-md-4 col-sm-6 col-xs-12">
                <label>
                    <div class="zoom-wrap">
                        <div class="zoom-icon"></div>
                        <img alt="" class="img-responsive" src="<?php echo base_url().'/'.$template->temp_img; ?>" />
                    </div>
                    <div class="doc-name">
                        <div class="doc-name-class"><?php echo $template->temp_name; ?></div>
                        <hr />
                        <div style="margin:15px"><input type="radio" name="template_id" value="<?php echo $template->temp_id; ?>"/></div>
                    </div>
                </label>
                </div>
                <?php } ?>                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Change Theme</button>
            </div>
        </div>
    </div> 
</div>
</form>
<!-- Modal  change template END-->

    
<style>
.upgrade{ background:#000;border: 1px solid #000;box-shadow: 0 2px #000; padding: 3px 10px !important;}
.upgrade:hover {color: #ffffff;background-color: #333333;border: 1px solid #333;box-shadow: 0 2px #999999;}
.delete{background:#CC1818;border: 1px solid #CC1818;box-shadow: 0 2px #A51515;padding: 1px 10px !important; }
.delete:hover {color: #ffffff;background-color: #A51515;border: 1px solid #A51515;box-shadow: 0 2px #CC1818;}
.temp{background:#107fc9;border: 1px solid #107fc9;box-shadow: 0 2px #0e70b1;padding: 1px 10px !important; }
.temp:hover {color: #ffffff;background-color: #0e70b1;border: 1px solid #107fc9;box-shadow: 0 2px #0d67a3;}
</style>
