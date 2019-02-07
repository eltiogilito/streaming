<?php
require_once("Video.class.php");
require_once("accesoUsuarios.php");
require_once("VideoStream.class.php");
require_once("AccesoVideos.class.php");
require_once("Pantalla.class.php");
require_once("../../seguridad/netflix/funciones.php");
require_once("../../seguridad/netflix/form-s.php");
//require_once( "Carrito.class.php");


$codigo="";
if (isset($_GET['codigo'])){
	$codigo=trim(strip_tags($_GET['codigo']));
}
if (empty($codigo)){
	session_destroy();
	unset($_SESSION);
	header("Location: index.php");
	exit;
}

//Recuperar la foto que se muestran en la pantalla
$bd=new accesoVideos();
$video=$bd->getVideo($codigo);
if (is_null($video)){
	session_destroy();
	unset($_SESSION);	
	header("Location: index.php");
	exit;
}
$direccion=$video->video;

$direccion=$video->video;
$ruta="../../seguridad/netflix/videos/".$direccion;
$stream = new VideoStream($ruta);
$stream->start();
//Mostrar pantalla con los datos


?>