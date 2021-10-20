<?php 
class EmpleadoPermamenteTest extends \PHPUnit\Framework\TestCase
{
    public function testSePuedeCalcularLaComision()
    {
			$r = new \App\EmpleadoPermanente($nombre = "Enzo", $apellido = "Sandoval", $dni = 44021952, $salario = 25000, $fechaIngreso = new \DateTime('22-04-2018'));
			$this->assertEquals( $r->calcularAntiguedad() . "%", $r->calcularComision());
	}
	
	public function testSePuedeCalcularElIngresoTotal()
    {
			$r = new \App\EmpleadoPermanente($nombre = "Enzo", $apellido = "Sandoval", $dni = 44021952, $salario = 25000, $fechaIngreso = new \DateTime('22-04-2018'));
			$this->assertEquals( ($salario + $salario * $r->calcularAntiguedad() / 100), $r->calcularIngresoTotal());
	}
	
	public function testSePuedeCalcularAntiguedad()
    {
			$r = new \App\EmpleadoPermanente($nombre = "Enzo", $apellido = "Sandoval", $dni = 44021952, $salario = 25000, $fechaIngreso = new \DateTime('2001-04-21'));
            $fechaActual =  new \DateTime();
            $diff = $fechaIngreso->diff($fechaActual);
            $dias = $diff->format("%y");
			$this->assertEquals( $dias, $r->calcularAntiguedad());
	}
	
	public function testRetornaCero()
    {
			$r = new \App\EmpleadoPermanente($nombre = "Enzo", $apellido = "Sandoval", $dni = 44021952, $salario = 25000, $fechaIngreso = new \DateTime());
			 $this->assertEquals( $fechaIngreso, $r->getFechaIngreso());
           $this->assertEquals( 0, $r->calcularAntiguedad());
	}
	
	public function testNoSePuedeCrearFechasFuturas()
    {
		//$fechaIngreso = new DateTime();
        //$fechaIngreso->add(new DateInterval('P1D'));
        $this->expectException(\Exception::class);
        $r = new \App\EmpleadoPermanente($nombre = "Enzo", $apellido = "Sandoval", $dni = 44021952, $salario = 25000, $fechaIngreso = (new \DateTime())->modify('1 day'));
		
    }
	
}


?>