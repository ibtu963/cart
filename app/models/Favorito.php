<?php class Favorito{
 private $db;
 private $query;

 public function __construct() {
   $this->db = Database::make(DATABASE);
   $this->query = new QueryBuilder( $this->db);
 }

 public function all() {
  return $this->query->selectAll('favoritos_user', 'Favorito');
 }

 public function filter($field, $value) {
   return $this->query->selectByValue('favoritos_user', $field, $value);
 }

 public function create($data) {
   $data = [
     'id_user' => $data['id_user'],
     'id_item' => $data['id_item']
     ];
   
   return $this->query->insert('favoritos_user',$data);
 }
}