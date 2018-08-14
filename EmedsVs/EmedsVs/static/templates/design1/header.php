<?php $_SESSION['base_url']='http://localhost/emeds2/EmedsVs/EmedsVs/'; ?>
<div class="header-top">
    <div class="container">
    <!--top-nav-->
        <div class="top-icons">
            <ul>
            	<?php if(isset($_REQUEST['username'])){ ?>
                <li><a class="gp" href="<?php echo ($row['google_plus'])?$row['google_plus']:'#'; ?>" <?php echo ($row['google_plus'])?'target="_blank"':''; ?>><span> </span></a></li>
                <li><a class="tw" href="<?php echo ($row['twitter'])?$row['twitter']:'#'; ?>" <?php echo ($row['twitter'])?'target="_blank"':''; ?>><span> </span></a></li>
                <li><a class="fb" href="<?php echo ($row['facebook'])?$row['facebook']:'#'; ?>" <?php echo ($row['facebook'])?'target="_blank"':''; ?>><span> </span></a></li>
                <li><a class="rss" href="<?php echo ($row['youtube'])?$row['youtube']:'#'; ?>" <?php echo ($row['youtube'])?'target="_blank"':''; ?>><span> </span></a></li>
                <?php } else { ?>
                <li><a class="gp" href="#"><span> </span></a></li>
                <li><a class="tw" href="#"><span> </span></a></li>
                <li><a class="fb" href="#"><span> </span></a></li>
                <li><a class="rss" href="#"><span> </span></a></li>
                <?php } ?>
                
                <div class="clearfix"> </div>
            </ul>
        </div>
        <ul class="left-icons">
            
            <li class="span-2">
                <div class="icon">
                    <i class="message"></i>
                </div>
                <div class="icon-data">
                    <?php if(isset($email)){ ?>
                    <p><a class="mail" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                    <?php } else { ?>
                    <p><a class="mail" href="mailto:mail@emeds.co">mail@emeds.co</a></p>
                    <?php } ?>
                </div>
                <div class="clearfix"></div>
            </li>
            <li class="span-2 phone">
                <div class="icon">
                    <i class="telephone"></i>
                </div>
                <div class="icon-data">
                    <p> <?php if(isset($mobile)){ echo $mobile; } else { ?>+xx xxxx xxxxx <?php } ?></p>
                </div>
                <div class="clearfix"></div>
            </li>
            <div class="clearfix"></div>
        </ul>

        <div class="clearfix"> </div>
    </div>
</div>

<div class="sub-header">
    <div class="container">
    <a href="<?php echo $index_page; ?>">
    <div class="logo">
		<?php if(isset($_REQUEST['username'])){ ?>
            <?php if($site_logo){ ?>
                <img src="../../../uploads/<?php echo $site_logo; ?>"/>
            <?php } else { ?>
                <span class="logo"><?php echo $site_name; ?></span>
            <?php } ?>
        <?php } else { ?>
            <img src="images/logo.png"/>
        <?php } ?>
    </div>
    </a>
    <div class="clearfix"> </div>
    </div>
</div>
