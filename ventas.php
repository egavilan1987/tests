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

				$sql2 = "SELECT id_producto, nombre, precio, cantidad 
				FROM productos";
				$result2 = mysqli_query($conn, $sql2);
				while ($producto = mysqli_fetch_row($result2)):
					?>
					<option value="<?php echo $producto[0] ?>"><?php echo "Nombre --> ".$producto[1]  ." | Precio --> ".$producto[2] ." | Cantidad --> ".$producto[3]?></option>
				<?php endwhile; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td align='right'>Cantidad :</td>
			<td><input type='number' name='cantidad' min = 1 required>
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
	 $precio = 10;
	 $cantidad = $_POST['cantidad'];	 



$sql2 = "SELECT nombre FROM clientes WHERE id_cliente = '$id_cliente'";
$result = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_row($result);
$cliente_nombre = $row2[0];

$sql3 = "SELECT nombre, precio, cantidad FROM productos WHERE id_producto = '$id_producto'";
$result2 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_row($result2);

$producto_nombre = $row3[0];
$producto_precio = $row3[1];
$producto_cantidad = $row3[2];
$producto_almacen = $producto_cantidad - $cantidad;

$total = $producto_precio * $cantidad;

	if ($producto_cantidad < $cantidad){
		echo "La cantidad del producto en el almacen es menor que la registrada en la venta.";

	}else {

		//Insertar nueva venta.
		$sql = "INSERT INTO ventas(id_cliente, id_producto, cantidad, total) VALUES('$id_cliente', '$id_producto','$cantidad','$total')";
		$query=mysqli_query($conn,$sql);

		//Actualizar cantidad de productos.

		$sql1 = "UPDATE productos set cantidad = '$producto_almacen' WHERE id_producto = '$id_producto'";
		$query1=mysqli_query($conn,$sql1);


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
						<td>$cliente_nombre</td>
						<td>$producto_nombre</td>
						<td>$producto_precio</td>
						<td>$cantidad</td>
						<td>$total</td>
					</tr>
				</table>";
				}
		}
	}
?>

</body>