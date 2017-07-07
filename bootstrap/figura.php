<?php
class figura{
	public $nombre;
	public $color;
	
	function __construct(){
		$this->nombre="";
		$this->color="";
	}
}
class triangulo extends figura{
	public $base;
	public $altura;
	
	function __construct(){
		$this->base=0;
		$this->altura=0;
	}
	function area(){
		return $this->base*$this->altura/2;
	}
	function inicializar($n,$c,$b,$a){
		$this->nombre=$n;
		$this->color=$c;
		$this->base=$b;
		$this->altura=$a;
	}
}
$figura= new triangulo();
$figura->inicializar("triangulo","#CCA326","270","20");
echo $figura->area();
?>