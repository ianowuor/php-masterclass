<?php
    // PHP Functions

    $y = 12; // Global variable

    function registerUser($email) {
        global $y; // Refers to the global $y variable
        $x = 5; // Refers to the local variable 4x
        echo 'User registered <br>';
        echo $y . "<br>";
        echo $x . "<br>";
        echo $email . " registered <br>";
    }

    registerUser('owuor@mails.com');

    function sum($n1 = 4, $n2 = 6) {
        return $n1 + $n2;
    }

    echo sum(10, 5) . '<br>';
    echo sum() . "<br>";

    $subtract = function ($n1, $n2) {
        return $n1 - $n2;
    };
    
    echo $subtract(15, 50) . "<br>";

    // PHP ARROW FUNCTIONS

    $multiply = fn($n1, $n2) => $n1 * $n2;

    echo $multiply(15, 4) . "<br>";
?>