<?php
include "../../seguridad/discoduro/funciones.php";
inicioSesion();
session_destroy();
unset($_SESSION);
header("Location: login.php");
exit;
?>