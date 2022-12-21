<?php
    $string = 'Hello world';

    // Get length of String
    echo strlen($string) . '<br>';

    // Find the position of the first occurrence of a substring in a string
    echo strpos($string, 'o') . '<br>';

    // Find the position of the last occurrence of a substring in a string
    echo strrpos($string, 'o') . '<br>';

    // Reverse a string
    echo strrev($string) . '<br>';

    // Convert all characters to lowercase
    echo strtolower($string) . '<br>';

    // Convert all characters to uppercase
    echo strtoupper($string) . '<br>';

    // Upercase the first letter of each word
    echo ucwords($string) . '<br>';

    // String replace
    echo str_replace('world', 'Everyone', $string) . '<br>';

    $string2 = '<h1>Hello</h1>';
    echo $string2 . '<br>';
    echo htmlspecialchars($string2) . '<br>';

    printf('%s likes to %s <br>', 'Owuor', 'code');
    printf('1 + 1 = %d <br>', 1 + 1);
?>