<?php 

//Creamos la conexión de nuestra base de datos;

  try {

    $base=new PDO('mysql:host=localhost; dbname=clubbasket', 'root', 'Bobmarleynesta1' );




  }catch(Exception $e){
      die('Error'. $e->getMessage());
      echo "Linea del error" . $e->getLine();
  }







?>