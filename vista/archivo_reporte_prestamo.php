<?php
	include 'plantilla_reporte_prestamo.php';
	 $mysqli= new mysqli ("localhost","root","","arsama2");
 	if (mysqli_connect_error()){
 		echo 'Conexion Fallida : ', mysqli_connect_error();
 		exit();}
$pdf = new PDF('L','mm','A4'); 
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFillColor(133, 226, 141);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(25,6,'DOCUMENTO',1,0,'C',1);
	$pdf->Cell(20,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(20,6,'APELLIDO',1,0,'C',1);
	$pdf->Cell(15,6,'SALA',1,0,'C',1);
	$pdf->Cell(22,6,'UBICACION',1,0,'C',1);
	$pdf->Cell(20,6,'ESTADO',1,0,'C',1);
	$pdf->Cell(30,6,'FECHA INGRESO',1,0,'C',1);
	$pdf->Cell(40,6,'FIRMA RESPONSABLE',1,1,'C',1);
	$pdf->SetFont('Arial','',10);
	$result = $mysqli->query("SELECT * FROM tblarchivo WHERE estado_archivo='prestamo'");
	while ($row = mysqli_fetch_assoc($result)){
		$pdf->Cell(25,6,$row['documento_usuario'],1,0,'C');
		$pdf->Cell(20,6,$row['nombre_usuario'],1,0,'C');
		$pdf->Cell(20,6,$row['apellido_usuario'],1,0,'C');
		$pdf->Cell(15,6,$row['sala_archivo'],1,0,'C');
		$pdf->Cell(22,6,$row['ubicacion_archivo'],1,0,'C');
		$pdf->Cell(20,6,$row['estado_archivo'],1,0,'C');
		$pdf->Cell(30,6,$row['fecha_ingreso'],1,0,'C');
		$pdf->Cell(40,6,'',1,1,'C');
		
	}
 		
 		$pdf->Output();