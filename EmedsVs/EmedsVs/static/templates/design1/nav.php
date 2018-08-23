<?php
$pos=strrpos($_SERVER['PHP_SELF'],"/");
$pos++;
$pagename=substr($_SERVER['PHP_SELF'],$pos);

if(isset($_REQUEST['username']))
{
?>
<nav class="top-nav two">
    <ul class="top-nav">
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
        <div class="clearfix"> </div>
    </ul>
    <a href="#" id="pull"><h6>MENU</h6><img src="images/menu-icon.png" title="menu" /></a>
</nav>
<?php 
}
else
{
$index_page='index.php';
?>
<nav class="top-nav two">
    <ul class="top-nav">
        <li <?php echo ($pagename=='index.php')?'class="active"':''; ?>><a href="index.php">Home</a></li>
        <li <?php echo ($pagename=='about.php')?'class="active"':''; ?>><a href="about.php">About</a></li>
        <li <?php echo ($pagename=='service.php')?'class="active"':''; ?>><a href="service.php">Service</a></li>
        <li <?php echo ($pagename=='gallery.php')?'class="active"':''; ?>><a href="gallery.php"> Gallery </a></li>
        <li <?php echo ($pagename=='practice.php')?'class="active"':''; ?>><a href="practice.php"> Our Practice</a></li>
        <li <?php echo ($pagename=='contact.php')?'class="active"':''; ?>><a href="contact.php">Contact</a></li>
        <div class="clearfix"> </div>
    </ul>
    <a href="#" id="pull"><h6>MENU</h6><img src="images/menu-icon.png" title="menu" /></a>
</nav>
<?php
}
?>
