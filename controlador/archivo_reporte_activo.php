<?php
	include 'pantilla_reporte_activos.php';
	 $mysqli= new mysqli ("localhost","root","","arsama2");
 	if (mysqli_connect_error()){
 		echo 'Conexion Fallida : ', mysqli_connect_error();
 		exit();}
 		$estado_archivo="activo";
$pdf = new PDF('L','mm','A4'); 
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(30,6,'DOCUMENTO',1,0,'C',1);
	$pdf->Cell(30,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(25,6,'APELLIDO',1,0,'C',1);
	$pdf->Cell(35,6,'SALA',1,0,'C',1);
	$pdf->Cell(40,6,'UBICACION',1,0,'C',1);
	$pdf->Cell(40,6,'ESTANTE',1,0,'C',1);
	$pdf->Cell(40,6,'FILA',1,0,'C',1);
	$pdf->Cell(40,6,'COLUMNA',1,0,'C',1);
	$pdf->Cell(40,6,'ESTADO',1,0,'C',1);
	$pdf->Cell(40,6,'FECHA INGRESO',1,0,'C',1);
	$pdf->Cell(40,6,'FECHA VENCIMIENTO',1,0,'C',1);
	$pdf->Cell(40,6,'FECHA DESRUCCION',1,1,'C',1);
	$pdf->SetFont('Arial','',10);
	$resultado1 = $mysqli->query("SELECT * FROM tblarchivo WHERE estado_archivo=$estado_archivo");
	while ($row = mysqli_fetch_assoc($resultado1)){
		$pdf->Cell(30,6,$row['documento_usuario'],1,0,'C');
		$pdf->Cell(30,6,$row['nombre_usuario'],1,0,'C');
		$pdf->Cell(25,6,$row['apellido_usuario'],1,0,'C');
		$pdf->Cell(35,6,$row['sala_archivo'],1,0,'C');
		$pdf->Cell(40,6,$row['ubicacion_archivo'],1,0,'C');
		$pdf->Cell(40,6,$row['estante_archivo'],1,0,'C');
		$pdf->Cell(40,6,$row['fila_archivo'],1,0,'C');
		$pdf->Cell(40,6,$row['columna_archivo'],1,0,'C');
		$pdf->Cell(40,6,$row['estado_archivo'],1,0,'C');
		$pdf->Cell(40,6,$row['fecha_ingreso'],1,0,'C');
		$pdf->Cell(40,6,$row['fecha_vencimiento'],1,0,'C');
		$pdf->Cell(40,6,$row['fecha_destruccion'],1,1,'C');
	}
 		
 		$pdf->Output();