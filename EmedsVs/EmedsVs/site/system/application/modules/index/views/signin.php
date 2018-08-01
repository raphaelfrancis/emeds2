<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Emeds | Sign in</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="<?php echo base_url(); ?>static/css/style.css" rel="stylesheet">
</head>

<body>
	
	<div class="wrapper">
		<div id="main" style="margin:50px 0 0 0;">
		
		<!-- Form -->
		<form id="contact-form" action="/" method="post">
			<h3>Sign in</h3>
			<h4>Fill in the form below, and we'll get back to you within 24 hours.</h4>
			<div>
				<label>
					<span>Username : (required)</span>
					<input placeholder="Username" type="text" tabindex="1" required >
				</label>
			</div>
			
			<div>
				<label>
					<span>Password : (required)</span>
					<input placeholder="Password" type="text" tabindex="1" required >
				</label>
			</div>
			
			<div>
				<label>
					<span><input type="checkbox"/> Remember Me </span>
				</label>
			</div>
			
			<div>
				<button name="submit" type="submit" id="contact-submit">Sign in</button>
			</div>
		
		<!-- /Form -->
		
		<div class="row" style="margin-top:20px">
            <div style="width:50%; float:left;text-align:center">
				<img src="<?php echo base_url(); ?>static/images/fa.png"/>
			</div>
			<div style="width:50%; float:left;text-align:center">
				<img src="<?php echo base_url(); ?>static/images/go.png"/>
			</div>
			
		</div>	
		<div style="clear:both"></div>
		<div style="text-align:center; margin-top:10px; ">
				<a href="<?php echo base_url(); ?>index/signup" style="text-decoration:none">Create an Account</a><br>
				<a href="<?php echo base_url(); ?>index/forgot" style="text-decoration:none">Forgot Password</a><br>
				<a href="<?php echo base_url(); ?>index" style="text-decoration:none">Back to Home</a>
		</div>
			
		
		</form>
		
		</div>
	</div>

	
</body>
</html>