<?php 
class EmpleadoPermamenteTest extends \PHPUnit\Framework\TestCase
{
    public function testSePuedeCalcularLaComision()
    {
			$r = new \App\EmpleadoPermanente($nombre = "Enzo", $apellido = "Sandoval", $dni = 44021952, $salario = 25000, $fechaIngreso = new \DateTime('22-04-2018'));
			$this->assertEquals( $r->calcularAntiguedad() . "%", $r->calcularComision());
	}
	
}
?>