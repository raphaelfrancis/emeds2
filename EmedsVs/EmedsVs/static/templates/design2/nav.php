<?php
$_SESSION['base_url']='http://localhost/emeds2/EmedsVs/EmedsVs/';

$pos=strrpos($_SERVER['PHP_SELF'],"/");
$pos++;
$pagename=substr($_SERVER['PHP_SELF'],$pos);
?>
<section class="toparea">
	<div class="container">
		<div class="row">
			<div class="col-md-6 top-text pull-left animated fadeInLeft">
				<i class="icon-phone"></i> Phone: <?php if(isset($mobile)){ echo $mobile; } else { ?>+xx xxxx xxxxx <?php } ?><span class="separator"></span>
                
                <?php if(isset($email)){ ?>
                <i class="icon-envelope"></i> Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                <?php } else { ?>
                <i class="icon-envelope"></i> Email: <a href="#">admin@emeds.co</a>
                <?php } ?>
			</div>
			<div class="col-md-6 text-right animated fadeInRight">
				<div class="social-icons">
					<a class="icon icon-facebook" href="#"></a>
					<a class="icon icon-twitter" href="#"></a>
					<a class="icon icon-google-plus" href="#"></a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
if(isset($_REQUEST['username']))
{
?>
<nav class="navbar navbar-fixed-top wowmenu" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a href="<?php echo $index_page; ?>" class="navbar-brand">
            <div class="logo">
            
            	<?php if(isset($_REQUEST['username'])){ ?>
					<?php if($site_logo){ ?>
                        <img src="../../../uploads/<?php echo $site_logo; ?>"/>
                    <?php } else { ?>
                        <span class="logo"><?php echo $site_name; ?></span>
                    <?php } ?>
                <?php } else { ?>
                    <img src="img/logo.png"/>
                <?php } ?>
            
            </div></a>
		</div>
		<ul id="nav" class="nav navbar-nav pull-right">
        
		<?php
		$result = mysqli_query($conn,"SELECT * FROM emeds_cus_pages INNER JOIN emeds_pages_default
		ON emeds_pages_default.def_page_id=emeds_cus_pages.def_page_id WHERE emeds_cus_pages.site_id = '".$site_id."'");
        $i=0;
        while ($row = mysqli_fetch_array($result)) 
        {
        $i++;
        ?>
                <li <?php echo ($_REQUEST['page_id']==$row['id'])?'class="active"':''; ?>><a href="<?php echo $row['page_short_code']; ?>?username=<?php echo $_REQUEST['username']; ?>&page_id=<?php echo $row['id']; ?>"><?php echo $row['page_name']; ?></a></li>
            <?php
			if($row['page_short_code']=='index.php')
			{
				$index_page=$row['page_short_code']."?username=".$_REQUEST['username']."&page_id=".$row['id']; 
			}
		}
		?>
    	</ul>   	   							
	
    </div>	
</nav>
<?php
}
else
{
?>
<nav class="navbar navbar-fixed-top wowmenu" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a href="index.php" class="navbar-brand"><div class="logo">
            <?php if($site_logo){ ?>
            <img src="../../../uploads/<?php echo $site_logo; ?>"/>
            <?php } else { ?>
            <img src="img/logo.png"/>
            <?php } ?>
            </div></a>
		</div>
		<ul id="nav" class="nav navbar-nav pull-right">
            <li <?php echo ($pagename=='index.php')?'class="active"':''; ?>><a href="index.php">Home</a></li>
            <li <?php echo ($pagename=='about.php')?'class="active"':''; ?>><a href="about.php">About Us</a></li>	
            <li <?php echo ($pagename=='service.php')?'class="active"':''; ?>><a href="service.php">Services</a></li>
            <li <?php echo ($pagename=='gallery.php')?'class="active"':''; ?>><a href="gallery.php">gallery</a></li>	
            <li <?php echo ($pagename=='practice.php')?'class="active"':''; ?>><a href="practice.php">Our Practice</a></li>	
            <li <?php echo ($pagename=='contact.php')?'class="active"':''; ?>><a href="contact.php">Contact</a></li>
    	</ul>   	   							
	
    </div>	
</nav>
<?php
}
?>