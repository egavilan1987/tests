<html>
	<head>
		<title>Reporte de Clientes</title>
	</head>
	<body>
	<br><br>
	<nav style="font-size:20px", align='center'>
		<input type="button" value="Registrar Nuevo Cliente" onclick = "window.location='registroClientes.php'"/>
		<input type="button" value="Home" onclick = "window.location='index.php'"/>
	</nav>
	<br><br>
		<table align='center' width='1000' border='4'>
			<tr>
			<td colspan='20' align='center' bgcolor='DodgerBlue'>
			<h1>Reporte de Clientes Registrados</h1></td>
			</tr>

			<tr align='center'>
				<th>No.</th>
				<th>Nombre</th>
				<th>Direccion</th>
				<th>E-mail</th>
				<th>Telefono</th>
			</tr>
			
		<?php
		$conn = mysqli_connect("localhost","root","","ventas2");

		if(!$conn){
			die("Connection failed: ".mysql_connect_error());
		}

		$sql = "SELECT * FROM clientes";

		$query = mysqli_query($conn,$sql) or die("Bad Query: $sql");

		$i=1;

		while ($row=mysqli_fetch_assoc($query))
			{		
			?>
			<tr align="center">
			<td><?php echo $i; $i++; ?></td>
			<td><?php echo $row['nombre'];; ?></td>
			<td><?php echo $row['direccion'];; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['telefono']; ?></td>
			</tr>
		<?php } ?>
		</table>
	</body>
</html>