<?php
    // Simple Array
    $numbers = [1, 44, 55, 33];

    // Array Function
    $fruits = array('apple', 'orange', 'pear');

    echo $fruits[1] . "<br>";

    echo $numbers[3] . "<br>";

    // PHP Associative Arrays

    $colors = [
        1 => 'red',
        4 => 'blue',
        6 => 'green'
    ];

    echo $colors[4] . "<br>";

    $hex = [
        'red' => '#f00',
        'blue' => '#0f0',
        'green' => '#00f'
    ];

    echo $hex['blue'] . "<br>";

    $person = [
        'first_name' => 'Owuor',
        'last_name' => 'Ian',
        'email' => 'owuor@mails.com'
    ];

    echo $person['first_name'] . "<br>";

    // MULTIDIMENSIONAL ARRAYS

    $people = [
        [
            'first_name' => 'Owuor',
            'last_name' => 'Ian',
            'email' => 'owuor@mails.com'
        ],
        [
            'first_name' => 'Chris',
            'last_name' => 'Fix',
            'email' => 'fixit@mails.com'
        ],
        [
            'first_name' => 'Lex',
            'last_name' => 'Luthor',
            'email' => 'lluthor@mails.com'
        ]
    ];

    echo $people[1]['email'] . "<br>";

    var_dump(json_encode($people));
?>