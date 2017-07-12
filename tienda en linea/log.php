
<?php

$nombre=(isset($_REQUEST['form-username'])?$_REQUEST['form-username']:null);
$passw=(isset($_REQUEST['form-password'])?$_REQUEST['form-password']:null);

$respuesta[]=null;

if($nombre=="admin"){
	if($passw=="jaguar"){
		$respuesta['error']=0;
		$respuesta['mensaje']="Bienvenido ".$nombre;
	} else{
		$respuesta['error']=2;
		$respuesta['mensaje']="Password incorrecto";		
	}
} else{
		$respuesta['error']=1;
		$respuesta['mensaje']="Nombre de usuario inexistente";	
}
echo json_encode($respuesta,0);
?>