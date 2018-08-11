<?php
use PHPUnit\Framework\TestCase;

require ('recursos\CalcularEdad.php');

class CalcularEdadTest extends TestCase
{
    public function testCalculaEdad()
    {
        $caledad = new CalcularEdad();
        $caledad->setFecha("1985-04-02");        
        $this->assertEquals(33,$caledad->calculaTuEdad());
    }
}

?>