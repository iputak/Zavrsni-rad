<!DOCTYPE html>
<html lang="hr">
<head>
  <title>O nama</title>
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
				<li class="active"><a href="onama.php">O nama</a></li>
				<li><a href="kontakt.php">Kontakt</a></li>
			  </ul>
			</div>
		</div>
	  
	</nav>
	<div class="container-fluid">    
		<div id="mainOnama">	
			<h1>O nama</h1> <br>
			<hr>
			<div class="mainInsideText">
				<p>STRONGDOR je novi brend na trižištu za sve koji se bave sportom.</p>
				<p>Iza naziva brenda stoji skupina entuzijasta i zaljubljenika u sport, željezo, znoj, suze i sve ostalo što čini profesionalca, amatera, rekreativca u teretani, dvorani, parku, livadi, garaži, dvorištu,... </p>
				<p>Trenutačno u ponudi imamo majice kratkih rukava i šalice.</p>
				<p>Majice su izrađene od 100% pamuka sa kvalitetnim orginalnim otiskom.</p>
				<p>Svi dizajni su orginalni, te vlasništvo STRONGDOR-a.</p>
				<br><br>
			</div>
						<div class="span8">
				<iframe width="100%" height="350" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.108345951243!2d15.96043291556905!3d45.8090884791066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d6e67f744865%3A0x7d9ff45a059d3dca!2sUl.+Vjekoslava+Klai%C4%87a+7%2C+10000%2C+Zagreb!5e0!3m2!1shr!2shr!4v1539246313227"  frameborder="0" style="border:0" allowfullscreen></iframe>			
			</div>
			
			<div class="span4">
				<h3>ADRESA</h3>
				<address>
					<strong>Strongdor d.o.o.</strong><br>
					Klaićeva 7<br>
					10 000 Zagreb, Hrvatska<br>
					<abbr title="Telefon">T:</abbr> (01) 1488 828
				</address>
			</div>

			
		</div>
	</div>
	
	<footer class="container-fluid text-center foot">
		<p>Copyright 2018 &copy; Strongdor</p>
	</footer>
</body>
</html>
