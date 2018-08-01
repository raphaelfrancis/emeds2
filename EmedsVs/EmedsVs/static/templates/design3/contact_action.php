<?php
		session_start();

		
		$name=$_REQUEST['name'];
		$from_mail=$_REQUEST['email'];		
		$message=$_REQUEST['message'];	
		$subject=$_REQUEST['subject'];	
		
		$company_name=$_SESSION['site_name'];	
		$to_mail=$_REQUEST['to_mail'];
		
		$subject="Mail from Contact Form";
		
		$my_message='
		<table width="80%" border="0" align="center" cellpadding="8" cellspacing="4">
		  <tr>
			<td height="66" colspan="3"><strong style="font-size:20px">'.$company_name.'</strong></td>
		  </tr>
		  <tr>
			<td>Name</td>
			<td>:</td>
			<td>'.$name.'</td>
		  </tr>
		  <tr>
			<td>E-mail</td>
			<td>:</td>
			<td>'.$mail.'</td>
		  </tr>
		  <tr>
			<td>Subject</td>
			<td>:</td>
			<td>'.$subject.'</td>
		  </tr>
		  
		  <tr>
			<td>Message</td>
			<td>:</td>
			<td>'.nl2br($message).'</td>
		  </tr>
		 </table>';
		
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		// Additional headers
		$headers .= 'To: '.$company_name.' <'.$to_mail.'>' . "\r\n";
		$headers .= 'From: Contact Form <'.$from_mail.'>' . "\r\n";
		//$headers .= 'Cc: saifansteel@gmail.com' . "\r\n";
		
		if(mail("", "Contact Form", $my_message, $headers))
		{
			$_SESSION["message"] = "Mail sent successfully.We will contact you as soon as possible.";
			header("location:http://".$_REQUEST['url']);
		}
		else
		{
			$_SESSION["message"] = "Mail sending failed.Please try again.";
			header("location:http://".$_REQUEST['url']);
		}
		
?>