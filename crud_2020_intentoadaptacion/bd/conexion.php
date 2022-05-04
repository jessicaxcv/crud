<?php 

function Conectar(){
	if (!($conexion=mysqli_connect("localhost","root","","bd_escuela"))) {
		echo "Error al conectarse al servidor";
                  exit();
	}
	if(!mysqli_select_db($conexion,"bd_escuela")){
		echo "Error al seleccionar la base de datos";
		exit();

	}
	return $conexion;	
}

function Desconectar()
{
	mysqli_close(Conectar());
}

 ?>