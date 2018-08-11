<?php
// Lugar de Trabajo: Lista Maestra

function select_lugar_trabajo($connect_db,$varSession,$tabla_){

	$query = "SELECT id_".$tabla_.",".$tabla_." FROM ".$tabla_." WHERE activo=1";
	$result = mysqli_query($connect_db,$query);

	$selec_array=array();
	array_push($selec_array,"<select name=".$tabla_." id=".$tabla_.">","<option value='0'> Seleccione una opcion:  </option>");
	
	while($var = mysqli_fetch_array($result)){
	$select="";
	$id = "id_$tabla_";

	if($var[$id]==$varSession){		
		$select="selected";
		}								
		array_push($selec_array,"<option value=".$var[$id]." $select>".$var[$tabla_]."</option>");	
	}
	array_push($selec_array,"</select>");
	return $selec_array;
}


?>