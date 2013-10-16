<!--
Sistema		:	Sistema de Gestion - DIDECO - Municipalidad de Colipulli.
Archivo		:	cerrarsesion.php
Proposito	:	Cierra Sesion en Sistema.
Autor			:	Felipe Morales Palacios
Viva Chile !
-->
<?php
	header("location: ../index.php");
	session_unset();
	session_destroy();	
?>