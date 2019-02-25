<html>
	<head>
		<title>Reporte de Productos</title>
	</head>
	<body>
	<br><br>
	<nav style="font-size:20px", align='center'>
		<input type="button" value="Registrar Nuevo Productos" onclick = "window.location='registroProductos.php'"/>
		<input type="button" value="Home" onclick = "window.location='index.php'"/>
	</nav>
	<br><br>
		<table align='center' width='1000' border='4'>
			<tr>
			<td colspan='20' align='center' bgcolor='DodgerBlue'>
			<h1>Reporte de Productos Registrados</h1></td>
			</tr>

			<tr align='center'>
				<th>No.</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Cantidad</th>
				<th>Precio</th>
			</tr>
			
		<?php
		$conn = mysqli_connect("localhost","root","","ventas2");

		if(!$conn){
			die("Connection failed: ".mysql_connect_error());
		}

		$sql = "SELECT * FROM productos";

		$query = mysqli_query($conn,$sql) or die("Bad Query: $sql");

		$i=1;

		while ($row=mysqli_fetch_assoc($query))
			{		
			?>
			<tr align="center">
			<td><?php echo $i; $i++; ?></td>
			<td><?php echo $row['nombre'];; ?></td>
			<td><?php echo $row['descripcion'];; ?></td>
			<td><?php echo $row['cantidad']; ?></td>
			<td><?php echo $row['precio']; ?></td>
			</tr>
		<?php } ?>
		</table>
	</body>
</html>