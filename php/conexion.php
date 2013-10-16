<!--
Sistema		:	Sistema de Gestion - DIDECO - Municipalidad de Colipulli.
Archivo		:	conexion.php
Proposito	:	Realiza la conexion al server y a la database.
Autor			:	Felipe Morales Palacios
Viva Chile !
-->
<?php
	function conexion()
	{ 
//		$servidor	=	'db.inf.uct.cl';
//		$usuario 	=	'dip_cmorales';
//		$clave		=	'carlos';
//		$base			=	'dip_cmorales';
		$servidor	=	'localhost.localdomain';
		$usuario 	=	'felipe_morales';
		$clave		=	'kanitobandolero';
		$base			=	'SiPAS';
		if($link = mysql_connect($servidor, $usuario, $clave))
		{
			if(mysql_select_db($base, $link))
			{
				return $link;
			}
			else
			{
				die("Error !, no se puede seleccionar la base.");
			}
		}
		else 
		{
			die("Error !, no se puede conectar a mysql");
		}
	}
?>