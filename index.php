<!doctype html>
<html lang="es">

<head>
    <link rel="shortcut icon" href="#" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SGI-TI</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="plugins/sweet_alert2/sweetalert2.min.css">
</head>

<body class="text-center">
    <form id="formLogin" class="form" method="post" >
        <img class="mb-4" src="img/isc.png" alt="" width="150" height="150">
        <h1 class="h3 mb-4 font-weight-normal">Sistema de Gestión de Inventarios</h1>
        <label for="usuario" class="sr-only">Usuario</label>
        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario">
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" id="password" class="form-control" placeholder="Password">
        <div class="checkbox mb-3">
        </div>
        <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Conectar">
        <p class="mt-5 mb-3 text-muted">TESOEM</p>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="./js/ajax.js"></script>
</body>

</html>