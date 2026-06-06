<!DOCTYPE html>
<html lang="es">
<title>Alcar - Iniciar Sesión</title>

<head>
    <?php
    require './tools/styles.php';
    require './conexion.php';
    session_start();
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesión Cerrada</title>
    <style>
        /* Estructura principal */
        body,
        html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            /* background-image: url('/alcar2/dist/img/ALCAR.png'); */
            background-color: rgb(102, 102, 102);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Contenedor del mensaje */
        .session-message {
            text-align: center;
            background: rgba(71, 71, 71, 0.6);
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0);
            max-width: 90%;
            /* Para pantallas pequeñas */
            width: 400px;
            /* Ancho fijo para pantallas grandes */
        }

        /* Texto de advertencia */
        .text-danger {
            color: red;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }


        /* Responsividad adicional */
        @media (max-width: 768px) {
            .text-danger {
                font-size: 1.2rem;
            }

        }

        .btn.btn-warning.btn-block {
            border-radius: 25px;
            border: none;
            background-color: rgba(160, 208, 0, 0.679);
        }

        b {
            color: rgb(189, 203, 25);
        }
        p {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="session-message">
        <img src="dist/img/logo_original - copia.png" alt="Logo"
            style="max-width: 100%; height: auto; margin-bottom: 1rem;">
            <b></b>
            <h1 class="text-danger"><b>SESIÓN CERRADA POR DESCONEXIÓN!</b></h1>
            <p>Por favor, iniciar sesión para continuar</p>
        <!-- <a href="/alcar2" class="btn btn-warning"><b>INICIAR SESIÓN</b></a> -->
        <div class="row">
            <div class="col-12" style="border-radius: 80px;">
                <button type="submit" class="btn btn-warning btn-block"> <a style="color:black" href="/alcar2"><strong>INICIAR SESIÓN</strong></a></button>
            </div>
        </div>
    </div>

    <?php require './tools/scripts.php'; ?>
</body>

</html>