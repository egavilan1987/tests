<?php
	$conn = mysqli_connect("localhost","root","","ventas2");

	if(!$conn){
		die("Connection failed: ".mysql_connect_error());
	}
?>

<html>
	<head>
		<title>Realizar Venta</title>		
	</head>  
	<br><br>
	<nav style="font-size:20px", align='center'>
		<input type="button" value="Home" onclick = "window.location='index.php'"/>
		<input type="button" value="Reporte Ventas" onclick = "window.location='reporteVentas.php'"/>
	</nav>
<body>
<br><br>
<form method='post' action='ventas.php'>
<table width='500' border='3' align='center'>
      	<tr>
			<th bgcolor='DodgerBlue' colspan='5'>Formulario Registro de Productos</h>
		</tr>
		<tr>
		<td align='right'>Cliente:</td>
			<td>
				<select name='cliente'>
				<?php

				$sql="SELECT id_cliente, nombre 
				FROM clientes";
				$result=mysqli_query($conn, $sql);
				while ($cliente=mysqli_fetch_row($result)):
					?>
					<option value="<?php echo $cliente[0] ?>"><?php echo $cliente[1] ?></option>
				<?php endwhile; ?>
				</select>
			</td>
		</tr>
		<tr>
		<td align='right'>Producto:</td>
			<td>
				<select name='producto'>
				<?php

				$sql2 = "SELECT id_producto, nombre 
				FROM productos";
				$result2 = mysqli_query($conn, $sql2);
				while ($producto = mysqli_fetch_row($result2)):
					?>
					<option value="<?php echo $producto[0] ?>"><?php echo $producto[1] ?></option>
				<?php endwhile; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td align='right'>Cantidad :</td>
			<td><input type='number' name='cantidad' required>
			</font>
			</td>
		</tr>
		<tr>
			<td align='right'>Precio: </td>
			<td><input type='number' name='precio' required step=".01">
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
	 $id_cliente = $_POST['cliente'];
	 $id_producto = $_POST['producto'];
	 $precio = $_POST['precio'];
	 $cantidad = $_POST['cantidad'];
	 $total = $precio * $cantidad;

$sql = "INSERT INTO ventas(id_cliente, id_producto, cantidad, total) VALUES('$id_cliente', '$id_producto','$cantidad','$total')";
$query=mysqli_query($conn,$sql);


if($query){
		echo "<center><b>Nueva Venta Registrada:</b></center><br>";
		echo 
		"<table align='center' border='4'>
			</tr>
			<tr bgcolor='DodgerBlue' align='center'>
				<th>Cliente</th>
				<th>Producto</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Total</th>
			</tr>
			<tr>
				<td>$id_cliente</td>
				<td>$id_producto</td>
				<td>$precio</td>
				<td>$cantidad</td>
				<td>$total</td>
			</tr>
		</table>";
		}
	}
?>

</body>