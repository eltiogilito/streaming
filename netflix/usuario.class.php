<?php
class Usuario { 
    
	private $dni;
	private $nombre;
	
	
	
	public function __construct($codigo,$titulo,$cartel){
		$this->dni=$dni;
		$this->nombre=$nombre;
		$this->clave=$clave;
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