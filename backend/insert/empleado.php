<?php

require("../../complementos/validaciones_formulario.php");
//Declaracion de variables
$mensaje_error="";
$mensaje_error2="";
$CentroCosto = "Centro_Costos, ";
$foto_empleado = "foto_empleado, ";
//echo count($_POST);
//die();

foreach ($_POST as $key => $value) {
	//echo $key."==>".$value."<br>";

	//Validacion de campos obligatorios
	if($key=="tipo_documento" OR $key=="num_documento" OR $key=="nombres" OR $key=="apellidos" OR $key=="fecha_nacimiento" OR $key=="correo" OR $key=="fecha_ingreso" OR $key=="departamento" OR $key=="area" OR $key=="cargo" OR $key=="lugar_trabajo" OR $key=="turno" OR $key=="tipo_salario" OR $key=="salario" ){

		$mensaje_error.=campo_vacio($key,$value);
	}

	if($key == "CentroCosto"){
		$CentroCosto = "";
		foreach ($value as $key1 => $value1) {
			//var_dump($value);
			//echo $key1."==>".$value1."<br>";
		}
	}
	if($key == "foto_empleado"){
		$foto_empleado="";
	}

	//Validacion de Campos Numericos
	if($key =="num_documento" OR $key=="salario" ){
		//echo $key."==".$value."<br>";
		$mensaje_error2.= campo_no_numerico($key,$value);
	}

}


//Mostrar Mensaje de Error
//Campos Vacios
if($mensaje_error != "" OR $CentroCosto!="" OR $foto_empleado!=""){

		$mensaje_error = "Debe llenar los campos ".$mensaje_error.$CentroCosto.$foto_empleado." estos son obligatorios!!";
}

//Campos Numericos
if($mensaje_error2 != ""){
	$mensaje_error = $mensaje_error."<br>"."Los campos ".$mensaje_error2." deben ser numericos";
}
//echo $mensaje_error;

header('Location: ../../frontend/registro_empleado.php?mensaje_error='.$mensaje_error);
?>