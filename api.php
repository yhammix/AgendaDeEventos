<?php
header("Content-Type: application/json");

/*
INSERT INTO `tbleventos` (`id`, `title`, `descripcion`, `color`, `start`, `end`) VALUES (NULL, 'Evento 1', 'Desarrollo prueba', '#13ec3e', '2024-06-06 15:31:30', '2024-06-06 15:31:30');

*/

/*coneccion BD */

$pdo= new PDO("mysql:host=localhost;dbname=agenda","root","");

$sentenciaSQL= $pdo->prepare("SELECT * FROM tbleventos");
$sentenciaSQL->execute();
     
$resultado=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);   /*Almaceno Rdo en resultado */
print_r(json_encode($resultado));   /*imprimo resultado usando f() JSON */

print_r($_POST);

?>