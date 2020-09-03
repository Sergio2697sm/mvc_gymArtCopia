<?php
class clientesModel extends Mysql
{
    public $model;
    public function __construct()
    {
        $this->model = new clientesModel();
        parent::__construct();
    }

    public function getClients()
    {
        $sql = "SELECT * FROM clientes";
        $viewClient = $this->select_all($sql);
        return $viewClient;
    }

    public function setUser($nombre, $apellidos, $domicilio, $poblacion, $correo, $telefono, $observaciones, $peso, $altura, $masaCorporal, $edad, $actividadFisica, $lesiones, $activo)
    {

        $query_insert = "INSERT INTO clientes (Nombre,Apellidos,Domicilio,Poblacion,CorreoElectronico,Telefono,Observaciones,Peso,Altura,MasaCorporal,Edad,ActividadFisica,Lesiones,Activo)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $arrData = array($nombre, $apellidos, $domicilio, $poblacion, $correo, $telefono, $observaciones, $peso, $altura, $masaCorporal, $edad, $actividadFisica, $lesiones, $activo);
        $request_insert = $this->insert($query_insert, $arrData);
        return $request_insert;
    }



    public function getClient($id)
    {
        $sql = "SELECT * FROM clientes WHere CodigoCliente = $id";

        $viewClient = $this->select($sql);
        return $viewClient;
    }

    public function updateClient($id, $nombre, $apellidos, $domicilio, $poblacion, $correo, $telefono, $observaciones, $peso, $altura, $masaCorporal, $edad, $actividadFisica, $lesiones, $activo)
    {
        $query_insert = "UPDATE clientes set Nombre= ?,Apellidos = ?,Domicilio = ?,Poblacion = ?,CorreoElectronico = ?,Telefono =?,Observaciones =?,Peso = ?,Altura = ?,MasaCorporal = ?,Edad = ?,ActividadFisica =?,Lesiones =?,Activo = ? SET CodigoCliente = $id)";

        $arrData = array($nombre, $apellidos, $domicilio, $poblacion, $correo, $telefono, $observaciones, $peso, $altura, $masaCorporal, $edad, $actividadFisica, $lesiones, $activo);
        $request_insert = $this->update($query_insert, $arrData);
        return $request_insert;
    }

    public function deleteClient($id)
    {

        $sql = "DELETE FROM clientes WHERE id=$id";
        $result = $this->delete($sql);
        return $result;
    }
}
