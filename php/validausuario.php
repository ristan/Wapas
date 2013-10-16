<!--
Sistema		:	Sistema de Gestion - DIDECO - Municipalidad de Colipulli.
Archivo		:	validausuario.php
Proposito	:	Modulo validador de acceso de usuario.
Autor			:	Felipe Morales Palacios
Viva Chile !
-->
<?php
	session_start();
	include("conexion.php");
	$link = conexion();
	$txt_usuario	=	$_POST["txt_usuario"];
	$txt_clave		=	$_POST["txt_clave"];
	if(isset($_POST["aceptausuario"]))
	{
		$usuario			= $_POST["txt_usuario"];
		$clave			= $_POST["txt_clave"];
		$SQL_login		= "SELECT * FROM FUNCIONARIOS
                    		WHERE	RUT_FUNC		= '$usuario' AND
										CLAVE_FUNC	= '$clave'";
		$RES_login = mysql_query($SQL_login, $link);
		if( $ROW_login = mysql_fetch_object($RES_login))
		{
			$_SESSION[txt_nombreusuario]	= $ROW_login->NOMBRE_FUNC." ".$ROW_login->PATERNO_FUNC." ".$ROW_login->MATERNO_FUNC;
			$_SESSION[txt_rangousuario]	= $ROW_login->TIPO_RANG;
			$_SESSION[txt_rutusuario]		= $ROW_login->RUT_FUNC;
			header("location: principal.php");
		}
		else
		{
			session_unset();
			session_destroy();
    		header("location: ../index.php");
		}		
	}
?>