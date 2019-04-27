<?php
require("conectarse.php");


if(isset($_POST["botonRegistrar"])){ //Si completa una vez el campo usuario
 
 
 $nombre = $_POST['nombre'];
 $email = $_POST['email'];
 $pass = $_POST['pass'];
 $repetir = $_POST['repetir'];


 
 
		$consulta="select * from usuario where password = '$pass'";
		$controlarEmail = "select * from usuario where email = '$email'";
		
	
	// ejecutar la consulta
		$resultado = $conexion->query($consulta);
		$verificoEmail = $conexion->query($controlarEmail);
		
		//pregunto si el resultado me devuelve una cierta cantidad de filas
		$row = $resultado->num_rows;
		$filas = $verificoEmail->num_rows;
		
		
		
		
		
		
		
		
		
		
		

		
		//pregunto si la cantidad de filas es distinto a cero
		if($filas<>0)
		{
			if($row<>0){
			echo '<script language= "javascript"> alert("Atencion, ya existe el usuario ingresado");</script>';
			echo "<script>location.href='Registrarse.html'</script>";
			
			}else{
				if($pass<>$repetir){
						//caso contrario regresa al archivo html donde esta el archivo registrar
										echo '<script language= "javascript"> alert("Atencion, las contraseñas no coinciden");</script>';
										echo "<script>location.href='Registrarse.html'</script>";
								}
			}
	}else {  
				$sql = "INSERT INTO usuario(email,password,nombre) values('$email','$pass','$nombre')";
				if($conexion->query($sql)===true)
			{
					echo '<script language= "javascript">alert("Usuario registrado con exito");</script>';
					echo "<script>location.href='index.html'</script>";
	  
			}else{
						echo"error";
				 }	 
				
		 }



}
?>