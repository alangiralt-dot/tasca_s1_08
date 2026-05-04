<?php
declare(strict_types=1);
namespace Alan\TascaS108\Tests\Nivell1\Exercici2;
use PHPUnit\Framework\TestCase;
use Alan\TascaS108\Nivell1\Exercici2\SpeedSensor;
class SpeedSensorTest extends TestCase{
  public function testGetEvaluation5() {$this->assertEquals("molt lent", (new SpeedSensor(5))->getEvaluation());}
  public function testGetEvaluation30() {$this->assertEquals("velocitat adequada", (new SpeedSensor(30))->getEvaluation());}
  public function testGetEvaluation42() {$this->assertEquals("velocitat adequada", (new SpeedSensor(42))->getEvaluation());}
  public function testGetEvaluation60() {$this->assertEquals("velocitat adequada", (new SpeedSensor(60))->getEvaluation());}
  public function testGetEvaluation74() {$this->assertEquals("excés lleu", (new SpeedSensor(74))->getEvaluation());}
  public function testGetEvaluation80() {$this->assertEquals("excés lleu", (new SpeedSensor(80))->getEvaluation());}
  public function testGetEvaluation92() {$this->assertEquals("excés moderat", (new SpeedSensor(92))->getEvaluation());}
  public function testGetEvaluation100() {$this->assertEquals("excés moderat", (new SpeedSensor(100))->getEvaluation());}
  public function testGetEvaluation160() {$this->assertEquals("excés greu", (new SpeedSensor(160))->getEvaluation());}
}