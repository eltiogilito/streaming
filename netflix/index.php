<?php
require_once("Video.class.php");
require_once("AccesoVideos.class.php");
require_once("Pantalla.class.php");
//require_once( "Carrito.class.php");

session_cache_limiter('nocache, private');
session_start();
if (!isset($_SESSION['variable'])){
	$_SESSION['variable']=uniqid();
}
$mensaje="";
if (isset($_GET['mensaje'])){
	$mensaje=trim(strip_tags($_GET['mensaje']));
}

// Recuperar datos que se muestran en la pantalla
$bd=new AccesoVideos();
$videos=$bd->getVideos();

//Mostrar pantalla con los datos

//$carrito=new Carrito($_SESSION['variable']);


$pantalla=new Pantalla("pantallas");

$parametros=array('avideos' => $videos/*,'numero'=>$carrito->numeroProductos()*/,'mensaje'=>$mensaje);

$pantalla->mostrar("index.tpl",$parametros);

?>