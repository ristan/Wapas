<!--
Sistema		:	Sistema de Gestion - DIDECO - Municipalidad de Colipulli.
Archivo		:	05z1funcionarios.php
Proposito	:	Nuevo Funcionarios.
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
	$link					= conexion();
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
		
	if((($_SESSION["txt_rangousuario"]) == "ALCALDE"))													
	{
		header("location: noautorizado.php");
	}	
	
	if(isset($_REQUEST["grabaperson"]))
	{

			$txt_rut				=	($_REQUEST["txt_rut"]);
			$txt_dv				=	strtoupper(($_REQUEST["txt_dv"]));
			$txt_nombres		=	strtoupper(($_REQUEST["txt_nombres"]));
			$txt_paterno		=	strtoupper(($_REQUEST["txt_paterno"]));
			$txt_materno		=	strtoupper(($_REQUEST["txt_materno"]));
			$txt_nacimiento	=	($_REQUEST["txt_nacimiento"]);
			$txt_celular		=	strtoupper(($_REQUEST["txt_celular"]));
			$txt_email			=	strtolower(($_REQUEST["txt_email"]));
			$txt_clave			=	($_REQUEST["txt_clave"]);
			$txt_etnia			=	($_REQUEST["txt_etnia"]);
			$txt_civil			=	($_REQUEST["txt_civil"]);
			$txt_sexo			=	($_REQUEST["txt_sexo"]);
			$txt_rango			=	($_REQUEST["txt_rango"]);
			$txt_contrato		=	($_REQUEST["txt_contrato"]);			
			$rutin				=	strrev($txt_rut);			
			$cant					=	strlen($rutin);		
			$c						=	0;
			$r						=	"";
			$mail_correcto		=	0;
			$flag_rut			=	0;
			$flag_mail			=	0;
			$flag_lleno			=	0;	
			while($c<$cant)
			{
				$r[$c]	=	substr($rutin,$c,1);
				$c++;
			}
			$ca	=	count($r);
			$m		=	2;
			$c2	=	0;
			$suma	=	0;
			while($c2<$ca)
			{
				$suma	=	$suma+($r[$c2]*$m);
				if($m	==	7)
				{
					$m	=	2;
				}
				else
				{
					$m++;
				}
				$c2++;
			}
			$resto	=	$suma%11;
			$digito	=	11-$resto;
			if($digito	==	10)
			{
				$digito	=	"K";
			}
			else
			{
				if($digito	==	11)
				{
					$digito	=	"0";
				}
			}
//			pregunta por Rut		
			if($txt_dv	==	$digito)
			{
				$flag_rut = 0;
			}
			else
			{
				$flag_rut = 1;
			}
		
			if ((strlen($txt_email) >= 6) && (substr_count($txt_email,"@") == 1) && (substr($txt_email,0,1) != "@") && (substr($txt_email,strlen($txt_email)-1,1) != "@"))
			{
				if ((!strstr($txt_email,"'")) && (!strstr($txt_email,"\"")) && (!strstr($txt_email,"\\")) && (!strstr($txt_email,"\$")) && (!strstr($txt_email," ")))
				{
					if (substr_count($txt_email,".")>= 1)
					{
						$term_dom = substr(strrchr ($txt_email, '.'),1);
						if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) )
						{
							$antes_dom = substr($txt_email,0,strlen($txt_email) - strlen($term_dom) - 1);
							$caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1);
							if ($caracter_ult != "@" && $caracter_ult != ".")
							{
								$mail_correcto = 1;
							}
						}
					}
				}
			}
			if ($mail_correcto == 1)
			{
				$flag_mail = 0;
			}
			else
			{
				$flag_mail = 1;
			}

			if(
				($txt_rut			=="") || 
				($txt_dv				== "") ||
				($txt_nombres		== "") || 
				($txt_paterno		== "") ||
				($txt_materno		== "") ||
				($txt_nacimiento	== "") || 
				($txt_celular		== "") || 
				($txt_etnia			== "-Seleccione Etnia-") || 
				($txt_civil			== "-Seleccione Estado Civil-") ||
				($txt_sexo			== "-Seleccione Sexo-") ||
				($txt_rango			== "-Seleccione Rango de Usuario-") ||
				($txt_contrato		== "-Seleccione Tipo Contrato-") ||
				($txt_clave			== "")    				
				) 
			{
				$flag_lleno = 1;			
			}
			else 
			{
				$flag_lleno = 0;
			}

			if (($flag_rut == 0) && ($flag_mail == 0) && ($flag_lleno == 0))
			{
				$SQL_ingfunc	=	"INSERT INTO FUNCIONARIOS SET
										RUT_FUNC				=	'$txt_rut',
										DV_FUNC				=	'$txt_dv',
										NOMBRE_FUNC			=	'$txt_nombres',
										PATERNO_FUNC		=	'$txt_paterno',
										MATERNO_FUNC		=	'$txt_materno',
										NACIMIENTO_FUNC	=	'$txt_nacimiento',
										CELULAR_FUNC		=	'$txt_celular',
										EMAIL_FUNC			=	'$txt_email',
										CLAVE_FUNC			=	'$txt_clave',
										TIPO_ETNI			=	'$txt_etnia',
										TIPO_CIVI			=	'$txt_civil',
										TIPO_SEXO			=	'$txt_sexo',
										TIPO_RANG			=	'$txt_rango',
										TIPO_CONT			=	'$txt_contrato'";
				if ($RES_ingfunc = mysql_query($SQL_ingfunc,$link))
				{
					echo "<script>alert('Datos ingresados correctamente.')</script>";
				}
				else
				{
					echo "<script>alert('El Rut ingresado ya existe, por favor verifique e intente de nuevo.')</script>";			
				}
			}
			else
			{
				echo "<script>alert('Imposible ingresar, algunos datos estan mal ingresados o no existe, verifique e intente de nuevo.')</script>";
			}
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
		<form id="grabaf" name="grabaf" method="Post" action="<?=$_SERVER['PHP_SELF'];?>">
		<table width="1024" class="tres">
			<tr>
				<td colspan="5" align="center">
					<h3>Nuevo Funcionario.</h3>
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
					<input type="text" name="txt_nacimiento" id="txt_nacimiento" maxlength="10" size="10" value="<?=$txt_nacimiento;?>">
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
					<input type="submit" name="grabaperson" id="grabaperson" value="Grabar." class="botonmenu" />
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