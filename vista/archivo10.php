<?php
	include 'plantilla.php';
	 $mysqli= new mysqli ("localhost","root","","arsama2");
 	if (mysqli_connect_error()){
 		echo 'Conexion Fallida : ', mysqli_connect_error();
 		exit();}
    $documento_usuario1=$_POST['documento_usuario1'];
    $documento_usuario2=$_POST['documento_usuario2'];
    $documento_usuario3=$_POST['documento_usuario3'];
    $documento_usuario4=$_POST['documento_usuario4'];
    $documento_usuario5=$_POST['documento_usuario5'];  
    $documento_usuario6=$_POST['documento_usuario6'];
    $documento_usuario7=$_POST['documento_usuario7'];
    $documento_usuario8=$_POST['documento_usuario8'];
    $documento_usuario9=$_POST['documento_usuario9'];
    $documento_usuario10=$_POST['documento_usuario10'];

	$pdf = new PDF('L','mm','A4'); 
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFillColor(133, 226, 141);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(30,6,'DOCUMENTO',1,0,'C',1);
	$pdf->Cell(30,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(30,6,'APELLIDO U',1,0,'C',1);
	$pdf->Cell(20,6,'SALA',1,0,'C',1);
	$pdf->Cell(25,6,'UBICACION',1,0,'C',1);
	$pdf->Cell(20,6,'ESTANTE',1,0,'C',1);
	$pdf->Cell(20,6,'FILA',1,0,'C',1);
	$pdf->Cell(25,6,'COLUMNA',1,1,'C',1);
	$pdf->SetFont('Arial','',10);


	if (empty($documento_usuario1)==false) {
    	$resultado1 = $mysqli->query("SELECT * FROM tblarchivo WHERE documento_usuario=$documento_usuario1");
 		while ($row = mysqli_fetch_assoc($resultado1)){
		$pdf->Cell(30,6,$row['documento_usuario'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['nombre_usuario']),1,0,'C');
		$pdf->Cell(30,6,$row['apellido_usuario'],1,0,'C');
		$pdf->Cell(20,6,$row['sala_archivo'],1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['ubicacion_archivo']),1,0,'C');
		$pdf->Cell(20,6,$row['estante_archivo'],1,0,'C');
	    $pdf->Cell(20,6,$row['fila_archivo'],1,0,'C');
		$pdf->Cell(25,6,$row['columna_archivo'],1,1,'C');}}
		if (empty($documento_usuario2)==false) {
    	$resultado2 = $mysqli->query("SELECT * FROM tblarchivo WHERE documento_usuario=$documento_usuario2");
		while ($row = mysqli_fetch_assoc($resultado2)){
		$pdf->Cell(30,6,$row['documento_usuario'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['nombre_usuario']),1,0,'C');
		$pdf->Cell(30,6,$row['apellido_usuario'],1,0,'C');
		$pdf->Cell(20,6,$row['sala_archivo'],1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['ubicacion_archivo']),1,0,'C');
		$pdf->Cell(20,6,$row['estante_archivo'],1,0,'C');
	    $pdf->Cell(20,6,$row['fila_archivo'],1,0,'C');
		$pdf->Cell(25,6,$row['columna_archivo'],1,1,'C');}}
		if (empty($documento_usuario3)==false) {
    	$resultado3 = $mysqli->query("SELECT * FROM tblarchivo WHERE documento_usuario=$documento_usuario3");
		while ($row = mysqli_fetch_assoc($resultado3)){
		$pdf->Cell(30,6,$row['documento_usuario'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['nombre_usuario']),1,0,'C');
		$pdf->Cell(30,6,$row['apellido_usuario'],1,0,'C');
		$pdf->Cell(20,6,$row['sala_archivo'],1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['ubicacion_archivo']),1,0,'C');
		$pdf->Cell(20,6,$row['estante_archivo'],1,0,'C');
	    $pdf->Cell(20,6,$row['fila_archivo'],1,0,'C');
		$pdf->Cell(25,6,$row['columna_archivo'],1,1,'C');}}
		if (empty($documento_usuario4)==false) {
    	$resultado4 = $mysqli->query("SELECT * FROM tblarchivo WHERE documento_usuario=$documento_usuario4");
		while ($row = mysqli_fetch_assoc($resultado4)){
		$pdf->Cell(30,6,$row['documento_usuario'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['nombre_usuario']),1,0,'C');
		$pdf->Cell(30,6,$row['apellido_usuario'],1,0,'C');
		$pdf->Cell(20,6,$row['sala_archivo'],1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['ubicacion_archivo']),1,0,'C');
		$pdf->Cell(20,6,$row['estante_archivo'],1,0,'C');
	    $pdf->Cell(20,6,$row['fila_archivo'],1,0,'C');
		$pdf->Cell(25,6,$row['columna_archivo'],1,1,'C');}}
		if (empty($documento_usuario5)==false) {
    	$resultado5 = $mysqli->query("SELECT * FROM tblarchivo WHERE documento_usuario=$documento_usuario5");
		while ($row = mysqli_fetch_assoc($resultado5)){
		$pdf->Cell(30,6,$row['documento_usuario'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['nombre_usuario']),1,0,'C');
		$pdf->Cell(30,6,$row['apellido_usuario'],1,0,'C');
		$pdf->Cell(20,6,$row['sala_archivo'],1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['ubicacion_archivo']),1,0,'C');
		$pdf->Cell(20,6,$row['estante_archivo'],1,0,'C');
	    $pdf->Cell(20,6,$row['fila_archivo'],1,0,'C');
		$pdf->Cell(25,6,$row['columna_archivo'],1,1,'C');}}
		if (empty($documento_usuario6)==false) {
    	$resultado6 = $mysqli->query("SELECT * FROM tblarchivo WHERE documento_usuario=$documento_usuario6");
		while ($row = mysqli_fetch_assoc($resultado6)){
		$pdf->Cell(30,6,$row['documento_usuario'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['nombre_usuario']),1,0,'C');
		$pdf->Cell(30,6,$row['apellido_usuario'],1,0,'C');
		$pdf->Cell(20,6,$row['sala_archivo'],1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['ubicacion_archivo']),1,0,'C');
		$pdf->Cell(20,6,$row['estante_archivo'],1,0,'C');
	    $pdf->Cell(20,6,$row['fila_archivo'],1,0,'C');
		$pdf->Cell(25,6,$row['columna_archivo'],1,1,'C');}}
		if (empty($documento_usuario7)==false) {
    	$resultado7 = $mysqli->query("SELECT * FROM tblarchivo WHERE documento_usuario=$documento_usuario7");
		while ($row = mysqli_fetch_assoc($resultado7)){
		$pdf->Cell(30,6,$row['documento_usuario'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['nombre_usuario']),1,0,'C');
		$pdf->Cell(30,6,$row['apellido_usuario'],1,0,'C');
		$pdf->Cell(20,6,$row['sala_archivo'],1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['ubicacion_archivo']),1,0,'C');
		$pdf->Cell(20,6,$row['estante_archivo'],1,0,'C');
	    $pdf->Cell(20,6,$row['fila_archivo'],1,0,'C');
		$pdf->Cell(25,6,$row['columna_archivo'],1,1,'C');}}
		if (empty($documento_usuario8)==false) {
    	$resultado8 = $mysqli->query("SELECT * FROM tblarchivo WHERE documento_usuario=$documento_usuario8");
		while ($row = mysqli_fetch_assoc($resultado8)){
		$pdf->Cell(30,6,$row['documento_usuario'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['nombre_usuario']),1,0,'C');
		$pdf->Cell(30,6,$row['apellido_usuario'],1,0,'C');
		$pdf->Cell(20,6,$row['sala_archivo'],1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['ubicacion_archivo']),1,0,'C');
		$pdf->Cell(20,6,$row['estante_archivo'],1,0,'C');
	    $pdf->Cell(20,6,$row['fila_archivo'],1,0,'C');
		$pdf->Cell(25,6,$row['columna_archivo'],1,1,'C');}}
		if (empty($documento_usuario9)==false) {
    	$resultado9 = $mysqli->query("SELECT * FROM tblarchivo WHERE documento_usuario=$documento_usuario9");
		while ($row = mysqli_fetch_assoc($resultado9)){
		$pdf->Cell(30,6,$row['documento_usuario'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['nombre_usuario']),1,0,'C');
		$pdf->Cell(30,6,$row['apellido_usuario'],1,0,'C');
		$pdf->Cell(20,6,$row['sala_archivo'],1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['ubicacion_archivo']),1,0,'C');
		$pdf->Cell(20,6,$row['estante_archivo'],1,0,'C');
	    $pdf->Cell(20,6,$row['fila_archivo'],1,0,'C');
		$pdf->Cell(25,6,$row['columna_archivo'],1,1,'C');}}
		if (empty($documento_usuario10)==false) {
    	$resultado10 = $mysqli->query("SELECT * FROM tblarchivo WHERE documento_usuario=$documento_usuario10");
		while ($row = mysqli_fetch_assoc($resultado10)){
		$pdf->Cell(30,6,$row['documento_usuario'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['nombre_usuario']),1,0,'C');
		$pdf->Cell(30,6,$row['apellido_usuario'],1,0,'C');
		$pdf->Cell(20,6,$row['sala_archivo'],1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['ubicacion_archivo']),1,0,'C');
		$pdf->Cell(20,6,$row['estante_archivo'],1,0,'C');
	    $pdf->Cell(20,6,$row['fila_archivo'],1,0,'C');
		$pdf->Cell(25,6,$row['columna_archivo'],1,1,'C');}}

	$pdf->Output();
?>