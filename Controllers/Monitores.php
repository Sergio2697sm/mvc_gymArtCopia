<?php 

class Monitores extends Controllers {
    public function __construct()
    {
        parent::__construct();
    }

    public function home() {
        $data["Titulo"] = "Monitores";
        $data["monitores"] =$this-> verMonitores();
        $this->views->getView($this,"monitores",$data);
    }

    public function verMonitores() {
        $data = $this->model->getMonitores();
        return $data;
    }
}
?>