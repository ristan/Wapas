<!--
Sistema		:	Sistema de Gestion - DIDECO - Municipalidad de Colipulli.
Archivo		:	index.php
Proposito	:	Codigo inicial.
Autor			:	Felipe Morales Palacios
Viva Chile !
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="js/codigo.js"></script>
	<link href="css/estilo.css"rel="stylesheet" type="text/css" />
 	<link rel="SHORTCUT ICON" href="img/favicon.ico" />
	<title>Sistema de Gesti&oacute;n Direcci&oacute;n De Desarrollo Comunitario - Municipalidad de Collipulli.</title>
	<meta name="author" content="Felipe Morales Palacios" />
	<meta name="description" content="Sistema de Gesti&oacute;n Direcci&oacute;n De Desarrollo Comunitario - Municipalidad de Collipulli." />
</head>

<body>
	<div align="center">
		<table>
			<tr>
				<td width="1024" height="500">
					<form id="acceso" name="acceso" method="Post" action="php/validausuario.php">
						
						<table class="tres" align="center">
							<tr>
								<td rowspan="4" width="120" align="right" valign="middle">
									<img src="img/escudo.png" width="110" height="170" alt="" />								
								</td>
								<td colspan="2" align="center" width="300" height="50" valign="middle">
									<h1>Panel de Ingreso.</h1> 
								</td>
							</tr>
							<tr>
								<td align="right" valign="middle" width="100">
									<h3>Usuario :</h3>
								</td>
								<td align="left" valign="middle" width="150">
									<input type="text" name="txt_usuario" id="txt_usuario" value="" maxlength="08" size="10" />
								</td>
							</tr>
							<tr>
								<td align="right" valign="middle">
									<h3>Password :</h3>
								</td>
								<td align="left" valign="middle">
									<input type="password" name="txt_clave" id="txt_clave" value="" maxlength="20" size="10" />
								</td>
							</tr>
							<tr>
								<td>
								</td>
								<td align="center" height="50" valign="middle">
									<input type="submit" name="aceptausuario" id="aceptausuario" value="Ingresar." class="botoncomando" />					
								</td>
							</tr>
						</table>
					</form>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>