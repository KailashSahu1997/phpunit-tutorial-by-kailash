<?php 
use PHPUnit\Framework\TestCase;

require_once "src/Calculator.php";

class CalculatorTest extends TestCase{
    public function testAdd()
    {
        $obj = new Calculator();
        $this->assertEquals(10,$obj->add(5,5));
    }
}
?>