<?php
include "database.class.php";

class alumno extends database{
	public $matricula;
	public $nombre;
	public $fecha_nac;
	public $sexo;
	public $carrera;
	public $con;
	public $error;
	
	function __construct(){
		try{
			
			$this->con=database::startup();
		}catch(PDOException $e){
			$this->error=$e->getMessage();
		}
		
		
	}
	public function insertar($data){
		
	$sql="insert into alumno(matricula, nombre, fecha_nac, sexo, carrera)	
		values (?,?,?,?,?)";
		$stmt=$this->con->prepare($sql);
		$stmt->execute($data);
	}
	public  function eliminar($id){
		
	}
	public function buscar($id){
		
	}
	public function actualizar($data){
		
	}
}




?>