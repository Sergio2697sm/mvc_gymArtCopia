<?php
class Clientes extends Controllers
{

    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        // $data['page_id'] = 1;
        $data['tag_page'] = "GymArt";
        $data['page_title'] = "Clientes";
        $data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, quis. Perspiciatis repellat perferendis accusamus, ea natus id omnis, ratione alias quo dolore tempore dicta cum aliquid corrupti enim deserunt voluptas.";
        $data["clientes"] =$this->verUsuarios();
        $this->views->getView($this, "clientes", $data);
    }

    public function verUsuarios()
    {
        // $model = new clientesModel();
        $data = $this->model->getClients();
        print_r($data);
    }
    
    public function insertar()
    {
        $data = $this->model->setUser();
        print_r($data);
    }

}
