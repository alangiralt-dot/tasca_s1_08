<?php
declare(strict_types=1);
namespace Alan\TascaS108\Nivell1\Exercici2;
class SpeedSensor {
  public function __construct(private int $speed) {}
  public function getEvaluation(): string {
    return match(true) {
      $this->speed > 0 && $this->speed < 30 => "molt lent",
      $this->speed >= 30 && $this->speed <= 60 => "velocitat adequada",
      $this->speed > 60 && $this->speed <= 80 => "excés lleu",
      $this->speed > 80 && $this->speed <= 100 => "excés moderat",
      $this->speed > 100  => "excés greu",
      default => "velocitat negativa"
    };
  }
}
   