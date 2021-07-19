<?php include("header.php") ?>
<?php include("../bd/db.php") ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Usuarios</h1>
                        <a href="excel.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generar reporte</a>
                    </div>

    <div class="row">

        <!-- Form -Usuarios -->
        <div class="col-xl-3 col-lg-5">
            <div class="card shadow mb-4">

                <div class="card-body">
                    <form action="guardar.php" method="POST">
                        <h3 class="form-signin-heading text-center" style="margin-bottom: 20px;">REGISTRO</h3>
                        <div class="form-group">
                            <input type="text" name="num_empleado" class="form-control" placeholder="NÚMERO DE EMPLEADO" autofocus required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control" placeholder="NOMBRE" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="apePaterno" class="form-control" placeholder="APELLIDO PATERNO" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="apeMaterno" class="form-control" placeholder="APELLIDO MATERNO" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="empresa">
                                <option>EMPRESA</option>
                                <option value="TUTUM">TUTUM</option>
                                <option value="PC&B">PC&B</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="puesto" class="form-control" placeholder="PUESTO" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="departamento" class="form-control" placeholder="DEPARTAMENTO" required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="licenciaOffice">
                                <option>TIPO DE LICENCIA</option>
                                <option value="E3">E3</option>
                                <option value="E1">E1</option>
                                <option value="Exchange">Exchange</option>
                            </select>
                        </div>
                        <input type="submit" name="guardar" class="btn btn-success btn-block" value="GUARDAR">
                    </form>
                </div>
            </div>
        </div>

        <!-- Listar usuarios -->
        <div class="col-xl-9 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive text-xs font-weight-bold text-primary text-uppercase mb-0">
                        <table class="table table-bordered" width="50%" cellspacing="0" >
                            <thead class="thead-light">
                                <tr>
                                    <th># Empleado</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Empresa</th>
                                    <th>Puesto</th>
                                    <th>Departamento</th>
                                    <th>Licencia Office</th>
                                    <th style="padding-right: 30px;">ACCIONES</th>
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
                                        <td>
                                            <a href="editar.php?id=<?php echo $row['id'] ?>" class="btn btn-warning btn-circle btn-sm">
                                                <i class=" fas fa-marker"></i>
                                            </a>
                                            <a href="eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-circle btn-sm">
                                                <i class=" far fa-trash-alt"></i>
                                            </a>
                                        </td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>


    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include("footer.php") ?>