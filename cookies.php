<?php
    /* 
        Cookies are a mechanism for storing data in the remote browser and 
        thus tracking or identifyng return users. You can set specific data
        to be stored in the browser, and then retrieve it when the user 
        visits the site again.
    */

    // Set cookie

    setcookie('name', 'Owuor', time() + 8640);

    if (isset($_COOKIE['name'])) {
        echo $_COOKIE['name'];
    }

    // Delete Cookie
    // To delete a cookie set it to the past

    setcookie('name', 'Owuor', time() - 50);
?>