<?php
class clientesModel extends Conexion
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getClients()
    {
        $sql = "SELECT * FROM clientes";
        $viewClient = $this->select_all($sql);
        // var_dump($viewClient);

        return $viewClient;
    }

    public function verCliente($id)
    {
        $sql = "SELECT * FROM clientes WHERE CodigoCliente = $id";
        $viewClient = $this->select($sql);
        return $viewClient;
    }

    public function actualizarCliente($codigoCliente, $nombre, $apellidos, $domicilio, $poblacion, $correo, $telefono, $observaciones, $peso, $altura, $masaCorporal, $edad, $actividadFisica, $lesiones)
    {
        $sql = "UPDATE clientes SET Nombre='$nombre',Apellidos='$apellidos',Domicilio='$domicilio',Poblacion='$poblacion',
        CorreoElectronico='$correo',Telefono=$telefono,Observaciones='$observaciones',Peso=$peso,Altura=$altura,MasaCorporal=$masaCorporal,Edad=$edad,
        ActividadFisica='$actividadFisica',Lesiones='$lesiones' WHERE CodigoCliente = $codigoCliente";
        $viewClient = $this->update($sql);
        return $viewClient;
    }

}
