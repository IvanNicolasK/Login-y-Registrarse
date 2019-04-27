<?php  
	
	require_once("conectarse.php");
		 $user = $_POST['usuario'];
		 $contra = $_POST['pass'];;

 //Administrador

		
		
	 $sql = mysqli_query("select * from usuarios Where Usuario = '$user'");	

	
 if($resultado=mysqli_fetch_array($sql2) )
 {
	 if($contra == $resultado['ContraAdmin'])
	 { 
		echo '<script>alert("Bienvenido Administrador")</script>';
		echo "<script>location.href='administrador.html'</script>";
	 }
 }   
 	
	
	//Usuario
		
		
		
	 $sql =mysqli_query( "select * from usuarios Where Usuario = '$user'");	

	
 if($resultado=mysqli_fetch_array($sql2) )
 {
	 if($contra == $resultado['Contra'])
	 { 
		echo "<script>location.href='Pagina.html'</script>";
	 }else{
		 echo '<script> alert("Contraseña Incorrecta")</script>';
		 echo "<script>location.href='index.html'</script>";
	 }
  }else{
	  echo '<script> alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script>';
	  echo "<script>location.href='index.html'</script>";
  }   
	

	
		
?>