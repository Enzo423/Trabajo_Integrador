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
        $r = new \App\Empleado($nombre = NULL, $apellido = "Sandoval", $dni = 44021952, $salario = 25000, $sector="No especificado");
		
    }
	
	public function testNoSePuedeCrearApellidoEmpty()
    {
		
        $this->expectException(\Exception::class);
        $r = new \App\Empleado($nombre = "Enzo", $apellido = NULL, $dni = 44021952, $salario = 25000, $sector="No especificado");
		
    }
	
	public function testNoSePuedeCrearDniEmpty()
    {
		
        $this->expectException(\Exception::class);
        $r = new \App\Empleado($nombre = "Enzo", $apellido = "Sandoval", $dni = NULL, $salario = 25000, $sector="No especificado");
		
    }
	
	public function testNoSePuedeCrearSalarioEmpty()
    {
		
        $this->expectException(\Exception::class);
        $r = new \App\Empleado($nombre = "Enzo", $apellido = "Sandoval", $dni = 44021952, $salario = NULL, $sector="No especificado");
		
    }
	
	public function testNoSePuedeCrearDniConLetras()
    {
		
        $this->expectException(\Exception::class);
        $r = new \App\Empleado($nombre = "Enzo", $apellido = "Sandoval", $dni = "abc", $salario = 25000, $sector="No especificado");
		
    }
	
}
?>