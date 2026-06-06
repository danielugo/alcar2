<!DOCTYPE html>
<html lang="ES">
    <title>ALCAR - Inicio</title>
<head>
    <?php
    require './tools/styles.php';
    require './conexion.php';
    require './session_ver.php';
    // ZONA HORARIA DE PARAGUAY
    date_default_timezone_set('America/Asuncion');

    // Obtener la hora actual y formatearla
    $horaActual = time();
    $horaFormateada = date('H:i:s', $horaActual);
    ?>
    <style>
        /* CENTRAR EN LA PARTE SUPERIOR */
        .top-center-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding-top: 50px;
            text-align: center;
            size: 25px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- CABECERA -->
        <?php require './tools/navbar.php'; ?>
        <!-- CABECERA -->
        <?php require './tools/aside.php'; ?>

        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Mensaje de Bienvenida -->
                <div class="top-center-content">
                    <?php
                    // Dividir el nombre completo en nombre y apellido
                    $nombrecompleto = $_SESSION['persona'];
                    $solonombre = explode(' ', $nombrecompleto);

                    // Mostrar solo el nombre
                    $nombre = $solonombre[0];
                    ?>
                    <h1><b>HOLA
                            <?php echo $nombre; ?>!
                        </b></h1>
                    <p id="id_fecha"><b>FECHA: Cargando...</b></p>
                    <p id="id_hora"><b>HORA: Cargando...</b></p>
                </div>
            </div>
        </div>

        <?php require './tools/footer.php'; ?>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <?php require './tools/scripts.php' ?>
    <?php include './mensaje.php'; ?>

    <script>
        function actualizarHora() {
            var horaElemento = document.getElementById("id_hora");
            var fechaElemento = document.getElementById("id_fecha");

            // Obtener la hora actual
            var horaActual = new Date();
            var horaFormateada = horaActual.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false});
            // Obtener la fecha actual
            var fechaFormateada = horaActual.toLocaleDateString();

            // Actualizar los elementos en la página
            horaElemento.textContent = "HORA: " + horaFormateada;
            horaElemento.style.fontWeight = "bold";
            horaElemento.style.fontSize = "25px";

            fechaElemento.textContent = "FECHA: " + fechaFormateada;
            fechaElemento.style.fontWeight = "bold";
            fechaElemento.style.fontSize = "25px";
        }

        //Actualizar la hora 
        setInterval(actualizarHora, 500);


    </script>

</body>

</html>