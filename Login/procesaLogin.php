<?php
// si el valor recibido no esta vacio, pass = al valor recibido
// sino va tener valor vacio
/*if($email=!empty($_POST['email'])){
	$email=$_POST['email'];
}else{
	$email='';
}

if($password=!empty($_POST['pass'])){
	$password=$_POST['pass'];
}else{
	$password='';
}
//otra forma de escribir: $password=!empty($_REQUEST['pass'])?$_REQUEST['pass']:'';

if($password&&$email){
// incluir la configuracion de conexion a la BD
require("conexionBD/conexion.php");


// crear consulta para comparar los datos recibidos con los datos de la BD
$consulta="select * from usuario where password = '$password'";

// ejecutar la consulta
$resultado = $conexion->query($consulta);

//pregunto si el resultado me devuelve una cierta cantidad de filas
$row = $resultado->num_rows;

//pregunto si la cantidad de filas es distinto a cero
if($row<>0){
	echo "Validado con exito";
}else{
	//caso contrario regresa al archivo html donde esta el login
	header('Location: index.html');
}
}
//si recibimos valores vacios retornamos tambien al index
else{
	header('Location: index.html');
}

*/
?>
<?php

if(isset($_POST["email"])){ //Si completa una vez el campo usuario
		require("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		$email = $_POST["email"]; //Guardo el usuario
		$password = $_POST["pass"]; //Guardo la contraseña
		//print ("Email: $email <br>");//Muestro el usurio
		//print ("Contraseña: $password<br>"); //Muestro la password
		// crear consulta para comparar los datos recibidos con los datos de la BD
		
		$consulta="select * from usuario where password = '$password'";
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
			echo "Validado con exito";
			
			}else{
	//caso contrario regresa al archivo html donde esta el archivo registrar
				echo '<script language= "javascript">alert("EMAIL O CONTRASEÑA INCORRECTO");</script>';
				echo "<script>location.href='index.html'</script>";	
		
			}
}else{
	
		echo '<script> alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script>';
		echo "<script>location.href='index.html'</script>";
	}

}
?>