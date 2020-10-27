<?php
	require('spajanje_s_bazom.php');
	session_start();
	if (isset($_POST['email'])) {
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($link,$email);
		$psw = stripslashes($_REQUEST['psw']);
		$psw = mysqli_real_escape_string($link,$psw);
		$query = "SELECT * FROM `korisnici` WHERE Email='$email' and Zaporka='$psw'";
		$result = mysqli_query($link, $query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		$ime = $result->fetch_assoc();

		if ($rows == 1) {
			$_SESSION['korisnik'] = $ime["Ime"];
			header("Location: index.php");
		} else {
			echo "Netočan email ili zaporka, pokušajte ponovno!";
		}
	}
?>