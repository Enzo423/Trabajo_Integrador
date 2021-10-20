<?php 
class EmpleadoTest extends \PHPUnit\Framework\TestCase
{
	public function testSePuedenObtenerLosDatos()
	{
		$r = new \App\Empleado($nombre = "Enzo", $apellido = "Sandoval", $dni = 44021952, $salario = 25000, $sector = "X");
        $this->assertEquals( $nombre . " " . $apellido, $r->getNombreApellido());
		$this->assertEquals( $dni, $r->getDNI());
		$this->assertEquals( $salario, $r->getSalario());
		//setSector($sector);
		$this->assertEquals( $sector, $r->getSector());
		$this->assertEquals( $nombre . " " . $apellido . " " . $dni . " " . $salario, $r->__toString());
	}
	
	 public function testNoSePuedeCrearNombreEmpty()
    {
		
        $this->expectException(\Exception::class);
        $r = new \App\Empleado($nombre = "", $apellido = "Sandoval", $dni = 44021952, $salario = 25000, $sector="No especificado");
		
    }
	
}
?>