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
            // $this->conect = new PDO($conecting, DB_USER, DB_PASS);
            // $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "COnexion exitosa";
        } catch (PDOException $e) {
            $this->conect = "Error de conexion";
            print "¡Error!: " . $e->getMessage() . "<br/>";
            // die();
        }
    }

    public function Init($sql)
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

            // var_dump($model);
            return $model;

        } catch (PDOException $e) {
            # Escribe en el archivo log si ocurre un excepción
            error_log($this->error = $e->getMessage() . "\nSQL: " . $sql . "\n", 0);
        }
    }

}
