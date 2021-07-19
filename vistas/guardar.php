<?php

include ("../bd/db.php");

if (isset($_POST['guardar'])){

    $num_empleado =$_POST['num_empleado'];
    $nombre =$_POST['nombre'];
    $apePaterno =$_POST['apePaterno'];
    $apeMaterno =$_POST['apeMaterno'];
    $empresa =$_POST['empresa'];
    $puesto =$_POST['puesto'];
    $departamento =$_POST['departamento'];
    $licenciaOffice =$_POST['licenciaOffice'];

    $query = "INSERT INTO usuario (num_empleado, nombre, apePaterno, apeMaterno, empresa, puesto, departamento, licenciaOffice)
                VALUES ('$num_empleado','$nombre','$apePaterno','$apeMaterno','$empresa','$puesto','$departamento', '$licenciaOffice')";

    $result = mysqli_query ($conn, $query);
    if(!$result){
        die("Query Faild");
    }


    header("Location: usuarios.php");
}

?>

