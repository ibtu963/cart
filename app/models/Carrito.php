<?php class Carrito{
 private $db;
 private $query;

 public function __construct() {
   $this->db = Database::make(DATABASE);
   $this->query = new QueryBuilder( $this->db);
 }

 public function all() {
  return $this->query->selectAll('carrito_usuarios', 'Carrito');
 }

 public function filter($field, $value) {
   return $this->query->selectByValue('carrito_usuarios', $field, $value);
 }

 public function create($data) {
   $carrito_commpraData = [
     'id_user' => $data['id_user'],
     'id_item' => $data['id_item'],
     'cantidad' => $data['cantidad'],
     'subtotal' => $data['subtotal'],
     ];
   
   return $this->query->insert('carrito_usuarios',$carrito_commpraData);
 }
}