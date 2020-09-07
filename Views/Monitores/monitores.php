<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $data["Titulo"] ?></h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Telefono</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($data["monitores"] as $dato) : ?>
                <tr>
                    <td><?= $dato["Nombre"]?></td>
                    <td><?= $dato["Apellidos"]?></td>
                    <td><?= $dato["Telefono"]?></td>

                </tr>
            <?php endforeach ?>

        </tbody>

    </table>
</body>

</html>