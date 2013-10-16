<!--
Sistema		:	Sistema de Gestion - DIDECO - Municipalidad de Colipulli.
Archivo		:	05funcionarios.php
Proposito	:	Funcionarios.
Autor			:	Felipe Morales Palacios
Viva Chile !
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<script language="javascript" type="text/javascript" src="../js/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="../js/codigo.js"></script>
	<link href="../css/estilo.css"rel="stylesheet" type="text/css" />
 	<link rel="SHORTCUT ICON" href="../img/favicon.ico" />
	<title>Sistema de Gesti&oacute;n Direcci&oacute;n De Desarrollo Comunitario - Municipalidad de Collipulli.</title>
	<meta name="author" content="Felipe Morales Palacios" />
	<meta name="description" content="Sistema de Gesti&oacute;n Direcci&oacute;n De Desarrollo Comunitario - Municipalidad de Collipulli." />
</head>
<?php
	include_once("cabecera.php");

	if(isset($_REQUEST["nperson"]))
	{
		if ((($_SESSION["txt_rangousuario"]) == "ADMINISTRADOR") || (($_SESSION["txt_rangousuario"]) == "DIRECTOR"))
		{
			header("location: 05z1funcionarios.php");				// Nuevo Funcionario
		}
		else 
		{
			header("location: noautorizado.php");
			//echo "<script>alert('No tiene Privilegios para Ver Todos los Funcionarios.')</script>";
		}		
	}
	
	if(isset($_REQUEST["vperson"]))
	{
		header("location: 05z3funcionarios.php");					// Ver Todos
	}
		
	if(isset($_REQUEST["lperson"]))
	{
		header("location: 05z4funcionarios.php");					// Imprimir
	}
?>	

<body>
	<br />
	<div align="center">
		<table width="1024" class="tres">
			<tr>
				<td width="80" align="center">
					<a href="principal.php">
						<img src="../img/home.png" width="30" height="30" alt="Home" longdesc="Home" />
					</a>	
				</td>
				<td>
					<h1>
						Funcionarios.
					</h1>		
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<form id="func" name="func" method="Post" action="<?=$_SERVER['PHP_SELF'];?>">
						<input type="submit" name="nperson" id="nperson" value="Nuevo Funcionario." class="botonmenu" />
						<input type="submit" name="vperson" id="vperson" value="Ver Todos." class="botonmenu" />
						<input type="submit" name="lperson" id="lperson" value="Imprimir." class="botonmenu" />						
					</form>		
				</td>
			</tr>
		</table>	
	</div>
	<br />
</body>

<?php
	include_once("pie.php")
?>
</html>