<?php 

class Conexion {

    private $connect;

    public function __construct()
    {
        $conecting= "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
        try {
            $this->conect = new PDO($conecting,DB_USER,DB_PASS);
            $this->conect ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            // echo "COnexion exitosa";
        }catch(PDOException $e) {
            $this->conect ="Error de conexion";
            print "¡Error!: " . $e->getMessage() . "<br/>";
            // die();
        }
    }

    public function conect(){
        return $this->connect;
    }   

}