<?php
include("../bd/db.php");
$num_empleado = '';
$nombre = '';
$apePaterno ='';
$apeMaterno ='';
$empresa ='';
$puesto ='';
$departamento ='';
$licenciaOffice ='';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM usuario WHERE id= $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $num_empleado =$row['num_empleado'];
        $nombre =$row['nombre'];
        $apePaterno =$row['apePaterno'];
        $apeMaterno =$row['apeMaterno'];
        $empresa =$row['empresa'];
        $puesto =$row['puesto'];
        $departamento =$row['departamento'];
        $licenciaOffice =$row['licenciaOffice'];
    }
}

    if(isset($_POST['actualizar'])){
        $id = $_GET['id'];

        $num_empleado =$_POST['num_empleado'];
        $nombre =$_POST['nombre'];
        $apePaterno =$_POST['apePaterno'];
        $apeMaterno =$_POST['apeMaterno'];
        $empresa =$_POST['empresa'];
        $puesto =$_POST['puesto'];
        $departamento =$_POST['departamento'];
        $licenciaOffice =$_POST['licenciaOffice'];

        $query = "UPDATE usuario set num_empleado ='$num_empleado', nombre='$nombre', apePaterno='$apeMaterno', apeMaterno='$apeMaterno',
                    empresa='$empresa', puesto='$puesto', departamento='$departamento', licenciaOffice= '$licenciaOffice' WHERE id=$id";           
        mysqli_query($conn, $query);

        header('Location: usuarios.php');

    }

    if(isset($_POST['cancelar'])){
        header('Location: usuarios.php');
    }

?>

<?php include("header.php"); ?>
<div class="container p-6">
    <div class="row">
        <div class="col-md-6 mx-auto" style="padding-top: 30px;">
            <div class="card card-body" >
            <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <h2 class="form-signin-heading text-center" style="margin-bottom: 20px;">ACTUALIZAR REGISTRO</h2>
                    <div class="form-group">
                            <input type="text" name="num_empleado" class="form-control" value="<?php echo $num_empleado; ?>" 
                            placeholder="ACTUALIZAR NÚMERO DE EMPLEADO" autofocus required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>" 
                            placeholder="ACTUALIZAR NOMBRENOMBRE" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="apePaterno" class="form-control" value="<?php echo $apePaterno; ?>"
                            placeholder="ACTUALIZAR APELLIDO PATERNO" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="apeMaterno" class="form-control" value="<?php echo $apeMaterno; ?>"
                            placeholder="ACTUALIZAR APELLIDO MATERNO" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="empresa" >
                                <option><?php echo $empresa; ?></option>
                                <option value="TUTUM">TUTUM</option>
                                <option value="PC&B">PC&B</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="puesto" class="form-control" value="<?php echo $puesto; ?>"
                            placeholder="ACTUALIZAR PUESTO" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="departamento" class="form-control" value="<?php echo $departamento; ?>"
                            placeholder="ACTUALIZAR DEPARTAMENTO" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="licenciaOffice" >
                                <option><?php echo $licenciaOffice; ?></option>
                                <option value="E3">E3</option>
                                <option value="E1">E1</option>
                                <option value="Exchange">Exchange</option>
                            </select>
                        </div>

                    <input type="submit" name="actualizar" class="btn btn-warning" value="ACTUALIZAR"> 
                    <input type="submit" name="cancelar" class="btn btn-danger" value="CANCELAR"> 
                    

                </form>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>