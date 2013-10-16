<!--
Sistema		:	Sistema de Gestion - DIDECO - Municipalidad de Colipulli.
Archivo		:	cabecera.php
Proposito	:	Cabecera de Sistema.
Autor			:	Felipe Morales Palacios
Viva Chile !
-->
<div align="center">
	<table width="1024" class="uno" bgcolor="#F2F5A9"> 
		<tr>
			<td rowspan="2" align="center" width="150" valign="middle">
				<img src="../img/escudo.png" width="70" height="90" alt="logo" longdesc="escudo" />
			</td>
			<td align="left" valign="middle">
				<h1>
					Direcci&oacute;n De Desarrollo Comunitario.
					<br />
					Municipalidad De Collipulli.
				</h1>
			</td>
			<td width="150">
			</td>
		</tr>
		<tr>
			<td align="left" class="dos">
<?php
				session_start();
				if(isset($_SESSION["txt_nombreusuario"]) && $_SESSION["txt_nombreusuario"] !="")
				{
					echo "Bienvenid@ : ".$_SESSION["txt_nombreusuario"];
				}
?>
			</td>
			<td align="center">
				<a href="cerrarsesion.php" >Cerrar Sesi&oacute;n.</a>
			</td>
		</tr>
	</table>
</div>