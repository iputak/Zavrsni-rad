<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	if($_GET['vrsta'] && $_GET['id']) {
	switch($_GET['vrsta']) {
		case "kratke":
		$putanja = "Slike/shop/kratke majice/";
		$putanja_proizvodi = "kratkemajice.php";
		$vrsta_proizvoda = "Kratke majice";
		break;
		case "duge":
		$putanja = "Slike/shop/duge majice/";
		$putanja_proizvodi = "kratkemajice.php";
		$vrsta_proizvoda = "Duge majice";
		break;
		case "salice":
		$putanja = "Slike/shop/salice/";
		$putanja_proizvodi = "salice.php";
		$vrsta_proizvoda = "Šalice";
		break;
	}
	$id= $_GET['id'];
	$vrsta= $_GET['vrsta'];
	require('spajanje_s_bazom.php');
	$result = mysqli_query($link, "SELECT * FROM `proizvodi` WHERE Id='$id' and Vrsta='$vrsta'");
	$proizvod = $result->fetch_assoc();
	$title = $proizvod["Naziv"];
	
	?>
	
	
<!DOCTYPE html>
<html lang="hr">
<head>
	<title><?php echo $title ?> | STRONGDOR</title>
	<meta charset="utf-8">
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="css/kontakt.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	.mySlides {display:none}
	.demo {cursor:pointer}
	
	</style>

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
		<div id="container">
 
			  <!-- Left Column  -->
			<div class="left-column">
				<!-- <img data-image="black" class="active" src="Slike/shop/kratke majice/eblbgb.jpg" alt="">  -->
				

				<div class="w3-content" style="max-width:1200px">
					<?php
						if ($vrsta=='kratke' || $vrsta=='duge'){  ?>
							<img class="mySlides" src="<?php echo $putanja ?><?php echo $id ?>.jpg" style="width:100%">
							<img class="mySlides" src="<?php echo $putanja ?>velicine.jpg" style="width:100%">
					
							<div class="w3-row-padding w3-section">
								<div class="w3-col s4">
									<img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo $putanja ?><?php echo $id ?>.jpg" style="width:100%" onclick="currentDiv(1)">
								</div>
								<div class="w3-col s4">
									<img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo $putanja ?>velicine.jpg" style="width:100%" onclick="currentDiv(2)">
								</div>
							</div>
						<?php }else{ ?>
							<img class="mySlides" src="<?php echo $putanja ?><?php echo $id ?>.jpg" style="width:100%">
							<div class="w3-row-padding w3-section">
								<div class="w3-col s4">
									<img class="demo w3-opacity w3-hover-opacity-off" src="<?php echo $putanja ?><?php echo $id ?>.jpg" style="width:100%" onclick="currentDiv(1)">
								</div>
							</div>
						<?php } ?>
							
				</div>
				<script>
					var slideIndex = 1;
					showDivs(slideIndex);

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
						 dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
					  }
					  x[slideIndex-1].style.display = "block";
					  dots[slideIndex-1].className += " w3-opacity-off";
					}
					
				</script>
			</div>
			 

			 
			  <!-- Right Column -->
			  <div class="right-column">
			 
				<!-- Product Description -->
				<div class="product-description">
					<span><a href="<?php echo $putanja_proizvodi ?>"><?php echo $vrsta_proizvoda ?></a></span>
					<h1><?php echo $title ?></h1>
					<p>Opis</p>
					
					<?php 
					
						if ($vrsta=='kratke' || $vrsta=='duge'){ ?>
							<ul>
								<li>Model: unisex </li>
								<li>100% pamuk</li>
								<li><?php echo $proizvod["Gramaza"]?> g/m2</li>
								<li>Perivo u perilici za rublje</li>
								<li>Print visoke kvalitete</li>
								<li>Boja: <?php echo $proizvod["Boja"] ?></li>
								<li>Natpis: <?php echo $proizvod["Natpis"] ?></li>
							</ul>						
							<?php }else{?>		
							<ul>
								<li>Keramička sublimacijska šalica</li>
								<li>Dimenzije:</li><ul>
									<li>visina 9,5 cm</li>
									<li>promjer 8 cm</li>
								</ul>
								<li>Zapremnina: 3 dcl"</li>
								<li>Perivo u perilici za suđe</li>
								<li>Print visoke kvalitete"</li>
								<li>Boja: <?php echo $proizvod["Boja"] ?></li>
								<li>Natpis: <?php echo $proizvod["Natpis"] ?></li>
							</ul>
							<?php } ?>
					
					
				</div>
			 
				<!-- Product Configuration -->
				<form id="form1" name="form1" method="post" action="kosarica.php">
					<div class="product-configuration">
				 
					   <!-- Veličine -->
					   <?php 
						
							if ($vrsta=='kratke' || $vrsta=='duge'){ ?>
							  <div class="velicine">
								<span>Veličine</span><br>
								<select onchange="changeUrl()" id="dropdown" class="" name="attribute_pa_velicina" data-attribute_name="attribute_pa_velicina" data-show_option_none="yes">
									<option value="">Odaberi opciju</option>
									<option value="s" class="attached enabled">S</option>
									<option value="m" class="attached enabled">M</option>
									<option value="l" class="attached enabled">L</option>
									<option value="xl" class="attached enabled">XL</option>
									<option value="xxl" class="attached enabled">XXL</option>
									<option value="xxxl" class="attached enabled">XXXL</option>
								</select> <br>
								
							  </div>
							  <script>
								  function changeUrl()
									{
									  var dropdown = document.getElementById("dropdown");
									  var link = document.getElementById("dodajukosaricu");
									  switch(dropdown.value){
										case "s":
											link.href ="cartAction.php?action=addToCart&id=<?php echo $id; ?>&velicina=S";
											break;
										case "m":
											link.href ="cartAction.php?action=addToCart&id=<?php echo $id; ?>&velicina=M";
											break;
										case "l":
											link.href ="cartAction.php?action=addToCart&id=<?php echo $id; ?>&velicina=L";
											break;
										case "xl":
											link.href ="cartAction.php?action=addToCart&id=<?php echo $id; ?>&velicina=XL";
											break;
										case "xxl":
											link.href ="cartAction.php?action=addToCart&id=<?php echo $id; ?>&velicina=XXL";
											break;
										case "xxxl":
											link.href ="cartAction.php?action=addToCart&id=<?php echo $id; ?>&velicina=XXXL";
											break;
									  }							  
									}
							  </script>	
							<?php } ?>
					  <br>
					  <!-- Količina -->
					  <div class="product-quantity">
						<span>Količina</span>
				 
						<div class="quantity">
							<input id="quantity" type="number" name="quantity" min="1">
						</div>
						<a href="https://www.posta.hr/hrvatska-posta-cjenik-online/262" target="_blank">Izračun okvirne cijene slanja pošiljke</a>
			
					  </div>
					  <script>
						function addqnt()
						  {
							var kolicina = document.getElementById("quantity").value;
							var link = document.getElementById("dodajukosaricu");
							link.href = link.href+"&kolicina="+kolicina;
						  }
					  </script>
					</div>
				</form>
				<!-- Cijena proizvoda -->
						<div class="product-price">
						  <span><?php echo $proizvod["Cijena"] ?> kn</span>
		  				<?php
							if (isset($_SESSION['korisnik'])) {?>
								<a id="dodajukosaricu" class="cart-btn value" href="cartAction.php?action=addToCart&id=<?php echo $id; ?>" onclick="addqnt()">Dodaj u košaricu</a>
								
							<?php } else { ?>
								<b>Za kupnju se morate prijaviti!</b>
							<?php } ?>
						</div>

						
						
						
			  </div>
			</div>
	</div>
	
	<footer class="container-fluid text-center foot">
		<p>Copyright 2018 &copy; Strongdor</p>
	</footer>
</body>
</html>
<?php }else{
		header('Location: index.php');
	}?>