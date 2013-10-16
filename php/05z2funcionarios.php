<!--
Sistema		:	Sistema de Gestion - DIDECO - Municipalidad de Colipulli.
Archivo		:	05z2funcionarios.php
Proposito	:	Modificacion Ficha Personal.
Autor			:	Felipe Morales Palacios
Viva Chile !
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
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
	$link				=	conexion();
	$txt_rut			=	$_POST["txt_rut"];
	$SQL_Muestra	= "SELECT * 
							FROM FUNCIONARIOS 
							WHERE	RUT_FUNC = '$txt_rut'";					
	$RES_Muestra	= mysql_query($SQL_Muestra,$link);
	if($ROW_Muestra = mysql_fetch_object($RES_Muestra))
	{
		$_SESSION[txt_dv]				= $ROW_Muestra->DV_FUNC;
		$_SESSION[txt_nombres]		= $ROW_Muestra->NOMBRE_FUNC;
		$_SESSION[txt_paterno]		= $ROW_Muestra->PATERNO_FUNC;
		$_SESSION[txt_materno]		= $ROW_Muestra->MATERNO_FUNC;
		$_SESSION[txt_nacimiento]	= $ROW_Muestra->NACIMIENTO_FUNC;
		$_SESSION[txt_celular]		= $ROW_Muestra->CELULAR_FUNC;
		$_SESSION[txt_email]			= $ROW_Muestra->EMAIL_FUNC;
		$_SESSION[txt_clave]			= $ROW_Muestra->CLAVE_FUNC;
		$_SESSION[txt_etnia]			= $ROW_Muestra->TIPO_ETNIA;
		$_SESSION[txt_civil]			= $ROW_Muestra->TIPO_CIVI;
		$_SESSION[txt_sexo]			= $ROW_Muestra->TIPO_SEXO;
		$_SESSION[txt_rango]			= $ROW_Muestra->TIPO_RANG;
		$_SESSION[txt_contrato]		= $ROW_Muestra->TIPO_CONT;								
	}
	else
	{
		echo "<script>alert('ALERTA !, se ha producido un error de sistema.')</script>";
   	//header("location: 05z3funcionarios.php");
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
		<form id="modificaf" name="modificaf" method="Post" action="<?=$_SERVER['PHP_SELF'];?>">
		<table width="1024" class="tres">
			<tr>
				<td colspan="5" align="center">
					<h3>Actualizaci&oacute;n de Datos Funcionario.</h3>
				</td>
			</tr>
			<tr>
				<td width="50">
				</td>
				<td align="right" width="200">
					Rut
				</td>
				<td width="10" align="center">
					:
				</td>
				<td align="left">
					<input type="text" name="txt_rut" id="txt_rut" value="" maxlength="08" size="08" />
					<input type="text" name="txt_dv" id="txt_dv" value="" maxlength="01" size="1" />
				</td>
				<td width="50">
				</td>				
			</tr>
			<tr>
				<td>
				</td>
				<td align="right">
					Nombres
				</td>
				<td align="center">
					:
				</td>
				<td align="left">
					<input type="text" name="txt_nombres" id="txt_nombres" value="" maxlength="100" size="70" />
				</td>
				<td>
				</td>		
			</tr>
			<tr>
				<td>
				</td>
				<td align="right">
					Apellido Paterno 
				</td>
				<td align="center">
					:
				</td>
				<td align="left">
					<input type="text" name="txt_paterno" id="txt_paterno" value="" maxlength="100" size="70" />
				</td>
				<td>
				</td>		
			</tr>
			<tr>
				<td>
				</td>
				<td align="right">
					Apellido Materno
				</td>
				<td align="center">
					:
				</td>
				<td align="left">
					<input type="text" name="txt_materno" id="txt_materno" value="" maxlength="100" size="70" />
				</td>
				<td>
				</td>		
			</tr>		
			<tr>
				<td>
				</td>
				<td align="right">
					Fecha Nacimiento 
				</td>
				<td align="center">
					:
				</td>
				<td align="left">
					<input type="text" name="txt_nacimiento" id="txt_nacimiento" maxlength="10" size="10" value="">
				</td>
				<td>
				</td>		
			</tr>
			<tr>
				<td>
				</td>
				<td align="right">
					Celular
				</td>
				<td align="center">
					:
				</td>
				<td align="left">
					<input type="text" name="txt_celular" id="txt_celular" value="" maxlength="100" size="70" />
				</td>
				<td>
				</td>		
			</tr>
			<tr>
				<td>
				</td>
				<td align="right">
					Correo Electronico
				</td>
				<td align="center">
					:
				</td>
				<td align="left">
					<input type="text" name="txt_email" id="txt_email" value="" maxlength="100" size="70" />
				</td>
				<td>
				</td>		
			</tr>
			<tr>
				<td>
				</td>
				<td align="right">
					Etnia
				</td>
				<td align="center">
					:
				</td>
				<td align="left">
					<select name="txt_etnia">
						<option value="">-Seleccione Etnia-</option>
<?php
						$SQL_etnia	=	"SELECT *
											FROM ETNIAS
											ORDER BY TIPO_ETNI";
						$RES_etnia	=	mysql_query($SQL_etnia, $link);
						while ($ROW_etnia	=	mysql_fetch_object($RES_etnia))
						{
?>						
							<option><?=$ROW_etnia->TIPO_ETNI;?></option>
<?php
						}  
?>	
					</select>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td align="right">
					Estado Civil
				</td>
				<td align="center">
					:
				</td>
				<td align="left">
					<select name="txt_civil">
						<option value="">-Seleccione Estado Civil-</option>
<?php
						$SQL_civil	=	"SELECT *
											FROM CIVILES
											ORDER BY TIPO_CIVI";
						$RES_civil	=	mysql_query($SQL_civil, $link);
						while ($ROW_civil	=	mysql_fetch_object($RES_civil))
						{
?>						
							<option><?=$ROW_civil->TIPO_CIVI;?></option>
<?php
						}  
?>	
					</select>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td align="right">
					Sexo
				</td>
				<td align="center">
					:
				</td>
				<td align="left">
					<select name="txt_sexo">
						<option value="">-Seleccione Sexo-</option>
<?php
						$SQL_sexo	=	"SELECT *
											FROM SEXOS
											ORDER BY TIPO_SEXO";
						$RES_sexo	=	mysql_query($SQL_sexo, $link);
						while ($ROW_sexo	=	mysql_fetch_object($RES_sexo))
						{
?>						
							<option><?=$ROW_sexo->TIPO_SEXO;?></option>
<?php
						}  
?>	
					</select>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td align="right">
					Tipo de Contrato
				</td>
				<td align="center">
					:
				</td>
				<td align="left">
					<select name="txt_contrato">
						<option value="">-Seleccione Tipo Contrato-</option>
<?php
						$SQL_contra	=	"SELECT *
											FROM CONTRATO
											ORDER BY TIPO_CONT";
						$RES_contra	=	mysql_query($SQL_contra, $link);
						while ($ROW_contra	=	mysql_fetch_object($RES_contra))
						{
?>						
							<option><?=$ROW_contra->TIPO_CONT;?></option>
<?php
						}  
?>	
					</select>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td align="right">
					Rango de Usuario
				</td>
				<td align="center">
					:
				</td>
				<td align="left">
					<select name="txt_rango">
						<option value="">-Seleccione Rango de Usuario-</option>
<?php
						$SQL_rango	=	"SELECT *
											FROM RANGOS
											ORDER BY TIPO_RANG";
						$RES_rango	=	mysql_query($SQL_rango, $link);
						while ($ROW_rango	=	mysql_fetch_object($RES_rango))
						{
?>						
							<option><?=$ROW_rango->TIPO_RANG;?></option>
<?php
						}  
?>	
					</select>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td align="right">
					Clave
				</td>
				<td align="center">
					:
				</td>
				<td align="left">
					<input type="password" name="txt_clave" id="txt_clave" value="" maxlength="100" size="70" />
				</td>
				<td>
				</td>		
			</tr>
			<tr>
				<td colspan="5" align="center" height="80">
					<input type="submit" name="modifperson" id="modifperson" value="Modificar." class="botonmenu" />
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
<!--
	
	$txt_rut				= "";
	$txt_dv				= "";
	$txt_nombres		= "";
	$txt_paterno		= "";
	$txt_materno		= "";
	$txt_nacimiento	= date("d/m/Y");
	$txt_celular		= "";
	$txt_email			= "";
	$txt_clave			= "";
	$txt_etnia			= "";
	$txt_civil			= "";
	$txt_sexo			= "";
	$txt_rango			= "";
	$txt_contrato		= "";
-->