<?php
    // For Loop

    /* 
        SYNTAX

        for (initialize; condition; update) {
            // Code to be executed
        }
    */

    for ($i = 0; $i <= 10; $i++) {
        echo $i . "<br>";
    }

    echo "<br> ";
    // WHILE LOOP

    $x = 1;

    while ($x <= 15) {
        echo "Number" . $x . "<br>";
        $x++;
    }
    
    echo '<br>';

    // DO WHILE LOOP

    $x = 1;

    do {
        echo "----" . $x . "----<br>";
        $x++;
    } while ($x <= 5);

    echo '<br>';

    // FOR EACH LOOP

    $sports = ['football', 'basketball', 'volleyball', 'badminton', 'hockey'];

    for ($i = 0; $i < count($sports); $i++) {
        echo "I love playing " . $sports[$i] . "<br>";
    }

    echo '<br>';

    foreach ($sports as $sport) {
        echo $sport . " is awesome <br>";
    }

    echo '<br>';

    $person = [
        'firstname' => 'Owuor',
        'lastname' => 'Ian',
        'age'=> 19
    ];

    foreach ($person as $key => $value) {
        echo $key . ' - ' . $value . '<br>';
    }
?>