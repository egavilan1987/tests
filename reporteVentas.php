<html>
	<head>
		<title>Reporte de Ventas</title>
	</head>
	<body>
	<br><br>
	<nav style="font-size:20px", align='center'>
		<input type="button" value="Registrar Nueva Venta" onclick = "window.location='ventas.php'"/>
		<input type="button" value="Home" onclick = "window.location='index.php'"/>
	</nav>
	<br><br>
		<table align='center' width='1000' border='4'>
			<tr>
			<td colspan='20' align='center' bgcolor='DodgerBlue'>
			<h1>Reporte de Ventas Realizadas</h1></td>
			</tr>

			<tr align='center'>
				<th>No.</th>
				<th>Cliente</th>
				<th>Producto</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Total</th>
			</tr>
			
		<?php
		$conn = mysqli_connect("localhost","root","","ventas2");

		if(!$conn){
			die("Connection failed: ".mysql_connect_error());
		}

		$sql = "SELECT * FROM ventas";

		$query = mysqli_query($conn,$sql) or die("Bad Query: $sql");

		$i=1;

		while ($row=mysqli_fetch_assoc($query))
			{		
			?>
			<tr align="center">
			<td><?php //echo $i; $i++; 
			echo $row['id_venta'];?></td>
			<td>
				<?php 
					$id_cliente = $row['id_cliente'];
					$sql = "SELECT nombre FROM clientes WHERE id_cliente = '$id_cliente'";
					$result=mysqli_query($conn,$sql);
					$row2=mysqli_fetch_row($result);

					echo $row2[0];
				?>
			</td>
			<td>
				<?php 
					$id_producto = $row['id_producto'];
					$sql2 = "SELECT nombre, precio FROM productos WHERE id_producto = '$id_producto'";
					$result2=mysqli_query($conn,$sql2);
					$row3=mysqli_fetch_row($result2);

					echo $row3[0];
				?>
			</td>
			<td><?php echo $row3[1]; ?></td>
			<td><?php echo $row['cantidad']; ?></td>
			<td><?php echo $row['total']; ?></td>
			</tr>
		<?php } ?>
		</table>
	</body>
</html>