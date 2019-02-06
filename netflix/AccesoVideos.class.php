<?php 
require_once("../../seguridad/netflix/videosBD.php");
class AccesoVideos {
	/*
		
	public function getFoto($codigo){
		$canal=new mysqli(videosBD::IP, videosBD::USUARIO, videosBD::CLAVE, videosBD::BD);
		if ($canal->connect_errno){
			die("Error de conexión con la base de datos ");
		}
		$canal->set_charset("utf8");
		$consulta=$canal->prepare("select * from videos where codigo=?");
		$consulta->bind_param("s",$cod);
		$cod=$codigo;
		$consulta->execute();
		$consulta->bind_result($ccodigo,$ttitulo,$ccartel,$ddescargable,$ccodigoPerfil,$ssnopsis,$vvideo);
		$consulta->store_result();
		
		if ($consulta->num_rows!=1){
			$canal->close();
			return null;
		}
		$consulta->fetch();
		$canal->close();
		return new Video($ccodigo,$ttitulo,$ccartel,$ddescargable,$ccodigoPerfil,$ssnopsis,$vvideo);
	}*/
	
	public function getVideos($usuario){
		$canal=new mysqli(videosBD::IP, videosBD::USUARIO, videosBD::CLAVE, videosBD::BD);
		if ($canal->connect_errno){
			die("Error de conexión con la base de datos ".$canal->connect_error);
		}
		$canal->set_charset("utf8");
        
        
		
		$consulta=$canal->prepare("select v.* from videos v,perfil_usuario p where v.codigo_perfil=p.codigo_perfil and p.dni=? order by v.titulo ");
        
        
        $consulta->bind_param("s",$usuario);
		$consulta->execute();
		$consulta->bind_result($ccodigo,$ttitulo,$ccartel,$ddescargable,$ccodigoPerfil,$ssnopsis,$vvideo);
		$videos=array();
        
		while ($consulta->fetch()){
            $ttematica="";
			array_push($videos,new Video($ccodigo,$ttitulo,$ccartel,$ddescargable,$ccodigoPerfil,$ssnopsis,$vvideo,$ttematica));
		}
        
		$canal->close();
		return $videos;
	}
    
    public function getCategorias($usuario){
		$canal=new mysqli(videosBD::IP, videosBD::USUARIO, videosBD::CLAVE, videosBD::BD);
		if ($canal->connect_errno){
			die("Error de conexión con la base de datos ".$canal->connect_error);
		}
		$canal->set_charset("utf8");
        
        
		
		$consulta=$canal->prepare("select v.codigo , v.titulo, v.cartel , t.descripcion from videos v, tematica t, asociado a,perfil_usuario p where v.codigo = a.codigo_video and a.codigo_tematica = t.codigo and v.codigo_perfil=p.codigo_perfil and p.dni=? ORDER by t.descripcion");
        
        $consulta->bind_param("s",$usuario);
        
        $videos=array();
		$consulta->execute();
		$consulta->bind_result($ccodigo,$ttitulo,$ccartel,$ttematica);
		
	   while ($consulta->fetch()){
            $ddescargable="";
            $ccodigoPerfil="";
            $ssnopsis="";
           $vvideo="";
           
			array_push($videos,new Video($ccodigo,$ttitulo,$ccartel,$ddescargable,$ccodigoPerfil,$ssnopsis,$vvideo,$ttematica));
		}
        
		$canal->close();
		return $videos;
	}
	

	
	
}
?>