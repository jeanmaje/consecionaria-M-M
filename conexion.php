<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "clientes";
	
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];

	$conexion = mysqli_connect($servername,$username,$password,$database);
 
	$sql =  "INSERT INTO clientes (nombre, correo, telefono) values ('$nombre', '$correo', '$telefono')";

	if (mysqli_query($conexion, $sql))
	{
		?>
			<h3 class="bien">Registro completado</h3>	
		<?php
	
	}
 ?>


