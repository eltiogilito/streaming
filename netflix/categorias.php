<?php
require_once("Video.class.php");
require_once("accesoUsuarios.php");
require_once("AccesoVideos.class.php");
require_once("Pantalla.class.php");
require_once("../../seguridad/netflix/funciones.php");
require_once("../../seguridad/netflix/form-s.php");
//require_once( "Carrito.class.php");


if (!isset($_SESSION['variable'])){
	$_SESSION['variable']=uniqid();
}
$mensaje="";
if (isset($_GET['mensaje'])){
	$mensaje=trim(strip_tags($_GET['mensaje']));
}

// Recuperar datos que se muestran en la pantalla
$nnombre=$_SESSION['usuario'];
$bd=new accesoVideos();
$videos=$bd->getCategorias($nnombre);



//Mostrar pantalla con los datos


$pantalla=new Pantalla("pantallas");

$parametros=array('avideos' => $videos/*,'numero'=>$carrito->numeroProductos()*/,'mensaje'=>$mensaje ,'tematica'=>"");

$pantalla->mostrar("categorias.tpl",$parametros);

?>