<?php
declare(strict_types=1);
namespace Alan\TascaS108\Tests\Nivell1\Exercici2;
use PHPUnit\Framework\TestCase;
use Alan\TascaS108\Nivell1\Exercici2\SpeedSensor;
class SpeedSensorTest extends TestCase{
  public function testSpeedSensor(){
    $this->assertEquals("molt lent", (new SpeedSensor(5))->getEvaluation());
    $this->assertEquals("velocitat adequada", (new SpeedSensor(30))->getEvaluation());
    $this->assertEquals("velocitat adequada", (new SpeedSensor(42))->getEvaluation());
    $this->assertEquals("velocitat adequada", (new SpeedSensor(60))->getEvaluation());
    $this->assertEquals("excés lleu", (new SpeedSensor(74))->getEvaluation());
    $this->assertEquals("excés lleu", (new SpeedSensor(80))->getEvaluation());
    $this->assertEquals("excés moderat", (new SpeedSensor(92))->getEvaluation());
    $this->assertEquals("excés moderat", (new SpeedSensor(100))->getEvaluation());
    $this->assertEquals("excés greu", (new SpeedSensor(160))->getEvaluation());
  }
}