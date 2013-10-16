/* Sistema	:	Sistema de Gestion - Direccion de Desarrollo Comunitario - Municipalidad de Colipulli. */
/* Archivo	:	codigo.js para formularios Acceso en index.html y Contacto en m04ct.html*/
/* Autor	:	Felipe Morales Palacios */
/* Viva Chile !!! */
	
	function ValidaUser(){
		if (document.getElementById("usua").value == "")
		{
        	alert("Debe Ingresar Nombre de Usuario !");
			document.getElementById("usua").focus();
			return false;
		}else if (document.getElementById("pass").value=="" )
		{
			alert("Debe Ingresar Password de Usuario !");
			document.getElementById("pass").focus();
			return false;
		}else{
			alert("Acceso Autorizado.");
			return true;
		}
	}
	
 	function ValidaContacto(){
		if (document.getElementById("nombre").value == "")
		{
        	alert("Debe Ingresar Nombre !");
			document.getElementById("nombre").focus();
			return false;
        }else if (document.getElementById("correo").value == "")
		{
			alert("Debe Ingresar su E-Mail !");
			document.getElementById("correo").focus();
			return false;
		}else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("correo").value)))
		{
			alert("Formato de E-Mail Incorrecto !");
			document.getElementById("correo").focus();
			return false;
		}else if (document.getElementById("tipomensaje").value == "0")
		{
			alert("Debe Seleccionar Tipo de Mensaje !");
			document.getElementById("tipomensaje").focus();
			return false;
        }else if (document.getElementById("mensaje").value == "")
		{
			alert("Debe redactar un Mensaje !");
			document.getElementById("mensaje").focus();
			return false;
		}else{
			alert("Datos de Contacto Ingresados en forma Correcta !")
			return true;
		}
	}