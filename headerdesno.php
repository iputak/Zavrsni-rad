<?php
	include('spajanje_s_bazom.php');
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	if (isset($_SESSION['korisnik'])) {
		$username = $_SESSION['korisnik'];
		
		}
	?>
<div class="headerdesno">
	
	<?php
	if (isset($_SESSION['korisnik'])) {?>
		<ul class="nav navbar-nav navbar-right">
			<table>
				<tr>
					<th rowspan="2"><a href="kosarica.php"><span class="glyphicon glyphicon-shopping-cart" $nbsp;$nbsp;>  </span></a></th>
					<td>Dobrodošli: <?php echo $username ?></td>
				  </tr>
				  <tr>
					<td><a href="logout.php">Odjava</a></td>
				</tr>				
			</table>
		</ul>
	<?php } else { ?>		
			<ul class="nav navbar-nav navbar-right">
            <li class="dropdown shadow">
                <a href="registriranje.php"><span class="glyphicon glyphicon-user"></span> Registracija </span></a>               
            </li>
			<li class="dropdown shadow">
                <a href="prijava.php"><span class="glyphicon glyphicon-log-in"></span> Prijava </span></a>               
            </li>            
        </ul>
		<?php } ?>
</div>