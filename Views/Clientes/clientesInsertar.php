<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["titulo"]; ?></title>
</head>

<body>
    <h1><?= $data["titulo"]; ?></h1>

    <form id="nuevo" action="insertar" method="POST" autocomplete="off">

        <div>
            <label for="">Nombre:</label>
            <input type="text" name="nombre" id="nombre" >
        </div>

        <div>
            <label for="">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" >
        </div>

        <div>
            <label for="">Domicilio:</label>
            <input type="text" name="domicilio" id="domicilio" >
        </div>

        <div>
            <label for="">Población:</label>
            <input type="text" name="poblacion" id="poblacion" >
        </div>

        <div>
            <label for="">Correo Electronico:</label>
            <input type="email" name="correo" id="correo" >
        </div>

        <div>
            <label for="">Teléfono:</label>
            <input type="number" name="telefono" id="telefono" >
        </div>

        <div>
            <label for="">Observaciones:</label>
            <input type="text" name="observaciones" id="observaciones">
        </div>

        <div>
            <label for="">Peso:</label>
            <input type="text" name="peso" id="peso">
        </div>

        <div>
            <label for="">Altura:</label>
            <input type="number" name="altura" id="altura">
        </div>

        <div>
            <label for="">Edad:</label>
            <input type="text" name="edad" id="edad">
        </div>

        <div>
            <label for="">Actividad Física:</label>
            <input type="text" name="actividad" id="actividad">
        </div>


        <div>
            <label for="">Lesiones:</label>
            <input type="text" name="lesiones" id="lesiones">
        </div>


        <div>
            <label for="">Activo:</label>
            <input type="number" name="activo" id="activo">
        </div>



        <button type="submit" name="insertar">Guardar</button>
    </form>
</body>

</html>