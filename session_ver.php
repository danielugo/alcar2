<?php
session_start();
if (empty($_SESSION['id_usuario'])) {
    header("Location: /alcar2/session_iniciar.php");
} else {
    if (isset($_SESSION['tiempo'])) {
        $inactivo = 3000;
        $vida_session = time() - $_SESSION['tiempo'];
        if ($vida_session > $inactivo) {
            session_unset();
            session_destroy();
            header("Location: /alcar2/session_iniciar.php");
            exit();
        }
    }
    $_SESSION['tiempo'] = time();
}
?>
