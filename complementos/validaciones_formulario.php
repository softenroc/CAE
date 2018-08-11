<?php
//Funciones que permiten validar los campos de un formulario

//Determinar si un campo es vacio o no
function campo_vacio($campo,$valor){

	if(empty($valor)){
		return $campo.", ";
	}else{
		return "";
	}

}

//Determina si el valor es numerico
function campo_no_numerico($campo,$valor){

	$tamaño=strlen($valor);
	
	for($i=0; $i <$tamaño ; $i++) { 
		$chart=substr($valor, $i,1);
		
		if(!($chart=='0' OR $chart=='1' OR $chart=='2' OR $chart=='3' OR $chart=='4' OR $chart=='5' OR $chart=='6' OR $chart=='7' OR $chart=='8' OR $chart=='9')){
			
			return  $campo.", ";
			break;
		}
	}
}

function CalculaEdad( $fecha ) {
    list($Y,$m,$d) = explode("-",$fecha);
    // Return tiene una notacion de iff
    return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
}




?>