<?php 
	header("Content-Type:   application/vnd.ms-excel; charset=utf8mb4_spanish_ci");
    header("Content-Disposition: attachment; filename=usuarios.xls");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private",false);

include ("../bd/db.php");

	$query="SELECT * FROM usuarios";
	$result=mysqli_query($conn, $query);
?>

<table border="1">
                            <thead>
                                <tr>
                                    <th># Empleado</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Empresa</th>
                                    <th>Puesto</th>
                                    <th>Departamento</th>
                                    <th>Licencia Office</th>
                                    <th>Fecha de creación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM  usuario";
                                $resultado = mysqli_query($conn, $query);

                                while ($row = mysqli_fetch_array($resultado)) { ?>
                                    <tr>
                                        <td><?php echo $row['num_empleado'] ?> </td>
                                        <td><?php echo $row['nombre'] ?> </td>
                                        <td><?php echo $row['apePaterno'] ?> </td>
                                        <td><?php echo $row['apeMaterno'] ?> </td>
                                        <td><?php echo $row['empresa'] ?> </td>
                                        <td><?php echo $row['puesto'] ?> </td>
                                        <td><?php echo $row['departamento'] ?> </td>
                                        <td><?php echo $row['licenciaOffice'] ?> </td>
                                        <td><?php echo $row['fechaCreacion'] ?> </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
</table>
