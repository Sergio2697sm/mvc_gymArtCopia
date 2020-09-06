<?php
class Clientes extends Controllers
{

    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        $data['page_id'] = 1;
        $data['tag_page'] = "GymArt";
        $data['page_title'] = "Clientes";
        $data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, quis. Perspiciatis repellat perferendis accusamus, ea natus id omnis, ratione alias quo dolore tempore dicta cum aliquid corrupti enim deserunt voluptas.";
        $data['clientes'] = $this->verUsuarios();
        // var_dump($data["clientes"]);
        $this->views->getView($this, "clientes", $data);
    }

    public function verUsuarios()
    {
        $data = $this->model->getClients();
        return $data;
    }
    
    public function modificar($id)
    {
        $data["id"] = $id;
        $data["titulo"] = "Modificar Clientes";
        $data["cliente"] = $this->cliente($id);
        $this->views->getView($this, "clientesModificar", $data);

    }

    //ver un solo cliente
    public function cliente($id) {
        $data = $this->model->verCliente($id);
        return $data;
    }

    public function actualizar() {
        $this->model->actualizarCliente($_POST["id"],
        $_POST["nombre"],
        $_POST["apellidos"],
        $_POST["domicilio"],
        $_POST["poblacion"],
        $_POST["correo"],
        $_POST["telefono"],
        $_POST["observaciones"],
        $_POST["peso"],
        $_POST["altura"],
        $_POST["MasaCorporal"],
        $_POST["edad"],
        $_POST["actividad"],
        $_POST["lesiones"],
        $_POST["activo"]);
        // return $clientes;
        $this->home();
    }


}
