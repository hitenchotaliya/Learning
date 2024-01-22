<?php
class MathOperations {
    const PI = 3.14;
    const GRAVITY = 9.8;

    public function calculateCircleArea($radius) {
        return self::PI * $radius * $radius;
    }

    public function calculateWeight($mass) {
        return $mass * self::GRAVITY;
    }
}

// Accessing class constants
echo MathOperations::PI;       // Output: 3.14
echo "<br>";
echo MathOperations::GRAVITY;  // Output: 9.8
echo "<br>";

// Creating an instance of the class
$math = new MathOperations();

// Using class constants within class methods
echo $math->calculateCircleArea(5);   // Output: 78.5
echo "<br>";
echo $math->calculateWeight(10);      // Output: 98
