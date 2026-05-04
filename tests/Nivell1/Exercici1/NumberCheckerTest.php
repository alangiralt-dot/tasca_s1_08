<?php
declare(strict_types=1);
namespace Alan\TascaS108\Tests\Nivell1\Exercici1;
use PHPUnit\Framework\TestCase;
use Alan\TascaS108\Nivell1\Exercici1\NumberChecker;
class NumberCheckerTest extends TestCase {
  public function testIsEvenMinus4() {$this->assertTrue((new NumberChecker(-4))->isEven());}
  public function testIsPositiveMinus4() {$this->assertFalse((new NumberChecker(-4))->isPositive());}
  public function testIsEvenMinus3() {$this->assertFalse((new NumberChecker(-3))->isEven());}
  public function testIsEvenZero() {$this->assertTrue((new NumberChecker(0))->isEven());}
  public function testIsPositiveZero() {$this->assertFalse((new NumberChecker(0))->isPositive());}
  public function testIsEven3() {$this->assertFalse((new NumberChecker(3))->isEven());}
  public function testIsEven4() {$this->assertTrue((new NumberChecker(4))->isEven());}
  public function testIsPositive4() {$this->assertTrue((new NumberChecker(4))->isPositive());}
}