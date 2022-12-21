<?php
    /*
    CONDITIONAL OPERATORS

    < Less than
    > Greater than
    <= Less than or equal to
    >= Greater than or equal to 
    == Equal to
    === Identical to
    != Not equal to
    !== Not identical to

    */

    $age = 20;

    if ($age >= 18) {
        echo 'You are old enough to vote <br>';
    } else {
        echo 'Sorry, you are not old enough to vote <br>';
    }

    $hour = date('H');

    if ($hour < 12) {
        echo "Good Morning <br>";
    } elseif ($hour < 17) {
        echo "Good Afternoon <br>";
    } else {
        echo "Good Evening <br>";
    }

    $post = "Hello there";

    if (!empty($post)) {
        echo 'Post exists <br>';
    } else {
        echo 'Post does not exist <br>';
    }

    // TERNARY OPERATOR

    echo !empty($post) ? 'Post exists <br>' : 'Post does not exist <br>';

    $text = 1 > 2 ? 'True' : 'False';

    echo $text . '<br>';

    // NULL COALESCING OPERATOR

    $bool_text = 2 > 5 ?? null;

    echo $bool_text . "<br>";

    $favcolor = 'yellow';

    switch ($favcolor) {
        case 'red':
            echo 'Your favorite color is red <br>';
            break;
        case 'blue':
            echo 'Your favorite color is blue <br>';
            break;
        case 'green':
            echo 'Your favorite color is green <br>';
            break;
        default:
            echo 'Your favorite color is not red, green or blue <br>';
    }

?>