<?php
    /* 
        PHP has an exception model similar to that of other programming 
        languages. An exception can be thrown, and caught ('catched')
        within PHP. Code may be surrounded in a try block, to facilitate 
        the catching of potential exceptions. Each try must atleast have 
        one corresponding catch or final block.
    
    */

    function inverse ($x) {
        if (!$x) {
            throw new Exception ('Division by zero');
        }

        return 1 / $x;
    }

    try {
        echo inverse(5) . '<br>';
        echo inverse(0) . '<br>';
    } catch (Exception $e) {
        echo 'Caught Exception ', $e -> getMessage(), ' '; 
    } finally {
        echo 'Program executed successfully';
    }
?>