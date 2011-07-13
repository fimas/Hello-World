<?php
    // Prints the string "Hello World!" to the screen
    class Car {
        private $speed;
        
        public function __construct($s) {
            $this->speed = $s; // Set initial speed
        }
        
        public function accelerate() {
            $this->speed++;
        }
        
        public function decelerate() {
            $this->speed--;
        }
        
        public function getSpeed() {
            return $this->speed;
        }
    }
    
    $car = new Car(25);
    
    echo $car->getSpeed(); // Prints 25
    
    $car->accelerate(); // +1
    $car->decelerate(); // -1
    $car->decelerate(); // -1
    
    echo $car->getSpeed(); // Prints 24
?>