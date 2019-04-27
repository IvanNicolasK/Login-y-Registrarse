<?php  
		
		//1 CONECTAR CON LA BD
	$host = "localhost"; //$host = "localhost:3307";
	$usuario = "root";
	//$clave = "Cuc41515"; 
	$clave = 11021998;
	$bd = "logintp";
	 
	$conexion = new mysqli($host, $usuario, $clave, $bd);

	/*if($conexion->connect_errno) //true o false da el connect_error
	{
		die ("Ha ocurrido un problema ");
	}else
		{
			echo("Conectado correctamente <br>");
		}
	*/
?>	