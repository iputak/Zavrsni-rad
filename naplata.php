<?php
// include database configuration file
include 'spajanje_s_bazom.php';

// initializ shopping cart class
include 'cart.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: index.php");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = 1;

// get customer details by session customer ID
?>
<!DOCTYPE html>
<html lang="hr">
<head>
  <title>Naplata</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/kontakt.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
    .table{width: 65%;float: left;}
    .footBtn{width: 95%;float: left;}
    .orderBtn {float: right;}
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
		<div id="mainNaplata">	
			<h1>Naplata</h1> <br>
			<hr>
			<form method="POST">
			<div class="row">
				<div class="col-75">
					<div class="container">
						<div class="row">
							

							<div class="col-50">
								
								<h3>Adresa naplate</h3>
								<label for="firstname"><i class="fa fa-user"></i> Ime i prezime</label>
								<input type="text" name="DINAMO" placeholder="Upišite ime i prezime">
							<label for="email"><i class="fa fa-envelope"></i> Email</label>
								<input type="text" id="email" name="email" placeholder="ivan.horvat@primjer.hr">
								<label for="adr"><i class="fa fa-address-card-o"></i> Adresa</label>
								<input type="text" id="address" name="address" placeholder="Upišite kućnu adresu">
								<label for="city"><i class="fa fa-institution"></i> Grad</label>
								<input type="text" id="city" name="city" placeholder="Upišite grad">

								<div class="row">
									<div class="col-50">
										<label for="state">Država</label>
										<input type="text" id="state" name="state" placeholder="Upišite državu">
									</div>
									<div class="col-50">
										<label for="zip">Poštanski broj</label>
										<input type="text" id="zip" name="zip" placeholder="Upišite poštanski broj">
									</div>
								</div>
								
							</div>
							
							<div class="col-50">
								<h3>Metode plačanja</h3>
								<form name="myForm1" id="myForm1">
									<input type="radio" value="Para1" name="showPara" onClick="ShowParagraph(this);" />Direktna bankovna transakcija<br>
									<p id="Para1" style="display:none;">Molimo pričekajte s plaćanjem dok Vas ne kontaktiramo i potvrdimo narudžbu. Zatim uplatite direktno na naš račun u banci. Vaša narudžba neće biti isporučena dok sredstva ne budu vidljiva na našem računu.</p>
									<input type="radio" value="Para2" name="showPara" onClick="ShowParagraph(this);" />Plaćanje prilikom preuzimanja<br>						
									<p id="Para2" style="display:none;">Plaćanje gotovinom prilikom dostave.</p>
								</form>
									
	
							</div>
							
						</div>
						
						
					</div>
				  </div>

				  <div class="col-25">
						<div class="container">
							<h4>Košarica</h4>
							<table class="table">
								<thead>
									<tr>
										<th>Naziva</th>
										<th>Vrsta</th>
										<th>Cijena</th>
										<th>Veličina</th>
										<th>Količina</th>
										<th>Ukupno</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if($cart->total_items() > 0){
										//get cart items from session
										$cartItems = $cart->contents();
										foreach($cartItems as $item){
									?>
									<tr>
										<td><?php echo $item["name"]; ?></td>
										<td><?php echo $item["vrsta"]; ?></td>
										<td><?php echo $item["price"].' KN'; ?></td>
										<td><?php echo $item["size"]; ?></td>
										<td><?php echo $item["qty"]; ?></td>
										<td><?php echo $item["subtotal"].' KN'; ?></td>
									</tr>
									<?php } }else{ ?>
									<tr><td colspan="4"><p>Nema proizvoda u košarici......</p></td>
									<?php } ?>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="5"></td>
										<?php if($cart->total_items() > 0){ ?>
										<td class="text-center"><strong>Sveukupno: <?php echo $cart->total().' KN'; ?></strong></td>
										<?php } ?>
									</tr>
								</tfoot>
							</table>
							<div class="footBtn">
								<label>Pročitao sam i prihvaćam <a href="uvjetiposlovanja.php" target="_blank">uvjete poslovanja</a> <input type="checkbox" id="myCheck" onclick="prikazgumba()"> 
								</label>
								<p id="text3" style="display:none"><a href="cartAction.php?action=pdfRacun" type="submit" name="submit" class="btn btn-success orderBtn">Završetak <i class="glyphicon glyphicon-menu-right"></i></a></p>

						</form>	
								<script>
									function prikazgumba() {
										var checkBox = document.getElementById("myCheck");
										var text = document.getElementById("text");
										if (checkBox.checked == true){
											text3.style.display = "block";
										} else {
										   text3.style.display = "none";
										}
										
									}
									
									function ShowParagraph(obj){
										if(obj.value == "Para1"){
											document.getElementById('Para1').style.display = '';
											document.getElementById('Para2').style.display = 'none';
										}
										else if(obj.value == "Para2"){
											document.getElementById('Para2').style.display = '';
											document.getElementById('Para1').style.display = 'none';
										}
										else{
											document.getElementById('Para1').style.display = 'none';
											document.getElementById('Para2').style.display = 'none';
										}
									}
								</script>
								<a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Nastavite kupnju </a>
								
							</div>
						</div>
					</div>
				</div>
			
		</div>
	</div>
	
	<footer class="container-fluid text-center foot">
		<p>Copyright 2018 &copy; Strongdor</p>
	</footer>
</body>
</html>
