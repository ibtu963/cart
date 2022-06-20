<?php

class Sneaker {
 private $db;
 private $query;

 public function __construct() {
   $this->db = Database::make(DATABASE);
   $this->query = new QueryBuilder( $this->db);
 }

 public function all() {
  return $this->query->selectAll('sneakers', 'Sneaker');
 }

 public function filter($field, $value) {
   return $this->query->selectByValue('sneakers', $field, $value);
 }
 public function imgResource($field, $value) {
  return $this->query->selectByValue('sneakers_img', $field, $value);
}

 public function create($data) {
   $sneakersData = [
     'name' => $data['name'],
     'tipoItem' => $data['tipoItem'],
     'marca' => $data['marca'],
     'stock' => $data['stock'],
     'precio' => $data['precio']
   ];
   
   return $this->query->insert('sneakers',$sneakersData);
 }
}