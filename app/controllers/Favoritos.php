<?php class Favoritos extends Controller {

public function __construct() {
  $this->favoritoModel = $this->model('Favorito');
}
public function index() {
  $this->view('carrito/index', $this->favoritoModel->all());
}

public function addFavor() {
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Procesamos el formulario
    $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
    $data = [
    'id_user' => trim($_POST['id_user']) ,
    'id_item' => trim($_POST['id_item']) ];

    if ($this->favoritoModel->create($data)) {
      redirect('sneakers/index');
    } else {
      die('algo salio mal...');
    }

  }
 // echo("Hola we");
  return $this->view('sneakers/index', $this->favoritoModel->all());
}


public function login() {
  $this->view('carrito/index', $this->favoritoModel->all());
}

}