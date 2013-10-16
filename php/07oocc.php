<!--
Sistema		:	Sistema de Gestion - DIDECO - Municipalidad de Colipulli.
Archivo		:	07oocc.php
Proposito	:	Organizaciones Comunitarias.
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
	<meta name="author" content="Felipe Morales P" />
	<meta name="description" content="Sistema de Gesti&oacute;n Direcci&oacute;n De Desarrollo Comunitario - Municipalidad de Collipulli." />
</head>
<?php
	include_once("conexion.php");
	include_once("cabecera.php");
	$link	= conexion();

	if((($_SESSION["txt_rangousuario"]) == "PROFESIONAL") || (($_SESSION["txt_rangousuario"]) == "BODEGUERO") || (($_SESSION["txt_rangousuario"]) == "CONDUCTOR") || (($_SESSION["txt_rangousuario"]) == "ADMINISTRATIVO"))
	{
		header("location: noautorizado.php");
	}

	if(isset($_REQUEST["newoocc"]))
	{
		header("location: 07z1oocc.php");
	}
	
	if(isset($_REQUEST["modoocc"]))
	{
		header("location: 07z2oocc.php");
	}

	if(isset($_REQUEST["veroocc"]))
	{
		header("location: 07z3oocc.php");
	}
	
?>

<body>
	<br />
	<div align="center">
	<form id="oocc" name="oocc" method="Post" action="<?=$_SERVER['PHP_SELF'];?>">
		<table width="1024" class="tres">
			<tr>
				<td width="80" align="center">
					<a href="principal.php">
						<img src="../img/home.png" width="30" height="30" alt="Home" longdesc="Home" />
					</a>	
				</td>
				<td>
					<h1>
						Organizaciones Comunitarias.
					</h1>		
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="newoocc" id="newoocc" value="Nueva." class="botonmenu" />
					<input type="submit" name="modoocc" id="modoocc" value="Modificar." class="botonmenu" />
					<input type="submit" name="veroocc" id="veroocc" value="Ver." class="botonmenu" />
				</td>
			</tr>
		</table>	
	</form>
	</div>
	<br />
</body>

<?php
	include_once("pie.php")
?>
</html>