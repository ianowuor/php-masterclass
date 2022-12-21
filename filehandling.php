<?php
    /* 
        File handling id the ability to read and write files on the server
        PHP has built in functions for reading and writing files.
    
    */

    $file = 'extras/users.txt';

    if (file_exists($file)) {
        // echo readfile($file);
        $handle = fopen($file, 'r');
        $contents = fread($handle, filesize($file));
        fclose($handle);
        echo $contents;
    }

    $file2 = 'extras/others.txt';

    if (!file_exists($file2)) {
        $handle = fopen($file2, 'w');
        $contents = 'LAMP' . PHP_EOL . 'APACHE' . PHP_EOL . 'LINUX';
        fwrite($handle, $contents);
        fclose($handle);
    } else {
        echo fread(fopen($file2, 'r'), filesize($file));
    }
?>