<?php
declare(strict_types=1);
namespace Alan\TascaS108\Tests\Nivell1\Exercici1;
use PHPUnit\Framework\TestCase;
use Alan\TascaS108\Nivell1\Exercici1\NumberChecker;
class NumberCheckerTest extends TestCase {
  public function testNumberChecker() {
    $obj = new NumberChecker(-4);
    $this->assertTrue($obj->isEven());
    $this->assertFalse($obj->isPositive());    
    
    $obj = new NumberChecker(-3);
    $this->assertFalse($obj->isEven());
    
    $obj = new NumberChecker(0);
    $this->assertTrue($obj->isEven());
    $this->assertFalse($obj->isPositive());    
    
    $obj = new NumberChecker(3);
    $this->assertFalse($obj->isEven());
    
    $obj = new NumberChecker(4);
    $this->assertTrue($obj->isEven());
    $this->assertTrue($obj->isPositive());    
  }
}