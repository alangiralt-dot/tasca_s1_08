# Tasca S1.08: Testing with PHPUnit

This repository contains the exercises for the **Sprint 1, Topic 8: Testing** module of the Full Stack PHP bootcamp. The goal is to practice unit testing using the PHPUnit library and TDD (Test-Driven Development) methodologies.

## Requirements
*   **PHP**: 8.2.12
*   **Composer**: 2.8.5
*   **PHPUnit**: 11.5.55

## Installation & Setup
To get the project running locally:

1. Clone the repository:
   ```bash
   git clone https://github.com/alangiralt-dot/tasca_s1_08.git
   ```
   ```bash
   cd tasca_s1_08
   ```
2. Install dependencies:
   ```bash
   composer install
   ```
3. Run the unit tests:
   ```bash
   ./vendor/bin/phpunit tests/Nivell1/Exercici1/NumberCheckerTest.php
   ```
   ```bash
   ./vendor/bin/phpunit tests/Nivell1/Exercici2/SpeedSensorTest.php
   ```


## Exercises Overview

### Level 1
*   **Exercise 1: NumberChecker**: Unit tests for the provided `NumberChecker` class.
*   **Exercise 2: SpeedSensor**: TDD implementation of a speed sensor that returns status thresholds:
    *   `< 30 km/h`: Very slow
    *   `30-60 km/h`: Adequate speed
    *   `61-80 km/h`: Mild excess
    *   `81-100 km/h`: Moderate excess
    *   `> 100 km/h`: Severe excess
