<?php
    $fruits = ['apple', 'orange', 'pear'];

    // Get length of array

    echo 'Length of array is ' . count($fruits) . '<br>';

    // Search array

    echo 'Is orange in array? ' . var_dump(in_array('orange', $fruits)) . '<br>';
    echo 'Is banana in array? ' . var_dump(in_array('banana', $fruits)) . '<br>';

    // Add elements to an array

    $fruits[] = 'grape';
    print_r($fruits);

    echo '<br>';

    array_push($fruits, 'blueberry', 'strawberry');
    print_r($fruits);

    echo '<br>';

    array_unshift($fruits, 'mango');
    print_r($fruits);

    echo '<br>';

    // Remove from Array

    array_pop($fruits);
    print_r($fruits);

    echo '<br>';

    array_shift($fruits);
    print_r($fruits);

    echo '<br>';

    unset($fruits[3]);
    print_r($fruits);

    echo '<br>';

    $chunked_array = array_chunk($fruits, 2);
    print_r($chunked_array);

    echo '<br>';

    $arr1 = [1, 2, 3];
    $arr2 = [4, 5, 6];

    $arr3 = array_merge($arr1, $arr2);
    print_r($arr3);

    echo '<br>';

    // Spresd operator
    $arr4 = [...$arr1, ...$arr2];
    print_r($arr4);

    echo '<br>';

    $a = ['green', 'red', 'yellow'];
    $b = ['avocado', 'apple', 'banana'];

    $c = array_combine($a, $b);
    print_r($c);

    echo '<br>';

    $keys = array_keys($c);
    print_r($keys);

    echo '<br>';

    $flipped = array_flip($c);
    print_r($flipped);

    echo '<br>';

    $numbers = range(1, 20);
    print_r($numbers);

    echo '<br>';

    $newNumbers = array_map(function ($number) {
        return 'Number ' . $number; 
    }, $numbers);

    print_r($newNumbers);

    echo '<br>';

    $lessthan10 = array_filter($numbers, fn($number) => $number <= 10);
    print_r($lessthan10);

    echo '<br>';

    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
    echo $sum . '<br>';
?>