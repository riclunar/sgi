<?php


$host = 'localhost';
$usr = 'root';
$pas = '';
$db ='login';

$conn = mysqli_connect($host,$usr,$pas,$db);

//prueba de que está conectando a la base de datos
/*if(isset($conn)){
    echo 'Conectado a la base de datos: '.$db;
}
*/
?>