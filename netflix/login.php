<?php

require_once("Pantalla.class.php");

$pantalla=new Pantalla("pantallas");

$mensaje="";
if (isset($_GET['mensaje'])){
	$mensaje=trim(strip_tags($_GET['mensaje']));
}

$parametros=array('mensaje'=>$mensaje);

$pantalla->mostrar("login.tpl",$parametros);

?>