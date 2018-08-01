<section>
	<div class="footer">
		
	</div>
	<p id="back-top">
		<a href="#top"><span></span></a>
	</p>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p class="pull-left">
						 &copy; Copyright 2015 Emeds
					</p>
				</div>
				<div class="col-md-8">
				<?php 
				if(isset($_REQUEST['username']))
				{
				?>
                	<ul class="footermenu pull-right">
						<?php
                        $result = mysql_query("SELECT * FROM emeds_cus_pages INNER JOIN emeds_pages_default
                        ON emeds_pages_default.def_page_id=emeds_cus_pages.def_page_id WHERE emeds_cus_pages.site_id = '".$site_id."'");
                        $i=0;
                        while ($row = mysql_fetch_array($result)) 
                        {
                        ?>
                            <li><a href="<?php echo $row['page_short_code']; ?>?username=<?php echo $_REQUEST['username']; ?>&page_id=<?php echo $row['id']; ?>"><?php echo $row['page_name']; ?></a></li>
                        <?php
                        }
                        ?>
					</ul>
				<?php
                }
                else
                {
                ?>
					<ul class="footermenu pull-right">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="service.php">Services</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
           		<?php
				}
				?>
				</div>
			</div>
		</div>
	</div>
</section>