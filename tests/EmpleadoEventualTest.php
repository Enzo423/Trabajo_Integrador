<?php 
class EmpleadoEventualTest extends \PHPUnit\Framework\TestCase
{
    public function testSePuedeCalcularLaComision()
    {
			$r = new \App\EmpleadoEventual($nombre = "Enzo", $apellido = "Sandoval", $dni = 44021952, $salario = 25000, $montosDeVentas = [3000, 4000]);
			$this->assertEquals( (3000+4000) / 2 *0.05, $r->calcularComision());
	}
	
	
	
}
?>