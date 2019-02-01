<?php
$usuario="";
if (!isset($_POST['usuario'])){
	header("Location: login.php");
	exit;
}
$usuario=strip_tags(trim($_POST['usuario']));
$clave="";
if (!isset($_POST['clave'])){
	header("Location: login.php");
	exit;
}
$clave=strip_tags(trim($_POST['clave']));
if (empty($usuario) || strlen($usuario)>20 || empty($clave) || strlen($clave)>20){
	header("Location: login.php?mensaje=".urlencode("Usuario inexistente o clave no reconocida"));
	exit;
}

$canal=new mysqli(videosBD::IP, videosBD::USUARIO, videosBD::CLAVE, videosBD::BD);
		if ($canal->connect_errno){
			die("Error de conexión con la base de datos ".$canal->connect_error);
		}
		$canal->set_charset("utf8");




		
		$consulta=$canal->prepare("select clave,usuario from usuarios where usuario=?");
        $consulta->bind_param("s",$usuario1);
        $consulta->bind_result($consulta, $cclave,$nnombre);
        $usuario1=$usuario;
		$consulta->execute();
		
        

		$videos=array();
		while ($consulta->fetch()){
			array_push($videos,new Video($ccodigo,$ttitulo,$ccartel,$ddescargable,$ccodigoPerfil,$ssnopsis,$vvideo));
		}
		$canal->close();









mysqli_stmt_store_result($consulta);
$n=mysqli_stmt_num_rows($consulta);






if ($n!=1){
	header("Location: login.php?mensaje=".urlencode("Usuario inexistente o clave no reconocida"));
	exit;
}
mysqli_stmt_fetch($consulta);
mysqli_stmt_close($consulta);
unset($consulta);



if(!password_verify($clave,$cclave)){
    header("Location: login.php?mensaje=".urlencode("Usuario inexistente o clave no reconocida"));
    exit;
    }

//Se inicia sesión
session_name("SESION");
session_cache_limiter('nocache');
session_start();

//Datos básicos del usuario (secretos)
$_SESSION['validado']=true;
$_SESSION['usuario']=$usuario;

/*
$_SESSION['menu']=$menu;
*/

mysqli_stmt_close($consulta);
unset($consulta);

mysqli_close($canal);
?>