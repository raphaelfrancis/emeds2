<?php $_SESSION['base_url']='http://localhost/emeds2/EmedsVs/EmedsVs/'; 
$pos=strrpos($_SERVER['PHP_SELF'],"/");
$pos++;
$pagename=substr($_SERVER['PHP_SELF'],$pos);
?>		
		<div class="header-top">
			<div class="container">
				<ul class="header-contact">
					<li> <i class="fa fa-envelope"></i><?php if(isset($email)){ ?><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a><?php } else { ?><a href="mailto:info@example.com">mail@example.com</a><?php } ?></li>
                    <li><i class="fa fa-phone"></i><?php if(isset($phone)){ echo $phone; } else { ?>+ 55 234 56789<?php } ?> </li>
				</ul>
			</div>
		</div>
			
		<div class="header-main">
			<div class="container">
				<div class="row">
					<div class="col-2">
						<div id="logo">
							<a href="<?php echo $index_page; ?>" title="Logo" class="standard-logo">
                            	<?php if(isset($_REQUEST['username'])){ ?>
									<?php if($site_logo){ ?>
                                        <img class="logo-light" src="../../../uploads/<?php echo $site_logo; ?>"/>
                                        <img class="logo-dark" src="../../../uploads/<?php echo $site_logo; ?>"/>
                                    <?php } else { 
										if($pagename=='index.php'){?>
                                        <div style="margin-top:12px"><?php echo $site_name; ?></div>
                                        <?php } else { ?>
                                        <div><?php echo $site_name; ?></div>
                                    <?php } } ?>
                                <?php } else { ?>
                                    <img class="logo-light" src="images/logo.png">
                                    <img class="logo-dark" src="images/logo.png">
                                <?php } ?>
                            
                            
                            
							</a>
							
						</div>
					</div>
					<div class="col-10">          
						<div id="responsive-menu-trigger"><i class="fa fa-bars"></i></div>
<?php 
if(isset($_REQUEST['username']))
{
?>
<nav class="main-nav">
    <ul>
		<?php
        $result = mysql_query("SELECT * FROM emeds_cus_pages INNER JOIN emeds_pages_default
        ON emeds_pages_default.def_page_id=emeds_cus_pages.def_page_id WHERE emeds_cus_pages.site_id = '".$site_id."'");
        $i=0;
        while ($row = mysql_fetch_array($result)) 
        {
        $i++;
        ?>
            <li <?php echo ($_REQUEST['page_id']==$row['id'])?'class="current_page_item"':''; ?>><a href="<?php echo $row['page_short_code']; ?>?username=<?php echo $_REQUEST['username']; ?>&page_id=<?php echo $row['id']; ?>"><?php echo $row['page_name']; ?></a></li>
		<?php
			if($row['page_short_code']=='index.php')
			{
				$index_page=$row['page_short_code']."?username=".$_REQUEST['username']."&page_id=".$row['id']; 
			}
        }
        ?>
    </ul>
</nav>
<?php
}
else
{
?>
<nav class="main-nav">
    <ul>
        <li <?php echo ($pagename=='index.php')?'class="current_page_item"':''; ?>> <a href="index.php" title=""> Home </a> 
        <li <?php echo ($pagename=='about.php')?'class="current_page_item"':''; ?>><a  href="about.php" title="About"> About </a> </li>
        <li <?php echo ($pagename=='service.php')?'class="current_page_item"':''; ?>> <a href="service.php" title="Services"> Services </a> </li>
        <li <?php echo ($pagename=='gallery.php')?'class="current_page_item"':''; ?>><a href="gallery.php" title="Gallery"> Gallery </a></li>
        <li <?php echo ($pagename=='practice.php')?'class="current_page_item"':''; ?>><a href="practice.php"> Our Practice</a></li>
        <li <?php echo ($pagename=='contact.php')?'class="current_page_item"':''; ?>> <a href="contact.php" title="Gallery"> Contact </a></li>
    </ul>
</nav>
<?php
}
?>
					</div>

				</div>
			</div>
		</div>
	