<?php
session_start();
include_once 'conexion.php';

// Se establece conxión con la Base de datos
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

//Encriptación del passwor a través de la funsión MD5
$pass = md5($password);

//Se consulta en la BD si el usuario y contraseña con algún usuario ya registrado
$consulta = "SELECT usuarios.idRol AS idRol, roles.descripcion AS rol 
FROM usuarios JOIN roles ON usuarios.idRol = roles.id WHERE usuario='$usuario' 
AND password='$pass' OR password ='$password' ";	
$resultado = $conexion->prepare($consulta);
$resultado->execute(); 


//Si el valor del rol del usuario es >0 inicia la sesión
if($resultado->rowCount() >= 1){ 
    $data=$resultado->fetchAll(PDO::FETCH_ASSOC);    
    $_SESSION["s_usuario"] = $usuario;    
    $_SESSION["s_idRol"] = $data[0]["idRol"];
    $_SESSION["s_rol_descripcion"] = $data[0]["rol"];
}else{
    $_SESSION["s_usuario"] = null;  
    $data=null;
}

//Se envía el array final el formato json a AJAX
print json_encode($data);
$conexion=null;