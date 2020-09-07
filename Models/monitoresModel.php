<?php 

class monitoresModel extends Conexion {

    public function __construct()
    {
        parent::__construct();
    }

    public function getMonitores() {
        $sql = "SELECT * from monitores";
        $viewMonitor=$this->select_all($sql);
        return $viewMonitor;
    }
}
?>