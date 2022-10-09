<?php
require("fpdf184/fpdf.php");
$pdf=new FPDF();
//var_dump(get_class_methods($pdf));


$pdf->AddPage();
$pdf->Image('Priyanka.jpg');
$pdf->SetFont("Arial","B","20");
$pdf->Cell(0,10,"Priyanka Nigam",1,1,"C");
$pdf->SetFont("Arial","I","15");
$pdf->Cell(0,10,"Contact:  8932946515",1,1,"C");

$pdf->SetFont("Arial","B","20");
$pdf->write(5,"Hi, I'm a developer working in top Indian MNC - TCS .Having an experience of 1.5 years.Did graduation in the year 2020");

$pdf->Output();

?>