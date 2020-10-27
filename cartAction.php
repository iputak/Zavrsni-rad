<?php
// initialize shopping cart class
include 'cart.php';
$cart = new Cart;

// include database configuration file
include 'spajanje_s_bazom.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
	
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){
		
        $productID = $_REQUEST['id'];
		$email = $_REQUEST['email'];
		$adresa = $_REQUEST['address'];
		$grad = $_REQUEST['city'];
		$drzava = $_REQUEST['state'];
		$pb = $_REQUEST['zip'];
		
        // get product details
        $query = $link->query("SELECT * FROM proizvodi WHERE id = ".$productID);
        $row = $query->fetch_assoc();
		if($row['Vrsta']=='salice'){
			$velicina='';
		}
		else{
			$velicina=$_REQUEST['velicina'];
		}
        $itemData = array(
            'id' => $row['Id'],
            'name' => $row['Naziv'],
            'vrsta' => $row['Vrsta'],
            'price' => $row['Cijena'],
            'qty' => $_REQUEST['kolicina'],
			'size' => $velicina
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'kosarica.php':'index.php';

        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
			'size' => $velicina,
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: kosarica.php");
		/***PDF***/
    }elseif($_REQUEST['action'] == 'pdfRacun' && $cart->total_items() > 0){

			$nacinplacanja='Plaćanje prilikom preuzimanja';
			//$imePrezime = $_POST['DINAMO'];
			$imePrezime = 'Ivan Putak';
			$email2 ='iputak@hotmail.com';
			$adresa2 ='Kućanec, Gračaki 16';
			$postanskibroj ='10360';
			$grad2 ='Zagreb';
			
			//$email2 = $_REQUEST['firstname'];   // kod pokušaja dohvaćanja podataka iz forme koja se nalazi u naplata.php dolazi do greške koja je prikazana na slici 1*/ 
			$output = ''; 
			$cartItems = $cart->contents();
			foreach($cartItems as $item){
			$output .= '<tr>
					<td>'.$item["name"].'</td>
					<td>'.$item["vrsta"].'</td>
					<td>'.$item["price"].'</td>
					<td>'.$item["size"].'</td>
					<td>'.$item["qty"].'</td>
					<td>'.$item["subtotal"].'</td>
				</tr>
			'; }
			
			
			require_once('tcpdf/tcpdf.php'); 
			class MYPDF extends TCPDF {

				//Page header
				public function Header() {
					
					// Set font
					$this->SetFont('helvetica', 'B', 20);

					$this->ImageSVG($file='Slike/header/logo.svg', $x=15, $y=12, $w='', $h=28, $link='', $align='L', $palign='', $border=0, $fitonpage=false);
									
				}

				// Page footer
				public function Footer() {
					// Position at 15 mm from bottom
					$this->SetY(-15);
					// Set font
					$this->SetFont('helvetica', 'I', 8);
					// Page number
					$this->Cell(0, 10, 'Stranica '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
				}
			}
			
			
			
			$obj_pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false); 
			$obj_pdf->SetCreator(PDF_CREATOR); 
			$obj_pdf->SetTitle("Predračun"); 
			$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING); 
			$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN)); 
			$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA)); 
			$obj_pdf->SetDefaultMonospacedFont('freeserif'); 
			// margine
			$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '1', PDF_MARGIN_RIGHT); 
			$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
			$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			
			$obj_pdf->setPrintHeader(true); 
			$obj_pdf->setPrintFooter(true); 
			$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM); 
			// set image scale factor
			$obj_pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
			// set font
			$obj_pdf->SetFont('freeserif', '', 12); 
			// add a page
			$obj_pdf->AddPage(); 
			$content = ''; 
			$content .= ' 
			<h3 align="center">Proizvodi</h3><br /><br /> 
			<table border="1" cellspacing="0" cellpadding="5"> 
			<tr> 
			<th width="25%">Naziv</th> 
			<th width="14%">Vrsta</th> 
			<th width="14%">Cijena (kn)</th> 
			<th width="12%">Veličina</th> 
			<th width="14%">Količina</th>
			<th width="16%">Ukupno (kn)</th> 			
			</tr> 
			'; 
			$content .= $output;
			$content .= '</table>'; 
			$content .= ' 
			<table border="0" cellspacing="0" cellpadding="5"> 
			<tr>  
			<th width="80%" align="right" >Sveukupno:</th>
			<th width="20%" >'.$cart->total().' kn</th> 
			
			</tr> 
			'; 
			$content .= '</table>';
			$tbl1 = '
					<br /><br /><br />
					<table border="0" cellspacing="0" margin-top="5" cellpadding="0"> 
						<tr> 
						<th width="75%"></th> 
						<th width="25%"><b>STRONGDOR D.O.O.</b></th> 			
						</tr> 
						<tr> 
						<th width="75%"></th> 
						<th width="25%">Klaićeva 7</th> 			
						</tr> 
						<tr> 
						<th width="75%"></th> 
						<th width="25%">10 000 Zagreb, Hrvatska</th> 			
						</tr> 
						<tr> 
						<th width="75%"></th> 
						<th width="25%">T: (01) 1488 828</th> 			
						</tr> 
						<tr> 
						<th width="75%"></th> 
						<th width="25%">Email: strongor@outlook.com</th> 			
						</tr> 

					</table><br /><hr><br />'; 
			$datum = date('j.m.Y.'); 
			$vrijeme = date('H:i:s'); 
						$imePrezime = 'Ivan Putak';

			/*$nacinplacanja='Plaćanje prilikom preuzimanja';
			$imePrezime = 'Ivan Putak';
			$email2 ='iputak@hotmail.com';
			$adresa2 ='Kućanec, Gračaki 16';
			$postanskibroj ='10360';
			$grad2 ='Zagreb'; */

			//$email2 = $_REQUEST['firstname'];   // kod pokušaja dohvaćanja podataka iz forme koja se nalazi u naplata.php dolazi do greške koja je prikazana na slici 1*/ 

			$tbl2 = '
					<table border="0" cellspacing="0" cellpadding="5"> 
						<tr> 
						<th width="74%"><b>PREDRAČUN</b></th> 
						<th width="26%"><b>PODACI NAPLATE</b></th> 			
						</tr> 
						<tr> 
						<th width="17%">Datum:</th>
						<th width="57%">'.$datum.'</th> 
						<th width="26%">'.$imePrezime.'</th> 			
						</tr> 
						<tr> 
						<th width="17%">Vrijeme:</th>
						<th width="57%">'.$vrijeme.'</th> 
						<th width="26%">'.$email2.'</th> 			
						</tr> 
						<tr> 
						<th width="17%">Način plaćanja:</th>
						<th width="57%">'.$nacinplacanja.'</th> 
						<th width="26%">'.$adresa2.'</th> 			
						</tr> 
						<tr> 
						<th width="74%"></th> 
						<th width="26%">'.$postanskibroj.', '.$grad2.'</th> 			
						</tr> 

					</table>';
							
			$tekst='<br /><p style="font-size:80%;">Predračun se izdaje u elektronskom obliku i valjan je bez pečata i potpisa.<br />Uplatu izvršiti na IBAN broj računa: HR96 1234 5678 9012 34567, poziv na broj xx </p><br />';
			$obj_pdf->writeHTML($tbl1);
			$obj_pdf->writeHTML($tbl2);
			$obj_pdf->writeHTML($content); 
			$obj_pdf->writeHTML($tekst);
			
			

			
			
			
			
			$obj_pdf->Output('sample.pdf', 'I'); 
		
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}