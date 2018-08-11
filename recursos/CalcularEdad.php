<?php
class CalcularEdad
{
    protected $fecha;

function calculaTuEdad( ) {
    list($Y,$m,$d) = explode("-",$this->fecha);
    // Return tiene una notacion de iff
    return( date("md") < $m.$d ? date("Y")-$Y-1 : date("Y")-$Y );
}
 public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
}
?>