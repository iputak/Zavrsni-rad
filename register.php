<?php
	require('spajanje_s_bazom.php');
	if(isset($_POST['ime'])){
		$name=$_POST['ime'];
		$surname=$_POST['prezime'];
		$adress=$_POST['adresa'];
		$city=$_POST['grad'];
		$zip=$_POST['pb'];
		$phone=$_POST['telefon'];
		$email=$_POST['email'];
		$psw=$_POST['psw'];
		$RePWD=$_POST['psw-repeat'];
		
		if ($psw == $RePWD) {
			$result = mysqli_query($link,"INSERT into `korisnici` (Ime, Prezime, Adresa, Grad, Post_broj, Telefon, Email, Zaporka) VALUES ('$name', '$surname', '$adress', '$city', '$zip', '$phone', '$email', '$psw')");
		} 
		else {
			$reg_errors['pass2'] = 'Vaša zaporka nije jednaka prihvacenoj zaporci!';
		}
		

		if ($result) {
			header("Location: index.php");
		}
		else {
			echo "Pokušajte ponovno.";
		}
	}
?>