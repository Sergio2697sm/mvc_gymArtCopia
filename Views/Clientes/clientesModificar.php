<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["titulo"]; ?></title>
</head>

<body>
    <h1><?= $data["titulo"]; ?></h1>

    <form id="nuevo" action="../actualizar" method="POST" autocomplete="off">
        <input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />


        <div>
            <label for="">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="<?= $data["cliente"]["Nombre"] ?>">
        </div>

        <div>
            <label for="">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" value="<?= $data["cliente"]["Apellidos"] ?>">
        </div>

        <div>
            <label for="">Domicilio:</label>
            <input type="text" name="domicilio" id="domicilio" value="<?= $data["cliente"]["Domicilio"] ?>">
        </div>

        <div>
            <label for="">Población:</label>
            <input type="text" name="poblacion" id="poblacion" value="<?= $data["cliente"]["Poblacion"] ?>">
        </div>

        <div>
            <label for="">Correo Electronico:</label>
            <input type="email" name="correo" id="correo" value="<?= $data["cliente"]["CorreoElectronico"] ?>">
        </div>

        <div>
            <label for="">Teléfono:</label>
            <input type="number" name="telefono" id="telefono" value="<?= $data["cliente"]["Telefono"] ?>">
        </div>

        <div>
            <label for="">Observaciones:</label>
            <input type="text" name="observaciones" id="observaciones" value="<?= $data["cliente"]["Observaciones"] ?>">
        </div>

        <div>
            <label for="">Peso:</label>
            <input type="text" name="peso" id="peso" value="<?= $data["cliente"]["Peso"] ?>">
        </div>

        <div>
            <label for="">Altura:</label>
            <input type="number" name="altura" id="altura" value="<?= $data["cliente"]["Altura"] ?>">
        </div>

        <div>
            <label for="">Masa Corporal:</label>
            <input type="number" name="MasaCorporal" id="MasaCorporal" value="<?= $data["cliente"]["MasaCorporal"] ?>">
        </div>

        <div>
            <label for="">Edad:</label>
            <input type="text" name="edad" id="edad" value="<?= $data["cliente"]["Edad"] ?>">
        </div>

        <div>
            <label for="">Actividad Física:</label>
            <input type="text" name="actividad" id="actividad" value="<?= $data["cliente"]["ActividadFisica"] ?>">
        </div>


        <div>
            <label for="">Lesiones:</label>
            <input type="text" name="lesiones" id="lesiones" value="<?= $data["cliente"]["Lesiones"] ?>">
        </div>


        <div>
            <label for="">Activo:</label>
            <input type="number" name="activo" id="activo" value="<?= $data["cliente"]["Activo"] ?>">
        </div>



        <button type="submit" name="guardar">Guardar</button>
    </form>
</body>

</html>