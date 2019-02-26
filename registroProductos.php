<html>
	<head>
		<title>Registro de Productos</title>		
	</head>  
	<br><br>
	<nav style="font-size:20px", align='center'>
		<input type="button" value="Home" onclick = "window.location='index.php'"/>
		<input type="button" value="Ver a Productos" onclick = "window.location='reporteProductos.php'"/>
	</nav>
<body>
<br><br>
<form method='post' action='registroProductos.php'>
<table width='500' border='3' align='center'>
      	<tr>
			<th bgcolor='DodgerBlue' colspan='5'>Formulario Registro de Productos</h>
		</tr>
  		<tr >
			<td align='right'>Nombre:</td>
			<td><input type='text' name='nombre' required>
			</font>
			</td>
		</tr>
		<tr>
			<td align='right'>Descripcion:</td>
			<td><input type='text' name='descripcion' required>
			</font>
			</td>
		</tr>
		<tr>
			<td align='right'>Cantidad :</td>
			<td><input type='number' name='cantidad' min = 0 required>
			</font>
			</td>
		</tr>
		<tr>
			<td align='right'>Precio: </td>
			<td><input type='number' name='precio' min = 0 required step=".01">
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
	 $descripcion = $_POST['descripcion'];
	 $cantidad = $_POST['cantidad'];
	 $precio = $_POST['precio'];

$sql = "INSERT INTO productos(nombre, descripcion, cantidad, precio) VALUES('$nombre', '$descripcion','$cantidad','$precio')";
$query=mysqli_query($conn,$sql);


if($query){
		echo "<center><b>Datos del nuevo producto registrado:</b></center><br>";
		echo 
		"<table align='center' border='4'>
			</tr>
			<tr bgcolor='DodgerBlue' align='center'>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Cantidad</th>
				<th>Precio</th>
			</tr>
			<tr>
				<td>$nombre</td>
				<td>$descripcion</td>
				<td>$cantidad</td>
				<td>$precio</td>
			</tr>
		</table>";
		}
	}
?>

</body>