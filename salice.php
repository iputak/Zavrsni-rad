<!DOCTYPE html>
<html lang="hr">
<head>
  <title>Šalice</title>
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
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<b class="caret"></b></a>
					 <ul class="dropdown-menu">
						<li><a href="kratkemajice.php">Kratke majice</a></li>
						<li><a href="dugemajice.php">Duge majice</a></li>
						<li class="active"><a href="salice.php">Šalice</a></li>
					 </ul>
				<li><a href="onama.php">O nama</a></li>
				<li><a href="kontakt.php">Kontakt</a></li>
			  </ul>
			</div>
		</div>
	  
	</nav>
	<div class="container-fluid">    
		<div id="mainSalice">	
				<h1>Šalice</h1><br>
				<hr>
				<div class="gallery">
				  <a target="" href="proizvod.php?vrsta=salice&id=8">
					<img src="Slike/shop/salice/8.jpg" alt="Fjords" >
				  </a>
				  <div class="desc">Commitment<br>35 kn</div>
				</div>

				<div class="gallery">
				  <a target="" href="proizvod.php?vrsta=salice&id=9">
					<img src="Slike/shop/salice/9.jpg" alt="Forest" >
				  </a>
				  <div class="desc">Train hard<br>35 kn</div>
				</div>
				
			</div>
	</div>
	
	<footer class="container-fluid text-center foot">
		<p>Copyright 2018 &copy; Strongdor</p>
	</footer>
</body>
</html>
