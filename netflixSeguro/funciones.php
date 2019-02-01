<?php
function inicioSesion(){
	session_name("SESION");
	session_cache_limiter('nocache');
	session_start();
}

function validado(&$usuario){
	$validado=false;
	if (isset($_SESSION['validado']) && $_SESSION['validado']){
		$validado=true;
		//$nombre=$_SESSION['nombre'];
		//$perfil=$_SESSION['perfil'];
		$usuario=$_SESSION['usuario'];
	}
	return $validado;
}

/*function menu(){
	return $_SESSION['menu'];
}
*/

?>