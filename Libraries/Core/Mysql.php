<?php 
// ini_set('memory_limit', '1024M');

class Mysql extends Conexion {

    private $conexion;
    private $strquery;
    private $arrvalues;

    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conect();
    }

      //devuelve todos los registros
      public function select_all(string $query) {
        $this ->strquery = $query;
        $result = $this ->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }


    //insertar un registro
    public function insert(string $query,array $arrValues) {

        $this->strquery = $query;
        $this->arrValues = $arrValues;

        $insert = $this ->conexion-> prepare($this -> strquery);

        $resInsert = $insert->execute($this->arrvalues);

        if($resInsert) {
            $lastInsert = $this ->conexion ->lastInsertId();
        }else {
            $lastInsert = 0;
        }
        return $lastInsert;
    }

    //buscar un registro
    public function select(string $query) {

        $this ->strquery = $query;
        $result = $this ->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

  
    public function update(string $query,array $arrValues) {
        $this->strquery = $query;
        $this->arrValues = $arrValues;

        $update= $this ->conexion-> prepare($this -> strquery);

        $resUpdate = $update->execute($this->arrvalues);

        return $resUpdate;
    }

    public function delete (string $query) {
        $this -> strquery = $query;

        $result = $this ->conexion->prepare($this->strquery);
        $result->execute();
        return $result();
    }
}

?>