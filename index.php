<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('fpdf/img/logo.png',-2,8,220);
    $this->Ln(20);
    // Arial bold 15
    $this->SetFont('Arial','B',9);
    // Movernos a la derecha
    // $this->Cell(0);
    // COLORES
    $this->SetDrawColor(255, 255, 255 );
    $this->SetFillColor(145, 199, 178);
    $this->SetTextColor(255, 255, 255 );
    // Título
    $this->Cell(190,8,'PROYECCION DE EVENTOS Y MEDIDAS',1,1,'C',1);
    $this->Cell(10,5,'N',1,0,'C',1);
    $this->Cell(25,5,'LUGAR',1,0,'C',1);
    $this->Cell(25,5,'HORA',1,0,'C',1);
    $this->Cell(30,5,'MEDIDAS',1,0,'C',1);
    $this->Cell(50,5,'ORGANIZACION',1,0,'C',1);
    $this->Cell(50,5,'DEMANDAS/ACTIVIDADES',1,0,'C',1);
    $this->Cell(120,5,'ACCION Y CONVOCATORIA',1,0,'C',1);
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Output();
?>