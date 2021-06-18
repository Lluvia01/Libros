<?php
	require('../pdf/fpdf.php');

	class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../vistas/img/JuanREscudero.png',20,5,33);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
	$this->Cell(70,10,'Escuela primaria Juan R. Escudero',0,1,'C');
	$this->Cell(190,10,'Libros del rincon',0,0,'C');
    // Salto de línea
    $this->Ln(10);
}

}
require ('../conexion.php');
$id=$_REQUEST['id'];
$showP="SELECT * FROM prestamos, alumnos, libros WHERE id_p='$id' && id_libro=id_lib && No_alu=id_alu ORDER BY id_p";
$res=$conexion->query($showP);

	$pdf = new PDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','',12);

while($row=$res->fetch_assoc()){	
	$pdf->Cell(100,10, );
	$pdf->Cell(15,10,utf8_decode('Fecha:'));
	$pdf->Cell(50,10, $row['fecha_prestamo']);
	$pdf->Cell(15,10,utf8_decode('Folio:'));
	$pdf->Cell(10,10, $id,0,1);

	$pdf->Cell(20,10,utf8_decode('Nombre:'));
	$pdf->Cell(20,10, $row['Nombre_alu']);
	$pdf->Cell(20,10, $row['Apellido_P']);
	$pdf->Cell(20,10, $row['Apellido_M'],0,1);
	$pdf->Cell(30,10, utf8_decode('Grado y grupo:'));
	$pdf->Cell(10,10, $row['grado_grupo'],0,1);
	
	$pdf->Cell(30,10, utf8_decode('Id libro:'), 1,0,'C');
	$pdf->Cell(100,10, utf8_decode('Titulo'), 1,0,'C');
	$pdf->Cell(50,10, utf8_decode('Fecha de entrega:'), 1,1,'C');

	$pdf->Cell(30,10, $row['id_libro'],1,0,'C');
	$pdf->Cell(100,10, $row['titulo'],1,0,'C');
	$pdf->Cell(50,10, $row['fecha_entrega'],1,1,'C');
	
	$pdf->Output();
}
?>