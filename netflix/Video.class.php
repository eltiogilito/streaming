<?php
class Video { 
    
	private $codigo;
	private $titulo;
	private $cartel;
	private $descargable;
	private $codigoPerfil;
    private $snopsis;
    private $video;
	
	public function __construct($codigo,$titulo,$cartel,$descargable,$codigoPerfil,$snopsis,$video){
		$this->codigo=$codigo;
		$this->titulo=$titulo;
		$this->cartel=$cartel;
		$this->descargable=$descargable;
		$this->codigoPerfil=$codigoPerfil;
        $this->snopsis=$snopsis;
        $this->video=$video;
	}

	public function __get($atributo){
		
		if (isset($this->$atributo)){
			return $this->$atributo;
		}else{
			return null;
		}
			
	}
	
}
?>