<!--
Sistema		:	Sistema de Gestion - DIDECO - Municipalidad de Colipulli.
Archivo		:	02ayudas.php
Proposito	:	Ayudas Sociales.
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
	include_once("cabecera.php");
	if((($_SESSION["txt_rangousuario"]) == "ENCARGADO PROGRAMA")	|| (($_SESSION["txt_rangousuario"]) == "PROFESIONAL") || (($_SESSION["txt_rangousuario"]) == "BODEGUERO") || (($_SESSION["txt_rangousuario"]) == "CONDUCTOR") || (($_SESSION["txt_rangousuario"]) == "ADMINISTRATIVO") || (($_SESSION["txt_rangousuario"]) == "ALCALDE"))
	{
		header("location: noautorizado.php");
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
						Ayudas Sociales.
					</h1>		
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<form id="ayudas" name="ayudas" method="Post" action="<?=$_SERVER['PHP_SELF'];?>">
						<input type="submit" name="aayuda" id="aayuda" value="Asignar." class="botonmenu" />
						<input type="submit" name="cayuda" id="cayuda" value="Clase / Tipo." class="botonmenu" />
						<input type="submit" name="vayuda" id="vayuda" value="Ver." class="botonmenu" />
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