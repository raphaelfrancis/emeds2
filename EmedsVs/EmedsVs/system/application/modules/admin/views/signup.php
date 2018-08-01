<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Emeds | Signup</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="author" content="@toddmotto">
	<link href="<?php echo base_url(); ?>static/css/style.css" rel="stylesheet">
</head>

<body>
	
	<div class="wrapper">
		<div id="main" style="margin:50px 0 0 0;">
		
		<!-- Form -->
		<form id="contact-form" action="/" method="post">
			<h3>Sign Up</h3>
			<div>
				<label>
					<span>Email : (required)</span>
					<input placeholder="Please enter your Email" type="text" tabindex="1" required>
				</label>
			</div>
			<div>
				<label>
					<span>Password: (required)</span>
					<input placeholder="Please enter your Password" type="password" tabindex="2" required>
				</label>
			</div>
			<div>
				<label>
					<span>Re-Password: (required)</span>
					<input placeholder="Please enter your Password" type="password" tabindex="2" required>
				</label>
			</div>
			
			<div>
				<button name="submit" type="submit" id="contact-submit">Create an account</button>
			</div>
			<div style="text-align:center">
				<a href="<?php echo base_url(); ?>index/signin"><button name="button" type="button" id="contact-submit">I'm an existing user</button></a>
			</div>
		</form>
		<!-- /Form -->
		
		</div>
	</div>

	
</body>
</html>