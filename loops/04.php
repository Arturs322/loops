<?php

//infinte loop
//$number = 1;
$input = (int) readline("Enter your number: ") . PHP_EOL;


    for ($number = 1; $number <= $input; $number++) {
        if ($number % 3 == 0 && $number % 5 == 0) {
            echo " " . "FizzBuzz";
        } elseif ($number % 5 == 0) {
            echo " " . "Buzz" . PHP_EOL;
        } elseif ($number % 3 == 0) {
            echo " " . "Fizz";
        } else {
            echo " " . $number;
        }
    }
