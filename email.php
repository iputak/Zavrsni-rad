<?php	
	$name=$_POST['ImePrezime'];
	$visitor_email=$_POST['email'];
	$message=$_POST['poruka'];
	
	$email_from='iputak@hotmail.com';
	
	$email_subject=  "New Form Submission";
	
	$email_body = "Ime i prezime: $name.\n". "Email korisnika: $visitor_email. \n". "Poruka: $message. \n";
	
	$to = "iputak@hotmail.com";
	$headers = "Od: $email_from \r\n";
	$headers = "Odgovori: $visitor_email \r\n";
	
	mail($to, $email_subject, $email_body, $headers);
	
	header("Location: index.php")
?>