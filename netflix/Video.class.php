 <?php
class Video { 
    
	private $codigo;
	private $titulo;
	private $cartel;
	private $descargable;
	private $codigoPerfil;
    private $snopsis;
    private $video;
    private $tematica;
	
    /* public function __construct(){
		$argv=func_get_args();
         switch(func_get_args()){
            case 4:
                 self::__construct1(argv[0],argv[1],argv[2],argv[3]);
                 break;
            case 7:
                 self::__construct2(argv[1],argv[2],argv[3],argv[4],argv[5],argv[6],argv[7]);
                 
         }
	}*/
   /*  public function __construct1($codigo,$titulo,$cartel,$tematica){
		$this->codigo=$codigo;
		$this->titulo=$titulo;
		$this->cartel=$cartel;
        $this->tematica=$tematica;
	}*/
    public function __construct($codigo,$titulo,$cartel,$descargable,$codigoPerfil,$snopsis,$video,$tematica){
		$this->codigo=$codigo;
		$this->titulo=$titulo;
		$this->cartel=$cartel;
		$this->descargable=$descargable;
		$this->codigoPerfil=$codigoPerfil;
        $this->snopsis=$snopsis;
        $this->video=$video;
        $this->tematica=$tematica;
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