<?php 
class EmpleadoTest extends \PHPUnit\Framework\TestCase
{
	public function testSePuedenObtenerLosDatos()
	{
		$r = new \App\Empleado("Enzo", "Sandoval", 44021952, 25000);
		$this->assertEquals( 44021952, $r->getDNI());
	}
	
	 public function testNoSePuedeCrearRectanguloConMedidasNegativas()
    {
        $this->expectException(\Exception::class);
        //Lanzará una excepción, porque la base no puede ser cero:
        $r = new \App\Empleado("", "", 0, 25000, "eCommerce");
    }	
	
}
?>