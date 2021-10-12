<?php
include_once("model/Caculator.php");
  
class Controller {
     public $model;
  
     public function __construct()
     {
          $this->model = new Model();
     }
      
     public function invoke()
     {
        
               include 'view/viewCaculator.php';
          
     }
}
?>

