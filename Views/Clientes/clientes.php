<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title><?php echo $data['tag_page']; ?></title>
</head>

<body>
	<h1><?php echo $data['page_title']; ?></h1>

<a href="nuevo">Añadir</a>
	<table>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Correo</th>
				<th>Telefono</th>
				<th>Modificar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($data["clientes"] as $dato) {
			?>
				<tr class=" text-white border border-white">
					<td><?= $dato["Nombre"] ?></td>
					<td><?= $dato["Apellidos"] ?></td>
					<td><?= $dato["CorreoElectronico"] ?></td>
					<td><?= $dato["Telefono"] ?></td>
					<td><button class="btn btn-primary"><a class="text-white" href="modificar/<?= $dato["CodigoCliente"] ?>">Modificar</button></td>
					<td><button class="btn btn-danger"><a class="text-white" href="eliminar/<?= $dato["CodigoCliente"] ?>">Eliminar</button></td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</body>

</html>