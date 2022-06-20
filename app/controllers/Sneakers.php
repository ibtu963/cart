<?php
class Sneakers extends Controller {

public function __construct() {
  $this->userModel = $this->model('Sneaker');
}


public function index() {
 $this->view('sneakers/index', $this->userModel->all()); 
}
public function marca() {
  $this->view('sneakers/marca', $this->userModel->all()); 
 }
public function addCart(){
  
  $this->view('users/index', $this->userModel->all()); 
}
public function getSneaker($idItem){
  $this->userModel->filter("id",$idItem);
}


public function login() {
    
  
}
}