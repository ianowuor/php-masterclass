<?php
    // PHP DATATYPES

    // Strings
    $name = "Owuor Ian";
    echo $name."<br>";

    // Int
    $age = 19;
    echo $age."<br>";

    // Booleans
    $has_kids = true;
    var_dump($has_kids);

    // Float
    $cash_on_hand = 20.75;
    echo "<br>". $cash_on_hand . "<br>";

    // String concatenation
    echo $name . ' is ' . $age . ' years old<br>';

    echo "${name} is ${age} years old<br>";

    // Constants

    define('HOST', 'localhost');
    define('DB_NAME', 'dev_db');

    echo HOST;
?>