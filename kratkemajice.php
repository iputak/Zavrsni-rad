<!DOCTYPE html>
<html lang="hr">
<head>
  <title>Kratke majice</title>
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
						<li class="active"><a href="kratkemajice.php">Kratke majice</a></li>
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
		<div id="mainKratkemajice">	
			<h1>Kratke majice</h1><br>
				<hr>
				<div class="gallery">
				  <a target="" href="proizvod.php?vrsta=kratke&id=1">
					<img src="Slike/shop/kratke majice/1.jpg" alt="Eat big, lift big, get big" width="300" height="200">
				  </a>
				  <div class="desc">Eat big, lift big, get big<br>80 kn</div>
				</div>

				<div class="gallery">
				  <a target="" href="proizvod.php?vrsta=kratke&id=2">
					<img src="Slike/shop/kratke majice/2.jpg" alt="Problem? Riješen!" width="300" height="200">
				  </a>
				  <div class="desc">Problem? Riješen!<br>80 kn</div>
				</div>

				<div class="gallery">
				  <a target="" href="proizvod.php?vrsta=kratke&id=3">
					<img src="Slike/shop/kratke majice/3.jpg" alt="Strongdor" width="300" height="200">
				  </a>
				  <div class="desc">Strongdor<br>80 kn</div>
				</div>

				<div class="gallery">
				  <a target="" href="proizvod.php?vrsta=kratke&id=4">
					<img src="Slike/shop/kratke majice/4.jpg" alt="The gym" width="300" height="200">
				  </a>
				  <div class="desc">The gym<br>80 kn</div>
				</div>
				
				<div class="gallery">
				  <a target="" href="proizvod.php?vrsta=kratke&id=5">
					<img src="Slike/shop/kratke majice/5.jpg" alt="Train hard" width="300" height="200">
				  </a>
				  <div class="desc">Train hard<br>80 kn</div>
				</div>
				
				<div class="gallery">
				  <a target="" href="proizvod.php?vrsta=kratke&id=6">
					<img src="Slike/shop/kratke majice/6.jpg" alt="Today I shape me" width="300" height="200">
				  </a>
				  <div class="desc">Today I shape me<br>80 kn</div>
				</div>

			</div>
	</div>
	
	
	<footer class="container-fluid text-center foot">
		<p>Copyright 2018 &copy; Strongdor</p>
	</footer>
</html>
