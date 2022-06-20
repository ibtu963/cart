<?php class Carritos extends Controller {

public function __construct() {
  $this->carrito_compraModel = $this->model('Carrito');
}
public function index() {
  $this->view('carrito/index', $this->carrito_compraModel->all());
}

public function addCart() {
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Procesamos el formulario
    $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
    $subT = trim($_POST['price']) *  trim($_POST['cant']);
    $data = [
    'id_user' => trim($_POST['id_user']) ,
    'id_item' => trim($_POST['id_item']) ,
    'cantidad' =>  trim($_POST['cant']) ,
    'subtotal' => $subT ,
    'price' => trim($_POST['price'])];

    if ($this->carrito_compraModel->create($data)) {
      redirect('sneakers/index');
    } else {
      die('algo salio mal...');
    }

  }
 // echo("Hola we");
  return $this->view('sneakers/index', $this->carrito_compraModel->all());
}


public function login() {
  $this->view('carrito/index', $this->carrito_compraModel->all());
}

}