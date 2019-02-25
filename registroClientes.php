<html>
	<head>
		<title>Registro de Clientes</title>		
	</head>  
	<br><br>
	<nav style="font-size:20px", align='center'>
		<input type="button" value="Home" onclick = "window.location='index.php'"/>
		<input type="button" value="Ver a Clientes" onclick = "window.location='reporteClientes.php'"/>
	</nav>
<body>
<br><br>
<form method='post' action='registroClientes.php'>
<table width='500' border='3' align='center'>
      	<tr>
			<th bgcolor='DodgerBlue' colspan='5'>Formulario Registro de Clientes</h>
		</tr>
  		<tr >
			<td align='right'>Nombre:</td>
			<td><input type='text' name='nombre' required>
			</font>
			</td>
		</tr>
		<tr>
			<td align='right'>Direccion:</td>
			<td><input type='text' name='direccion' required>
			</font>
			</td>
		</tr>
		<tr>
			<td align='right'>E-mail :</td>
			<td><input type='email' name='email' required>
			</font>
			</td>
		</tr>
		<tr>
			<td align='right'>Telefono: </td>
			<td><input type='text' name='telefono' required>
			</font>
			</td>
		</tr>
		<tr>
			<td align='center' colspan='6'>
			<input type='submit' name='submit' value='Registrar'>
			</td>
		</tr>  
  </table>  
</form><br>
</body>

</html>
<?php

$conn = mysqli_connect("localhost","root","","ventas2");

if(!$conn){
	die("Connection failed: ".mysql_connect_error());
}


if(isset($_POST['submit']))
{
	 $nombre = $_POST['nombre'];
	 $direccion = $_POST['direccion'];
	 $email = $_POST['email'];
	 $telefono = $_POST['telefono'];

$sql = "INSERT INTO clientes(nombre, direccion, email, telefono) VALUES('$nombre', '$direccion','$email','$telefono')";
$query=mysqli_query($conn,$sql);


if($query){
		echo "<center><b>Datos del nuevo cliente registrado:</b></center><br>";
		echo 
		"<table align='center' border='4'>
			</tr>
			<tr bgcolor='DodgerBlue' align='center'>
				<th>Nombre</th>
				<th>Direccion</th>
				<th>E-mail</th>
				<th>Telefono</th>
			</tr>
			<tr>
				<td>$nombre</td>
				<td>$direccion</td>
				<td>$email</td>
				<td>$telefono</td>
			</tr>
		</table>";
		}
	}
?>

</body>