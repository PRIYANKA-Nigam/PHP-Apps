<?php
require("C:\Users\Hp\Downloads\fpdf184/fpdf.php");
$pdf=new FPDF();
var_dump(get_class_methods($pdf));

$pdf->AddPage();
$pdf->Output();

?>