<?php
require('../fpdf.php');



$pdf=new FPDF('L', 'mm', 'A4');
$pdf->Cell(40,10,'Hello World!');
$pdf->AddPage();
$pdf->Image('myscreenshot.png',-150,-49);
$pdf->Output();

?>
