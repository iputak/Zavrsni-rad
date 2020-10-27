﻿<!DOCTYPE html>
<html lang="hr">
<head>
  <title>Registracija</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/kontakt.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

	
  
  
</head>
<body>
	<div id="header">
		<div class="headerLOGO">
			<a href="index.php" class="logolink">
				<img src="Slike/header/logo.svg" class="logoimg" alt="LOGO">
			</a> 
		</div>
		<?php include_once("headerdesno.php");?>
	</div>
	<nav class="navbar navbar-default">
	  
		<!---->
		<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mojMenu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>
		<div class="row">
			<div class="collapse navbar-collapse" id="mojMenu">
			  <ul class="nav navbar-nav">
				<li><a href="index.php">Početna</a></li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle active" data-toggle="dropdown">Shop<b class="caret"></b></a>
					 <ul class="dropdown-menu">
						<li><a href="kratkemajice.php">Kratke majice</a></li>
						<li><a href="dugemajice.php">Duge majice</a></li>
						<li><a href="salice.php">Šalice</a></li>
					 </ul>
				<li><a href="onama.php">O nama</a></li>
				<li><a href="kontakt.php">Kontakt</a></li>
			  </ul>
			</div>
		</div>
	  
	</nav>
	<div class="container-fluid">    
		<div id="mainRegistracija">	

		<form action="register.php" method="post">
			<div class="container">
                <h1>Registracija</h1><br>
				<hr>
				<div class="row">
				<p>  Molimo Vas da ispunite formu za registraciju za kreiranje korisničkog računa.</p>
					<div class="col-md-8 col-md-offset-2">
						<form class="form-horizontal" method="post">
						
							<label for="ime"><b>Ime</b></label>
							<input type="text" placeholder="Unesite ime" name="ime" required>
							<label for="prezime"><b>Prezime</b></label>
							<input type="text" placeholder="Unesite prezime" name="prezime" required>
							<label for="adresa"><b>Adresa</b></label>
							<input type="text" placeholder="Unesite adresu" name="adresa" required>
							<label for="grad"><b>Grad</b></label>
							<input type="text" placeholder="Unesite grad" name="grad" required>
							<label for="pb"><b>Poštanski broj</b></label>
							<input type="text" placeholder="Unesite poštanski broj" name="pb" required>
							<label for="telefon"><b>Telefon</b></label>
							<input type="text" placeholder="Unesite broj telefona" name="telefon" required>
							
							<label for="email"><b>E-mail</b></label>
							<input type="text" placeholder="Unesite e-mail adresu" name="email" required>
							<label for="psw"><b>Zaporka</b></label>
							<input type="password" placeholder="Unesite zaporku" name="psw" required>

							<label for="psw-repeat"><b>Ponovite zaporku</b></label>
							<input type="password" placeholder="Ponovite zaporku" name="psw-repeat" required>
							<hr>
							
							<p>Vaši će se osobni podaci biti korišteni za obradu Vaše narudžbe, podršku Vašem iskustvu na ovoj web stranici, za upravljanje računom i za druge svrhe opisane u našim <a href="pravila.php" target="_blank">PRAVILIMA PRIVATNOSTI</a>.</p>
							<button type="submit" name="submit" class="registerbtn" onclick="return message();">REGISTRACIJA</button>
						</form>
					</div>
					
              </div>
            </div>
			
			
			
			<div class="container signin">
				<p>Već imate korisnički račun? <a href="prijava.php">Prijava</a>.</p>
			</div>
		</form>
		</div>
	</div>
	
	<footer class="container-fluid text-center foot">
		<p>Copyright 2018 &copy; Strongdor</p>
	</footer>
	<script>
		function message()
		{
			alert("Record Saved Successfully .. !");
			return true;
		}
	</script>
</body>
</html>
