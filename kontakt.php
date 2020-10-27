<!DOCTYPE html>
<html lang="hr">
<head>
	<title>Kontakt</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/kontakt.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
  
  
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
				<li class="active"><a href="kontakt.php">Kontakt</a></li>
			  </ul>
			</div>
		</div>
	  
	</nav>
	<div class="container-fluid">    
		<div id="mainKontakt">	
			<h1>Kontakt</h1><br>
			<hr>
			<form action="email.php" method="post">
			<div class="container">
                
				<div class="row">
				<p>Kontaktirajte nas na mail pomoću formulara ispod teksta, ili nas kontaktirajte na facebook stranici.</p>
					<div class="col-md-8 col-md-offset-2">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="exampleInputName2">Ime i prezime</label>
								<input type="text" class="form-control" name="ImePrezime" placeholder="Ivan Horvat">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail2">Email</label>
								<input type="email" class="form-control" name="email" placeholder="ivan.horvat@primjer.hr">
							</div>
							<div class="form-group ">
								<label for="exampleInputText">Vaša poruka</label>
								<textarea  class="form-control" name="poruka" placeholder="Napišite poruku"></textarea> 
							</div>
							<button type="submit" class="btn btn-default">Pošaljite</button>
						</form>
					</div>
					
              </div>
            </div>
			</form>
			<h3>Zapratite nas</h3>
					<ul class="list-inline banner-social-buttons">
						<li><a href="https://www.facebook.com/strongdorbrand/" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name"></span></i></a></li>
						<li><a href="https://www.vk.com/strongdorbrand" class="btn btn-default btn-lg"><i class="fa fa-vk"> <span class="network-name"></span></i></a></li>
					</ul>
		</div>
	</div>
	
	<footer class="container-fluid text-center foot">
		<p>Copyright 2018 &copy; Strongdor</p>
	</footer>
</body>
</html>
