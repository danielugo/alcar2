<?php
require './conexion.php';
session_start();
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>ALCAR</title>
        <link rel="shortcut icon" href="dist/img/jdm_alcar.png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
        <link rel="stylesheet" href="style.css"> 

        <style>
            body.login-page {
                background-color: #666666;
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
            /* Ajuste para que el logo no se deforme */
            .login-logo img {
                max-width: 200px;
                height: auto;
            }
        </style>
    </head>

    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="card card-outline card-warning">
                <div class="card-header text-center">
                    <img src="dist/img/logo_original - copia.png" alt="Logo" class="img-fluid" style="margin-bottom: 1rem;">
                </div>
                <div class="card-body">
                    <p class="login-box-msg"><b>ACCESO AL SISTEMA</b></p>

                    <form action="acceso.php" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Usuario" autofocus required name="vusuario">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Contraseña" required name="vpass">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>

                        <p class="text-center"><b>SUCURSAL</b></p>
                        <div class="form-group mb-3">
                            <select class="form-control select2" style="width: 100%;" name="vsucursal" required>
                                <option value="" selected disabled>Seleccione una sucursal</option>
                                <optgroup label="Sucursales disponibles">
                                    <?php
                                    $suc = consultas::get_datos("SELECT * FROM v_ref_sucursal ORDER BY id_sucursal");
                                    if (!empty($suc)) {
                                        foreach ($suc as $s) {
                                            echo '<option value="' . $s['id_sucursal'] . '">' . $s['suc_nombre'] . '</option>';
                                        }
                                    } else {
                                        echo '<option value="">No hay sucursales activas</option>';
                                    }
                                    ?>
                                </optgroup>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-warning btn-block"><b>INICIAR SESIÓN</b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="dist/js/adminlte.min.js"></script>
        <script src="plugins/sweetalert2/sweetalert2.min.js"></script>

        <script>
            $(document).ready(function () {
                if ($('.select2').length > 0) {
                    $('.select2').select2();
                }
            });
        </script>

        <?php include 'mensaje.php'; ?>
    </body>
</html>