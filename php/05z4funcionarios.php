<!--
Sistema		:	Sistema de Gestion - DIDECO - Municipalidad de Colipulli.
Archivo		:	05z4funcionarios.php
Proposito	:	Imprimir Todos, Listado.
Autor			:	Felipe Morales Palacios.
Viva Chile !
-->
<?php
	include_once("conexion.php");
	require('../fpdf/fpdf.php');
	$link			= conexion();
	$myconsulta = "SELECT CONCAT(RUT_FUNC,'-',DV_FUNC) AS RUT,CONCAT(PATERNO_FUNC,' ',MATERNO_FUNC,' ',NOMBRE_FUNC) AS NOMBRE,
						EMAIL_FUNC FROM FUNCIONARIOS ORDER BY NOMBRE";
	$myresultado = mysql_query($myconsulta,$link);
	$myregistro = mysql_num_rows($myresultado);
	if ($myresultado > 0)
	{
		ob_end_clean();
		class PDF extends FPDF
		{
			function Header()
			{
				$this->Image('../img/escudo.png',10,8,15);
				$this->SetFont('Arial','B',15);
				$this->Cell(193,10,'Registro de Funcionarios Dideco.',0,0,'C');
				$this->Ln(10);
				$this->SetFont('Times','',12);
				$this->SetLeftMargin(10);
				$this->Cell(193,5,date("d/m/Y"),0,0,'R');
				$this->Ln(15);
	 			$this->Cell(23,5,'RUT.','TB',0,"L");
	 			$this->Cell(100,5,'NOMBRE.','TB',0,"L");
	 			$this->Cell(70,5,'CORREO ELECTRONICO.','TB',0,"L");
	 			$this->Ln(05);
			}
			function Footer()
			{
				$this->SetY(-15);
				$this->SetFont('Arial','I',8);
				$this->Cell(193,10,'Municipalidad de Collipulli - Dirección de Desarrollo Comunitario.','T',1,'C');
			}
		}
		$pdf = new PDF('P','mm','Letter');
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Times','',12);
		$pdf->SetLeftMargin(10);
		while($registro = mysql_fetch_row($myresultado))
		{
			$pdf->Cell(23,5,$registro[0],0,0,'R');
			$pdf->Cell(100,5,$registro[1],0,0,'L');
			$pdf->Cell(70,5,$registro[2],0,0,'L');
			$pdf->Ln(05);
		}
		$pdf->ln(05);
		$pdf->Cell(193,5,'Total de Registros : '.$myregistro,'TB',0,"L");
		$pdf->Output();
	}
	else
	{
		echo "<script>alert('No se encontraron registros.')</script>";
	}
?>