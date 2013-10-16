<!--
Sistema		:	Sistema de Gestion - DIDECO - Municipalidad de Colipulli.
Archivo		:	05z3funcionarios.php
Proposito	:	Ver Todos, Listado.
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
	include_once("conexion.php");	
	include_once("cabecera.php");
	$link					= conexion();
	$colorfondo			= "#FAFAFA";
	$_pagi_cuantos		= 15;
	$_pagi_separador	= "  ";
	$_pagi_nav_estilo	= "pagi_link";
	if((($_SESSION["txt_rangousuario"]) == "ALCALDE"))													
	{
		header("location: noautorizado.php");
	}	
	$_pagi_sql			= "SELECT CONCAT(RUT_FUNC,'-',DV_FUNC) AS RUT,
								CONCAT(PATERNO_FUNC,' ',MATERNO_FUNC,' ', NOMBRE_FUNC) AS NOMBRE,
								EMAIL_FUNC 
								FROM FUNCIONARIOS 
								ORDER BY PATERNO_FUNC";
	include_once("paginator.inc.php");
?>

<body>
	<div align="center">
		<br />
		<table width="1024" class="tres">
			<tr>
				<td width="80" align="center">
					<a href="principal.php">
						<img src="../img/home.png" width="30" height="30" alt="Home" longdesc="Home" />					
					</a>	
				</td>
				<td>
					<a href="05funcionarios.php">
						<h1>Funcionarios.</h1>
					</a>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
		</table>	
		<br />
		<table border="1" width="1024">
	      <tr bgcolor="#40FF00" align="center">
				<th width="120">Rut.</th>
				<th width="580">Nombre.</th>
				<th width="324">E-Mail.</th>
			</tr>
<?php
			while( $ROW_funcionarios = mysql_fetch_object( $_pagi_result ) )
			{
				if ($colorfondo == "#FAFAFA")
				{
					$colorfondo ="#BDBDBD";
				}
				else 
				{
					$colorfondo = "#FAFAFA";
				}						
?>
				<tr bgcolor="<?=$colorfondo;?>">
					<td align="center">
						<a href="05z2funcionarios.php?rut=<?=$ROW_funcionarios->RUT;?>"><?=$ROW_funcionarios->RUT;?></a>
					</td>
					<td><?=$ROW_funcionarios->NOMBRE;?></td>
					<td><?=$ROW_funcionarios->EMAIL_FUNC;?></td>
				</tr>
<?php
			}
?>
		</table>
		<br />
<?php
		echo"<p>".$_pagi_navegacion."</p>";
?>		

	</div>
	<br />
</body>

<?php
	include_once("pie.php")
?>
</html>