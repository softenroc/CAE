<?php

function CalculaEdad( $fecha ) {
    list($Y,$m,$d) = explode("-",$fecha);
    // Return tiene una notacion de iff
    return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
}


echo "fecha: ".argv[0];


?>