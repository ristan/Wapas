<!--
Sistema		:	Sistema de Gestion - DIDECO - Municipalidad de Colipulli.
Archivo		:	principal.php
Proposito	:	Pantalla Principal.
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
?>
<body>
	<br />
	<div align="center">
		<table class="tres" width="1024">
			<tr>
				<td colspan="5" height="20">
				</td>
			</tr>
			<tr>
				<td align="center" width="200" valign="top">
					<a href="01atencion.php">					
						<img src="../img/01atencion.png" width="150" height="150" alt="Atencion" longdesc="Atencion" class="tres" />
					</a>
					<h3>Atenci&oacute;n Usuarios.</h3>
				</td>
				<td align="center" width="200" valign="top">
					<a href="02ayudas.php">	
						<img src="../img/02ayudas.png" width="150" height="150" alt="Ayudas" longdesc="Ayudas" class="tres" />
					</a>
					<h3>Ayudas Sociales.</h3>
				</td>
				<td align="center" width="200" valign="top">
					<a href="03bodega.php">
						<img src="../img/03bodega.png" width="150" height="150" alt="Bodega" longdesc="Bodega" class="tres" />
					</a>
					<h3>Bodega.</h3>
				</td>
				<td align="center" width="200" valign="top">
					<a href="04correspondencia.php">	
						<img src="../img/04correspondencia.png" width="150" height="150" alt="Correspondencia" longdesc="Correspondencia" class="tres" />
					</a>
					<h3>Correspondencia.</h3>
				</td>
				<td align="center" width="200" valign="top">
					<a href="05funcionarios.php">	
						<img src="../img/05funcionarios.png" width="150" height="150" alt="Funcionarios" longdesc="Funcionarios" class="tres" />
					</a>
					<h3>Funcionarios.</h3>
				</td>
			</tr>
			<tr>
				<td colspan="5" height="30">
				</td>
			</tr>
			<tr>
				<td align="center" width="200" valign="top">
					<a href="06inventario.php">	
						<img src="../img/06inventario.png" width="150" height="150" alt="Inventario" longdesc="Inventario" class="tres" />
					</a>
					<h3>Inventario.</h3>
				</td>
				<td align="center" width="200" valign="top">
					<a href="07oocc.php">	
						<img src="../img/07oocc.png" width="150" height="150" alt="OOCC" longdesc="OOCC" class="tres" />
					</a>
					<h3>Organizaciones Sociales.</h3>
				</td>
				<td align="center" width="200" valign="top">
					<a href="08personas.php">	
						<img src="../img/08personas.png" width="150" height="150" alt="Personas" longdesc="Personas" class="tres" />
					</a>
					<h3>Personas.</h3>
				</td>
				<td align="center" width="200" valign="top">
					<a href="09presupuesto.php">	
						<img src="../img/09presupuesto.png" width="150" height="150" alt="Presupuesto" longdesc="Presupuesto" class="tres" />
					</a>
					<h3>Presupuesto.</h3>
				</td>
				<td align="center" width="200" valign="top">
					<a href="10vehiculos.php">	
						<img src="../img/10vehiculos.png" width="150" height="150" alt="Vehiculos" longdesc="Vehiculos" class="tres" />
					</a>
					<h3>Veh&iacute;culos.</h3>
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