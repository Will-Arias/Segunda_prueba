<?php
	
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF 
	{
		function Header()
		{
			$fecha=date("Y-m-d");
			$this->SetFont('Arial','I',12);
			$this->Cell(30);
			$this->Image('../modelo/img/Logo-Centro-medico.png', 10, 5, 80 );
			$this->Cell(200,0, 'Reporte archivos prestamo',0,0,'C');
			$this->Cell(10,0, 'IPS: Centro medico La Samaritana',0,0,'C');
			$this->Cell(-20,20, 'Fecha Solicitud: '.$fecha,0,0,'C');
			$this->SetFont('Arial','B',15);
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,5, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>