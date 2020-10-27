<!DOCTYPE html>
<html lang="hr">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>Početna</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/kontakt.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
    <style>
		.mySlides {display:none}
		.w3-left, .w3-right, .w3-badge {cursor:pointer}
		.w3-badge {height:13px;width:13px;padding:0}
	</style>
  
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
				<li class="active"><a href="index.php">Početna</a></li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<b class="caret"></b></a>
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
	  <div id="main">
				
					<div class="w3-content w3-display-container" style="max-width:100%">
						<img class="mySlides w3-animate-fading" src="Slike/slideshow/img1.jpg" style="width:100%">
						<img class="mySlides w3-animate-fading" src="Slike/slideshow/img2.jpg" style="width:100%">
						<img class="mySlides w3-animate-fading" src="Slike/slideshow/img3.jpg" style="width:100%">
						<img class="mySlides w3-animate-fading" src="Slike/slideshow/img4.jpg" style="width:100%">
						<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
							<div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
							<div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
							<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
							<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
							<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
							<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
						</div>
					</div>
					<script>
						var slideIndex = 1;
						var myIndex = 0;
						showDivs(slideIndex);
						carousel();
						function plusDivs(n) {
						  showDivs(slideIndex += n);
						}

						function currentDiv(n) {
						  showDivs(slideIndex = n);
						}

						function showDivs(n) {
						  var i;
						  var x = document.getElementsByClassName("mySlides");
						  var dots = document.getElementsByClassName("demo");
						  if (n > x.length) {slideIndex = 1}    
						  if (n < 1) {slideIndex = x.length}
						  for (i = 0; i < x.length; i++) {
							 x[i].style.display = "none";  
						  }
						  for (i = 0; i < dots.length; i++) {
							 dots[i].className = dots[i].className.replace(" w3-white", "");
						  }
						  x[slideIndex-1].style.display = "block";  
						  dots[slideIndex-1].className += " w3-white";
						}
						function carousel() {
							var i;
							var x = document.getElementsByClassName("mySlides");
							for (i = 0; i < x.length; i++) {
							   x[i].style.display = "none";  
							}
							myIndex++;
							if (myIndex > x.length) {myIndex = 1}    
							x[myIndex-1].style.display = "block";  
							setTimeout(carousel, 7000);    
						}
					</script>
				</div>
	</div>
</body>
</html>
