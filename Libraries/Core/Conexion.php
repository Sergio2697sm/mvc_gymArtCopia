<?php

class Conexion
{
    private $connect;
    # @bool ,  Si conectado a la BD
    private $isConnected = false;

    public function __construct()
    {
        $this->Connect();
    }

    public function Connect()
    {

        $conecting = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
        $pwd = DB_PASS;
        $usr = DB_USER;

        $options = array(
            PDO::ATTR_PERSISTENT => false,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
        );

        try {
            $this->connect = new PDO($conecting, $usr, $pwd, $options);
            $this->isConnected = true;
        } catch (PDOException $e) {
            $this->conect = "Error de conexion";
            print "¡Error!: " . $e->getMessage() . "<br/>";
            // die();
        }
    }

    public function select_all($sql)
    {
        # Conecta a la BD
        if (!$this->isConnected) {
            $this->Connect();
        }
        try {
            # Preparar la consulta
            $resultado = $this->connect->prepare($sql);


            $resultado->execute();

            while ($row = $resultado->fetch()) {
                $model[] = $row;
            }

            return $model;
        } catch (PDOException $e) {
            error_log($this->error = $e->getMessage() . "\nSQL: " . $sql . "\n", 0);
        }
    }

    //funcion para un solo cliente
    public function select($sql)
    {
        # Conecta a la BD
        if (!$this->isConnected) {
            $this->Connect();
        }

        try {
            # Preparar la consulta
            $resultado = $this->connect->prepare($sql);


            $resultado->execute();

            $row = $resultado->fetch();

            return $row;
        } catch (PDOException $e) {
            error_log($this->error = $e->getMessage() . "\nSQL: " . $sql . "\n", 0);
        }
    }

    public function update($sql)
    {
        # Conecta a la BD
        if (!$this->isConnected) {
            $this->Connect();
        }

        try {
            # Preparar la consulta
            $resultado = $this->connect->prepare($sql);

            $resultado->execute();

        } catch (PDOException $e) {
            error_log($this->error = $e->getMessage() . "\nSQL: " . $sql . "\n", 0);
        }
        # Resetea los parámetros
        $this->parametros = array();
    }

    public function delete($sql)
    {
        # Conecta a la BD
        if (!$this->isConnected) {
            $this->Connect();
        }

        try {
            # Preparar la consulta
            $resultado = $this->connect->prepare($sql);

            $resultado->execute();

        } catch (PDOException $e) {
            error_log($this->error = $e->getMessage() . "\nSQL: " . $sql . "\n", 0);
        }
        # Resetea los parámetros
        $this->parametros = array();
    }
}
