<?php 
require('fpdf/fpdf.php');
include "../../core/produitC.php";
$produitC=new ProduitC();
$listeproduit=$produitC->afficherProduits();



//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm
$pdf = new  FPDF('P','mm','A4');

$pdf->AddPage();
$pdf->Image('Graphique.png',10,10,-600);
 $pdf->SetFont('Arial','I',12);

 $pdf->SetTextColor(199, 44, 72);
$pdf->Cell(0 ,10,'Point Sport',1,1,"C");
//$pdf->Cell(100  ,5,'Point SPORT',0,0);

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','I',15);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130  ,20,'',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','I',12);
 $pdf->SetTextColor(55, 0, 40);
$pdf->Cell(130  ,5,'Petite Ariane ',0,0);
$pdf->Cell(59 ,5,'',0,1);//end of line
 
$pdf->Cell(130  ,5,'Grande Tunis',0,0);
$pdf->Cell(25 ,5,'Date',0,0);
$date= date('Y-m-d');
$pdf->Cell(5  ,5,$date,0,1);//end of line

$pdf->Cell(130  ,5,'Phone : 28 111 800',0,0);
$pdf->Cell(130  ,5,'Fax   : 71 455 395 ',0,0);


//make a dummy empty cell as a vertical spacer
$pdf->Cell(189  ,30,'',0,1);//end of line


//invoice contents
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(4, 139, 154);

$pdf->Cell(50 ,5,'RF',1,0);
$pdf->Cell(50 ,5,'NOM',1,0);

$pdf->Cell(50 ,5,'CATEGORIE',1,0);
$pdf->Cell(30 ,5,'PRIX',1,1);//end of line

$total=0;
foreach ($listeproduit as $row) {
  
  $RF=$row['ref_prod'];
  $NOM=$row['nom_prod'];
  $PRIX=$row['prix_prod'];
  $CATEGORIE=$row['cat'];
   $src=$row['src'];
 $image="$src"."png";
  $pdf->SetFont('Arial','I',10);
  $pdf->SetTextColor(55, 0, 40);

  $pdf->Cell(50 ,5,$RF,1,0);
  $pdf->Cell(50 ,5,$NOM ,1,0);
  $pdf->Cell(50 ,5,$CATEGORIE ,1,0);
  $pdf->Cell(30 ,5,$PRIX ,1,1,'R');
 
}


$pdf->Output();
 
 ?>  

 