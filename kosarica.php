<?php
// initializ shopping cart class
include 'cart.php';
$cart = new Cart;
?>

<!DOCTYPE html>
<html lang="hr">
<head>
	<title>Košarica</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/kontakt.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
  
  
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
		<div id="mainKontakt">	
			<h1>Košarica</h1><br>
			<hr>
			<div class="container">
				<table class="table">
				<thead>
					<tr>
						<th>Naziv</th>
						<th>Vrsta</th>
						<th>Cijena</th>
						<th>Veličina</th>
						<th>Količina</th>
						<th>Ukupno</th>
						<th>&nbsp;</th>
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
						<td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
						<td><?php echo $item["subtotal"].' KN'; ?></td>
						<td>
							<a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-primary" onclick="return confirm('Jeste li sigurni?')"><i class="glyphicon glyphicon-trash"></i></a>
						</td>
					</tr>
					<?php } }else{ ?>
					<tr><td colspan="5"><p>Vaša košarica je prazna.....</p></td>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td><a href="index.php" class="cart-btn value"><i class="glyphicon glyphicon-menu-left"></i> Nastavite kupnju </a></td>
						<td colspan="4" align="right"><b>Sveukupno: </b></td>
						<?php if($cart->total_items() > 0){ ?>
						<td class="text-left"><strong><?php echo $cart->total().' KN'; ?></strong></td>
						<td><a href="naplata.php" class="cart-btn value">Naplata <i class="glyphicon glyphicon-menu-right"></i></a></td>
						<?php } ?>
					</tr>
				</tfoot>
				</table>
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
