<?php
require_once("Video.class.php");
require_once("accesoUsuarios.php");
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
$bd=new AccesoFotos();
$video=$bd->getVideo($codigo);
if (is_null($video)){
	session_destroy();
	unset($_SESSION);	
	header("Location: index.php");
	exit;
}

// Recuperar datos que se muestran en la pantalla
$nnombre=$_SESSION['usuario'];
$bd=new accesoVideos();
$videos=$bd->getVideos($nnombre);



//Mostrar pantalla con los datos


$pantalla=new Pantalla("pantallas");

$parametros=array('avideos' => $videos/*,'numero'=>$carrito->numeroProductos()*/,'mensaje'=>$mensaje);

$pantalla->mostrar("index.tpl",$parametros);

?>