<?php
inicioSesion();
$usuario="";

if (!validado($usuario)){
	session_destroy();
	unset($_SESSION);
	header("Location: login.php");
	exit;
}
//$menu=menu();
?>