<?php

header("Content-Type: application/json");

/*
INSERT INTO `tbleventos` (`id`, `title`, `descripcion`, `color`, `start`, `end`) VALUES (NULL, 'Evento 1', 'Desarrollo prueba', '#13ec3e', '2024-06-06 15:31:30', '2024-06-06 15:31:30');

*/

/*coneccion BD */

$pdo= new PDO("mysql:host=localhost;dbname=agenda","root","");

$accion= (isset($_GET['accion']))?$_GET['accion']:'leer';

switch($accion){
   
   case 'leer':
        
      $sentenciaSQL= $pdo->prepare("SELECT * FROM tbleventos");
      $sentenciaSQL->execute();
      $resultado=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
      print_r(json_encode($resultado));/*imprimo resultado usando f() JSON */

  break;
  case 'agregar':
      
      $sentenciaSQL= $pdo->prepare("INSERT INTO `tbleventos` (`id`, `title`, `descripcion`, `color`, `start`, `end`) VALUES (NULL,:title,:descripcion,:color, :start,:end);");
      $sentenciaSQL->execute( array(
          "title"=>$_POST['title'], 
          "descripcion"=>$_POST['descripcion'],
          "color"=>$_POST['color'],
          "start"=>$_POST['fecha']." ".$_POST['hora'].":00",
          "end"=>$_POST['fecha']." ".$_POST['hora'].":00"
      ) );
      print_r($_POST);
  break;
}



print_r($_POST); 
 
?>